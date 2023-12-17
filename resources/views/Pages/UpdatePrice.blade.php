@extends('Layout.App')

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mx-auto">
                <form   method="post">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                      <label for="price" class="form-label">price</label>
                      <input type="number" name="price"  class="form-control" id="price">
                      
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>
    </div>
</div>
    
@endsection