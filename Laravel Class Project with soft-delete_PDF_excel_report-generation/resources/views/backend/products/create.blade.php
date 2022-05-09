<x-layout.master>
    <div class="container">


        <div class="card-header">Create Product

            <a  href="{{ route('product.index') }}" class="btn btn-sm btn-primary float-end">Product List</a>
        </div>

        <div class="card-body">

            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
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

                </div>


               <div class="mb-3">
                 <label for="category" class="form-label">Category</label>
                   <select name="category" id="category"  class="form-control" >
                    <option value="Food">Food</option>
                    <option value="Grocery">Grocery</option>
                    <option value="Cosmetics">Cosmetics</option>
                   </select>
              </div>


                <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input 
                    type="text" 
                    class="form-control" 
                    name="price" 
                    id="price" 
                    value="{{ old('price') }}" 

                    />

                  @error('price')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                </div>
                <div class="mb-3">
                  <label for="unit" class="form-label">Unit</label>
                  <input 
                    type="text" 
                    class="form-control" 
                    name="unit" 
                    id="unit" 
                    value="{{ old('unit') }}" 

                    />

                  @error('unit')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                </div>


                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="text form-control"  id="description" name="description"></textarea>

                  @error('description')
                    <span class="text-danger"> {{ $message }}</span>
                  @enderror
                </div>

                
                <div class="mb-3">
                  <label for="img">Image</label>
                  <input type="file" id="img"  class="form-control" name="image" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary"> Save</button>
                 <a class="btn btn-danger" href="{{ route('product.index') }}" > Cancel</a> 

                  
              </form>
        </div>


    </div>
</x-layout.master>
