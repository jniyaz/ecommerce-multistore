<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class Navcart extends Component
{

    protected $listeners = [
        'cartUpdated' => 'onCartItemUpdate',
        'cartDeleted' => 'onCartItemDelete',
    ];

    public function mount()
    {
        if(auth()->user()) {
            \Cart::session(auth()->id())->getContent()->toArray();
        }
    }

    public function deleteItem($id)
    {
        \Cart::session(auth()->id())->remove($id);
        $this->emit('cartDeleted');
    }

    public function onCartItemUpdate()
    {
        $this->mount();
    }

    public function onCartItemDelete()
    {
        $this->mount();
    }

    public function render()
    {
        return view('livewire.cart.navcart');
    }
}
