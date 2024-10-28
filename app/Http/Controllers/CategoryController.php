<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

	public function index(){
		$data = Category::All();
		return view('admin.category',['categories' => $data]);
	}

	public function add(){
		return view('admin.category-add');
	}

    public function create(){
    	$category = new Category;
    	$category->categoryName = request()->categoryName;
    	$category->save();

    	return redirect('/admin/category-index');
    }

    public function delete($id){
    	$data = Category::find($id);
    	$data->delete();
    	return redirect('/admin/category-index');
    }

    public function edit($id){
    	$data = Category::find($id);
    	return view('admin.category-edit',['category'=>$data]);
    }

    public function update($id){
    	$category = Category::find($id);
    	$category->categoryName = request()->categoryName;
    	$category->save();
        return redirect('/admin/category-index');
    }
}
