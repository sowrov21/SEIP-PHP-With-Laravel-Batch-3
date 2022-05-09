<x-layout.master>
    <div class="container">


        <div class="card-header">Edit Brand

            <a  href="{{ route('brand.index') }}" class="btn btn-sm btn-primary float-end">Brand List</a>
        </div>

        <div class="card-body">

            <form action="{{ route('brand.update', $brand->id ) }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input 
                    type="text" 
                    class="form-control" 
                    name="name" 
                    id="name" 
                    value="{{ $brand->name ?? ' ' }}" 

                    />

                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                </div>
               <br />
                <button type="submit" class="btn btn-primary mt-3"> Update</button>
                 <a class="btn btn-danger mt-3" href="{{ route('product.index') }}" >  Cancel</a> 

                  
              </form>
        </div>


    </div>
</x-layout.master>
