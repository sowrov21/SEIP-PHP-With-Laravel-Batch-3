
<x-layout.master>
    <div class="container">
       <div class="card-header">
           Brand List 
        <a class="btn btn-sm btn-success float-end"  href="{{ route('brand.create') }}">Add Brand</a>
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
                          <td class="text-center d-flex justify-center">
                            <a href="{{ route('brand.show', $brand->id) }}" class="btn btn-sm btn-primary">Show</a>

                            <a  href="{{ route('brand.edit',  $brand->id) }}" class="btn btn-sm btn-warning">Edit</a>


                          <form action="{{ route('brand.destroy',  $brand->id) }}" method="post">
                              @csrf
                              @method('DELETE')

                              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')"> Delete</button>

                          </form>

                         </td>      
                    </tr>
                @endforeach  

            </tbody>
        </table>
       </div>

    </div>
  @push('js')

    <script>
               
               let btn = document.getElementById('btn.deleteBtn');
               btn.addEventListener('click', function(){
                   alert('hi');
               })
               
        



    </script>
      
  @endpush
</x-layout.master>



