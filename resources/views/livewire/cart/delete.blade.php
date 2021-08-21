<a href="#" onClick="return confirm('Are you sure, to delete this item from your cart?');"
        wire:click.prevent="deleteItem({{ $item['id'] }})"><i class="pe-7s-close"></i></a>
