<x-layout.master>
    <div class="container">


        <div class="card-header"> Product Information

            <a  href="{{ route('product.index') }}" class="btn btn-sm btn-primary float-end">Product List</a>
        </div>

        <div class="card-body">
            <p>Name :   {{ $product->name ?? ' No title' }}</p>
            <p>Price :   {{ $product->price ?? ' No Price' }}</p>
            <p>Unit :   {{ $product->unit ?? ' No Unit' }}</p>
        </div>

    </div>
</x-layout.master>

