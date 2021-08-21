<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class UpdateForm extends Component
{
    public $item = null;
    public $quantity = 0;

    public function mount($item)
    {
        $this->item = $item;
        $this->quantity = $item['quantity'];
    }

    public function updateCart()
    {
        \Cart::session(auth()->id())->update($this->item['id'], [
            'quantity' => [
                'relative' => false,
                'value' => $this->quantity
            ]
        ]);
        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.cart.update-form');
    }
}
