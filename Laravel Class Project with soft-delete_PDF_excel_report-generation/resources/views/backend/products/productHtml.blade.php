
 <h3 style="text-align: center;">Product List</h3>
 <table>
    <thead>
        <tr>
            <th class="text-center">Ser No</th>
            <th class="text-center">Name</th>
            <th class="text-center">Category</th>
            <th class="text-center">Image</th>
            <th class="text-center">Price</th>
            <th class="text-center">Unit</th>
            <th class="text-center">Description</th>
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

                    <img src="{{ asset('storage/products/'.$product->image) }}" style="width: 50mm; height: 50mm; margin: 0;" >

                    @else
                    <img src="{{ asset('img/default.png') }}" style="width: 50mm; height: 50mm; margin: 0;" />
                    @endif
                    
                </td>  
                <td class="text-center">{{ $product->price }}</td>  
                <td class="text-center">{{ $product->unit }}</td>  
                <td class="text-center">{{ $product->description }}</td>  
            </tr>
        @endforeach  
    </tbody>
</table>


<style>

    table, th , td {
        padding: 20px;
        border: 1px solid black;
        border-collapse: collapse;   
    }

    table{
        width:100%;
    }


</style>