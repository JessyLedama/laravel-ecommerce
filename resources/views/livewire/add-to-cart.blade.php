<div style="text-align: left">
    <button wire:click="addToCart({{ $productId }})"> Add To Cart </button>
    
    @if(session()->has('success'))
        <div id="successAlert" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>


