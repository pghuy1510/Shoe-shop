<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
    	if($oldCart){
    		$this->items=$oldCart->items;
    		$this->totalQty=$oldCart->totalQty;
    		$this->totalPrice=$oldCart->totalPrice;
    	}
    }
    //thêm sản phẩm vào giỏ hàng
    public function add($item,$id){
    	$giohang = ['qty'=>0,'price'=>$item->GiaSP,'item'=>$item];
    	if($this->items){
    		if(array_key_exists($id, $this->items)){
    			$giohang = $this->items[$id];
    		}
    	}
    	$giohang['qty']++;
    	$giohang['price']= $item->GiaSP * $giohang['qty'];
    	$this->items[$id]=$giohang;
    	$this->totalQty++;
    	$this->totalPrice+=$item->GiaSP;
    }
    //xóa 1 sản phẩm
    public function reduceByOne($id){
    	$this->items[$id]['qty']--;
    	$this->items[$id]['price']-=$this->items[$id]['item']['price'];
    	$this->totalQty--;
    	$this->totalPrice-=$this->items[$id]['item']['price'];
    	if($this->items[$id]['qty']<=0){
    		unset($this->items[$id]);
    	}
    }
    //xóa nhiều sản phẩm
    public function removeItem($id){
    	$this->totalQty-=$this->items[$id]['qty'];
    	$this->totalPrice-=$this->items[$id]['price'];
    	unset($this->items[$id]);
    }
}
