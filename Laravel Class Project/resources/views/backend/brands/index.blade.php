
<x-layout.master>
    <div class="container">
       <div class="card-header">
           Brand List 
        <a class="btn btn-sm btn-success float-end"  href="#">Add Brand</a>
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
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            @php
                $i=1;
            @endphp
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td class="text-center">{{ $i++ }}</td>
                        <td class="text-center">{{ $brand->name }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary">Show</a>
                            <a class="btn btn-sm btn-warning">Edit</a>
                            <a class="btn btn-sm btn-danger">Delete</a>
                        </td>     
                    </tr>
                @endforeach  
            </tbody>
        </table>
       </div>
    </div>
</x-layout.master>
