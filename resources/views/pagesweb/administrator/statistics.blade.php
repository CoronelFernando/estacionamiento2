@extends('layouts.layout')

@section('content')
<div class="d-sm-flex aling-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">
    <!--card-->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters aling-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Capacity</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">50%</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-car fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end card-->
    <!--graficas-->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h6 class="m-0 font-weight-bold text-primary">Parking Status</h6>
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-body"> 
                <h6 class="m-0 font-weight-bold text-primary">Parking Status</h6>
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div> 
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Available
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Occupied
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Reserved
                    </span>
                </div>   
            </div>
        </div>
    </div>
    <!--fin graficas-->
</div>

@endsection