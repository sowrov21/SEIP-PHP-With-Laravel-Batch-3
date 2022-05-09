<x-layout.master>
    <div class="container">
        <div class="card">
                   <div class="card-header">
           Product Trash List 
        <a class="btn btn-sm btn-success float-end"  href="{{ route('product.create') }}">Add Product</a>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Weldone!</strong> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
       <div class="card-body">
       <table id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">Ser No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Unit</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            @php
                $i=1;
            @endphp
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="text-center">{{ $i++ }}</td>
                        <td class="text-center">{{ $product->name }}</td>
                        <td class="text-center">{{ $product->category }}</td>
                        <td class="text-center">

                                        @if(file_exists(storage_path().'/app/public/products/'.$product->image ) && (!is_null($product->image)))

                                        <img src="{{ asset('storage/products/'.$product->image) }}" height="50" width="50">

                                        @else
                                        <img src="{{ asset('img/default.png') }}" height="50" width="50"/>
                                        @endif
                        </td>
                        <td class="text-center">{{ $product->price }}</td>
                        <td class="text-center">{{ $product->unit }}</td>

                                                    <td class="text-center d-flex justify-content-center">
     
     
                                 <a  href="{{ route('product.restore', $product->id) }}" class="btn btn-sm btn-warning">Restore</a>
     
     

                            <form action="{{ route('product.permanent_delete', $product->id) }}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure Want To Delete?')">Permanent Delete</button>
                                </form>

                             </td>     
                            
                    </tr>
                @endforeach  
            </tbody>
        </table>
       </div>
            
        </div>
    </div>


     <style>

        .card {
            background-color: rgb(237, 198, 198) !important;
        }
    </style>
</x-layout.master>
