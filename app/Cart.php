<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    function __construct($oldCart)
    {
    	if($oldCart){
    		$this->items = $oldCart->items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    public function add($item,$id)
    {
    	$storedItem = [
    		'qty' => 0,
            'id' => $item->id,
    		'unitprice' => $item->price,
    		'price' => $item->price,
    		'name' => $item->snack_name,
    		'image' => $item->image
    	];
    	if ($this->items){
    		if(array_key_exists($id, $this->items)){
    			$storedItem = $this->items[$id];
    		}
    	}
    	$storedItem['qty']++;
    	$storedItem['unitprice'] = $item->price * $storedItem['qty'];
    	$this->items[$id] = $storedItem;
    	$this->totalQty++;
    	$this->totalPrice += $item->price;
    }
}
