<x-layout.master>
    <div class="container">


        <div class="card-header"> Brand Information

            <a  href="{{ route('brand.index') }}" class="btn btn-sm btn-primary float-end">Brand List</a>
        </div>

        <div class="card-body">
            <p>Name :   {{ $brand->name ?? ' No Name' }}</p>

        </div>

    </div>
</x-layout.master>

