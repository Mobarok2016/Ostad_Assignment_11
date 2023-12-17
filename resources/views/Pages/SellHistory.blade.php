@extends('Layout.App')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                            <h2>Today Sale</h2>
                          <h5 class="card-title">{{ $todaySales.' $' }}</h5>
                          
                        </div>
                      </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                            <h2>Yesterday Sale</h2>
                            <h5 class="card-title">{{ $yesterdaySales.' $' }}</h5>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                            <h2>This Month Sale</h2>
                            <h5 class="card-title">{{ $thisMonthSales.' $' }}</h5>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                            <h2>Last Month Sale</h2>
                            <h5 class="card-title">{{ $lastMonthSales.' $' }}</h5>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection