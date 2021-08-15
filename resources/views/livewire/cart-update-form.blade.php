<div>
    {{-- <form class="form" action="{{ route('cart.update', $item->id) }}"> --}}
    <form wire:submit.prevent="updateCart">
        <input wire:model="quantity" type="number" name="quantity" min="1" max="7" />
        <button type="submit" class="btn btn-xs btn-secondary">Save</button>
    </form>
</div>
