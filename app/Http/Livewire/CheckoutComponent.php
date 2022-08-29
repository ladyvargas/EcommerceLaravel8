<?php

namespace App\Http\Livewire;

use App\Models\ShoppinCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public function render()
    {
        return view('livewire.checkout-component')->layout('layouts.base');
    }

    public function shoppingCart()
    {
        Cart::destroy();
        return redirect('thankyou');
    }
}
