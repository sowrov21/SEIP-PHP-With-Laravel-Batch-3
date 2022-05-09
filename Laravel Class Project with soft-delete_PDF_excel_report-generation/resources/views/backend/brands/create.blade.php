<x-layout.master>
    <div class="container">


        <div class="card-header">Create Brand

            <a  href="{{ route('brand.index') }}" class="btn btn-sm btn-primary float-end">Brand List</a>
        </div>

        <div class="card-body">

            <form action="{{ route('brand.store') }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input 
                    type="text" 
                    class="form-control" 
                    name="name" 
                    id="name" 
                    value="{{ old('name') }}" 

                    />

                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                <br/>
                <button type="submit" class="btn btn-primary mt-3"> Save</button>
                 <a class="btn btn-danger mt-3" href="{{ route('brand.index') }}" > Cancel</a> 

                  
              </form>
        </div>


    </div>
</x-layout.master>
