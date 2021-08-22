<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class CartMain extends Component
{
    public $cartItems = [];
    protected $listeners = [
        'cartUpdated' => 'onCartItemUpdate',
        'cartDeleted' => 'onCartItemDelete',
    ];

    public function mount()
    {
        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
    }

    public function onCartItemUpdate()
    {
        $this->mount();
    }

    public function onCartItemDelete()
    {
        $this->mount();
    }

    public function deleteItem($id)
    {
        \Cart::session(auth()->id())->remove($id);
        $this->emit('cartDeleted');
        $this->mount();
    }

    public function render()
    {
        return view('livewire.cart.cart-main');
    }
}
