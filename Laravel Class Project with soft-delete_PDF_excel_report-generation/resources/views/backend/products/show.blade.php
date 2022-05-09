<x-layout.master>
    <div class="container">


        <div class="card-header"> Product Information

            <a  href="{{ route('product.index') }}" class="btn btn-sm btn-primary float-end">Product List</a>
        </div>

        <div class="card-body">
            
                                        @if(file_exists(storage_path().'/app/public/products/'.$product->image ) && (!is_null($product->image)))

                                        <img src="{{ asset('storage/products/'.$product->image) }}" height="50" width="50">

                                        @else
                                        <img src="{{ asset('img/default.png') }}" height="250" width="250"/>
                                        @endif
            <p>Name :   {{ $product->name ?? ' No title' }}</p>
            <p>Price :   {{ $product->price ?? ' No Price' }}</p>
            <p>Unit :   {{ $product->unit ?? ' No Unit' }}</p>
        </div>

    </div>
</x-layout.master>

