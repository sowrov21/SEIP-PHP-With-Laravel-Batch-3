<x-layout.master>
    <div class="container">
        

        <div class="card-header">Create Category

            <button class="btn btn-sm btn-primary float-end">Category List</button>
        </div>

        <div class="card-body">

            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="text form-control"  id="description" name="description"></textarea>
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>


    </div>
</x-layout.master>
