<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartComponent extends Component
{
    public $cartItems = [];
    protected $listeners = ['cartUpdated' => 'onCartUpdate'];

    public function mount()
    {
        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
    }

    public function onCartUpdate()
    {
        $this->mount();
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}
