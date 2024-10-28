<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function home(){
        return view('items.index');
    }

    public function index(){
        $data = Item::All();
        return view('admin.item',['items' => $data]);
    }

    public function add(){
        return view('admin.item-add');
    }


    public function create(Request $request){

    	$item = new Item;
    	$item->snack_name = request()->snack_name;
    	$item->price = request()->price;
    	$item->about = request()->about;

    	if($request->hasfile('image')){
    		$file = request()->file('image');
    		$extension = $file->getClientOriginalExtension();
    		$filename = time() . '.' . $extension;
    		$file->move('uploads/items/',$filename);
    		$item->image = $filename;
    	}
    	else{
    		return $request;
    		$item->image = '';
    	}

    	$item->category_id = request()->category_id;
    	$item->save();

    	return redirect('/admin/item-index');
    }

    public function delete($id){
        $data = Item::find($id);
        $data->delete();
        return redirect('/admin/item-index');
    }

    public function edit($id){
        $data = Item::find($id);
        return view('admin.item-edit',['item'=>$data]);
    }

    public function update($id,Request $request){
        $item = Item::find($id);
        $item->snack_name = request()->snack_name;
        $item->price = request()->price;
        $item->about = request()->about;

        if($request->hasfile('image')){
            $file = request()->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/items/',$filename);
            $item->image = $filename;
        }
        else{
            return $request;
            $item->image = '';
        }

        $item->category_id = request()->category_id;
        $item->save();

        return redirect('/admin/item-index');
    }


    public function product(){
        $data = Item::All();
        return view('items.product',['items' => $data]);
    }

     public function about(){
       return view('items.about');
    }

     public function contact(){
       return view('items.contact');
    }

    public function detail($id){

        $data = Item::find($id);
        return view('items.detail',['item' => $data ]);
    }
}
