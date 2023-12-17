@extends('Layout.App')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($productsData as $products)
                    <tr>
                        <th scope="row">{{ $products->id }}</th>
                        <td>{{ $products->name }}</td>
                        <td>{{ $products->category }}</td>
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->quantity }}</td>
                        <td>
                            <a href="update/{{$products->id  }}" class="btn btn-primary">Update Price</a>
                           
                            <a href="quantity/{{$products->id  }}" class="btn btn-success">Sold</a>
                        </td>

                      </tr>
                    @endforeach
                  
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
    <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($productsData as $products )
        <tr>
            <th scope="row">{{ $products->id  }}</th>
            <td>{{ $products->name }}</td>
            <td>{{ $products->category  }}</td>
            <td>{{ $products->price  }}</td>
            <td>{{ $products->quantity  }}</td>
          </tr>
        @endforeach
        
        
  </table>
    
@endsection