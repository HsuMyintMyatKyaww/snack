<?php

namespace App\Http\Controllers;

use App\Order;
use App\OItem;
use App\Cart;
use App\Item;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	$result = OItem::All();
    	$data = DB::table('items')->count();
    	$data1 = DB::table('categories')->count();
    	$data2 = DB::table('orders')->count();
    	return view('admin.dashboard',['oitems' => $result,'items' => $data,'categories' => $data1,'orders' => $data2]);
    }
}
