<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;
use Cart;


class CartComponent extends Component
{
    public function increaseQuantity($rowId){
        $product =Cart::get($rowId);
        $new_qty = $product->qty+1;
        Cart::update($rowId,$new_qty);

    }
    public function decreaseQuantity($rowId){
        $product =Cart::get($rowId);
        $new_qty = $product->qty-1;
        Cart::update($rowId,$new_qty);
    }
    public function delete($rowId){
        $product=Cart::remove($rowId);
        session()->flash('success_mesage','delete from cart');
    }
    public function deleteAll(){
        Cart::destroy();
    }

    public function checkout(){
        if(Auth::check()){
            return redirect()->route('checkout');
        }else{
            return redirect()->route('login');
        }
    }
    public function calcAmountForCheckout(){
        session()->put('checkout',[
            'discount'=>0,
            'subtotal'=>Cart::instance('cart')->subtotal(),
            'tax'=>Cart::instance('cart')->tax(),
            'total'=>Cart::instance('cart')->total(),

        ]);
    }
    public function render()
    {
        $this->calcAmountForCheckout();
        
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
