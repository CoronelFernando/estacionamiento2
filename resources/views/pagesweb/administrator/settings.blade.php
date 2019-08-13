@extends('layouts.layout')

@section('content')
<div class="d-sm-flex aling-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Settings</h1>
</div>
<div class="col-xl-12 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters aling-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Managment</div>
                        <label class="h5 mb-0 font-weight-bold text-gray-800">Cajon 1 &nbsp;</label>
                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="normal">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="h5 mb-0 font-weight-bold text-gray-800">Cajon 2 &nbsp;</label>
                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="normal">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="h5 mb-0 font-weight-bold text-gray-800">Cajon 3 &nbsp;</label>
                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="normal">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="h5 mb-0 font-weight-bold text-gray-800">Cajon 4 &nbsp;</label>
                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="normal">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="h5 mb-0 font-weight-bold text-gray-800">Cajon 5 &nbsp;</label>
                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="normal">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


