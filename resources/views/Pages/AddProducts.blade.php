@extends('Layout.App')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center">Add Products</h1>
            <div class="col-6 mx-auto">
                
                <form action="{{ route('add.products') }}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="name" name="name" class="form-control" id="name" >
                      
                    </div>
                    <div class="mb-3">
                      <label for="category" class="form-label">Category</label>
                      <input type="category" name="category" class="form-control" id="category">
                      
                    </div>
                    <div class="mb-3">
                      <label for="price" class="form-label">Price</label>
                      <input type="price" name="price" class="form-control" id="price">
                      
                    </div>
                    <div class="mb-3">
                      <label for="quantity" class="form-label">Quantity</label>
                      <input type="quantity" name="quantity" class="form-control" id="quantity">
                      
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Add</button>
                  </form>
            </div>
            
        </div>
    </div>
    
</div>

@endsection