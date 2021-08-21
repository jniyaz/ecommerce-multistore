<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class Delete extends Component
{
    public $item = null;

    public function mount($item)
    {
        $this->item = $item;
    }

    public function deleteItem()
    {
        \Cart::session(auth()->id())->remove($this->item['id']);
        $this->emit('cartDeleted');
    }

    public function render()
    {
        return view('livewire.cart.delete');
    }
}
