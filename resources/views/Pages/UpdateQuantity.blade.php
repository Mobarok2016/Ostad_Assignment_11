@extends('Layout.App')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6 mx-auto">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body ">
                          <h5 class="card-title">Product Name: {{ $product->name }}</h5>
                          <h5 class="card-title"> Category: {{  $product->category }}</h5>
                          <h5 class="card-title"> Price: {{ $product->price }}</h5>
                          <h5 class="card-title mb-5">Quantity: {{ $product->quantity }}</h5>
                          
                          <a href="{{ url('admin/sold',$product->id) }}" type="submit" class="btn btn-primary">Buy</a>
                        </div>
                      </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection