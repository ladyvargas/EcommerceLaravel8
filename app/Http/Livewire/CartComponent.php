<?php

namespace App\Http\Livewire;

use App\Models\ShoppinCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartComponent extends Component
{
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }

    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty)->associate('App\Models\Product');
    }

    public function descreaseQuantity($rowId)
    {
        $product = Cart::get($rowId)->associate('App\Models\Product');
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty)->associate('App\Models\Product');
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message', 'Item has been removed');
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Artículo añadido en la cesta');
    }

    public function remove($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, -1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Artículo eliminado de la cesta');
    }

    public function destroyAll()
    {
        Cart::destroy();
    }
}
