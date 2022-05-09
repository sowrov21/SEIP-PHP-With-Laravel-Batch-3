<x-layout.master>
    <div class="container">


        <div class="card-header">Edit Product

            <a  href="{{ route('product.index') }}" class="btn btn-sm btn-primary float-end">Product List</a>
        </div>

        <div class="card-body">

            <form action="{{ route('product.update', $product->id ) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input 
                    type="text" 
                    class="form-control" 
                    name="name" 
                    id="name" 
                    value="{{ $product->name ?? ' ' }}" 

                    />

                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                </div>

               <div class="mb-3">
                 <label for="category" class="form-label">Category</label>
                   <select name="category" id="category"  class="form-control" >
                     <option value="{{$product->category}}" selected>{{$product->category}}</option> </option>
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
                    value="{{ $product->price ?? ' ' }}" 

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
                    value="{{ $product->unit ?? ' ' }}" 

                    />

                  @error('unit')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                </div>


                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="text form-control"  id="description" name="description">{{ $product->description ?? 'No description' }}</textarea>

                  @error('description')
                    <span class="text-danger"> {{ $message }}</span>
                  @enderror
                </div>
				
				
				<div class="row">
				
					<div class="col-6">
					
					    <div class="mb-3">
						    <label for="img">Image</label>
						    <input type="file" id="img"  class="form-control" name="image" accept="image/*">
						</div>
					
					</div>
					
					<div class="col-6">
					
					     <div>
							   @if(file_exists(storage_path().'/app/public/products/'.$product->image ) && (!is_null($product->image)))

								<img src="{{ asset('storage/products/'.$product->image) }}" height="250" width="250">

								@else
								<img src="{{ asset('img/default.png') }}" height="250" width="250"/>
								@endif
                         </div>
					
					</div>
				
				</div>

                
    
                


                <div class="mt-3">
                 <button type="submit" class="btn btn-primary"> Update</button>
                 <a class="btn btn-danger" href="{{ route('product.index') }}" >  Cancel</a> 
                </div>
 
              </form>
        </div>


    </div>
</x-layout.master>
