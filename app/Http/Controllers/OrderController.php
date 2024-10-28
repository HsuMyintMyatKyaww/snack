<?php

namespace App\Http\Controllers;

use App\Order;
use App\OItem;
use Session;
use App\Cart;
use App\Item;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(){
        $data = Order::where('status',0)->get();
        if($data){
            return view('admin.order',['orders' => $data]);
        }
        else{
            $data = NULL;
            return view('admin.order',['orders' => $data]);
        }
        
    }

    public function confirm($id){
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return redirect('admin/order-index');
    }

    public function undo($id){
        $order = Order::find($id);
        $order->status = 0;
        $order->save();
        $orders = Order::all();
        return redirect('/admin/orderhistory-index');
    }
    
    public function orderhistory(){
        $data = Order::where('status',1)->get();
        if($data){
            return view('admin.order-history',['orders' => $data]);
        }
        else{
            $data = NULL;
            return view('admin.order-history',['orders' => $data]);
        }
    }
    
}
