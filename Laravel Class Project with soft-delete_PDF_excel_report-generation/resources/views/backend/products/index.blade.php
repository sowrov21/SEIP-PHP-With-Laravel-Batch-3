<x-layout.master>
    <div class="container">
       <div class="card-header">
           Product List 
        
        <a class="btn btn-sm btn-primary float-end"  href="{{ route('product.pdf') }}">PDF</a>
        <a class="btn btn-sm btn-dark float-end"  href="{{ route('product.html') }}">HTML</a>
        <a class="btn btn-sm btn-warning float-end"  href="{{ route('product.trashlist') }}">Trash list</a>
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

                        <td class="text-center">
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-sm btn-primary">Show</a>

                            <a  href="{{ route('product.edit',  $product->id) }}" class="btn btn-sm btn-warning">Edit</a>


                            <a href="{{  route('product.delete',  $product->id) }}" class="btn btn-sm btn-danger">Delete</a>

                        </td> 
                            
                    </tr>
                @endforeach  
            </tbody>
        </table>
       </div>
    </div>


     <script type="text/javascript">
        function deleteFunc(id) {
            event.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "Data will be Deleted permanently ..!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Delete!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                    toastr.success("Deleted successfully..!", "Sucess");
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your Data is Safe :)',
                        'error'
                }
            })
        }
    </script>
</x-layout.master>
