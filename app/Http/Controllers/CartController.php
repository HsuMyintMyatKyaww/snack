<?php

namespace App\Http\Controllers;

use Session;
use App\Cart;
use App\Item;
use App\Order;
use App\OItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
    	$cart = Session::get('cart');
    	if ($cart) {
    		return view('items.cart',['cartItems' => $cart,'totalPrice' => $cart->totalPrice]);
    	}else{
    		return redirect('/items/product');
    	}
    }

    public function addToCart(Request $request,$id)
    {
    	$item = Item::find($id);
    	$oldCart = $request->session()->get('cart');
    	$cart = new Cart($oldCart);
    	$cart->add($item,$id);

    	$request->session()->put('cart',$cart);
    	return redirect('/items/product');
    }

    public function removeCart()
    {
    	session()->flush();
    	return back();
    }

    public function add(){
        return view('items.order');
    }

    public function create(){
        $validator = validator(request()->all(), [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $order = new Order;
        $order->name = request()->name;
        $order->email = request()->email;
        $order->phone = request()->phone;
        $order->address = request()->address;
        $order->save();

        $order_id = $order->id;
        $cart = request()->session()->get('cart');

        foreach ($cart->items as $item)
        {
            $item_id = $item['id'];
            $qty = $item['qty'];

            $OItem = new OItem;
            $OItem->item_id = $item_id;
            $OItem->order_id = $order_id;
            $OItem->qty = $qty;
            $OItem->totalPrice = $cart->totalPrice;
            $OItem->save();
        }

        session()->flush();

        return redirect('/items/product');
    }
}
