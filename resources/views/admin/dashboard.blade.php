@extends('admin.common_template_admin')

@section('content')

<div class="row no-gutters justify-content-center">
    <div class="col-12 text-center py-3" id="pagina-titel">
        <h3 class="m-0">ChainGang - Dashboard</h3>
    </div>
    <div class="col-md-3 mt-4 mt-sm-4 mt-md-4" id="recente-orders">
            <div class="card h-100 w-100">
        <div class="card-header">
            Recente orders
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#"">#10001</a></li>
            <li class="list-group-item"><a href="#"">#10002</a></li>
            <li class="list-group-item"><a href="#"">#10003</a></li>
            <li class="list-group-item"><a href="#"">#10005</a></li>
            <li class="list-group-item"><a href="#"">#10006</a></li>
        </ul>
        </div>
    </div>
    <div class="col-md-7 offset-0 offset-sm-0 offset-md-1 mt-4 mt-sm-4 mt-md-4" id="omzet-grafiek">
            <div class="card h-100 w-100">
        <div class="card-header">
            Omzet
        </div>
        <canvas id="canvas" class="chartjs-render-monitor omzet-grafiek"></canvas>
        </div>
    </div>
    <div class="col-md-3 mt-4 mt-sm-4 mt-md-4">
            <div class="card h-100 w-100">
        <div class="card-header">
            Recente orders
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        </div>
    </div>
    <div class="col-md-3 offset-0 offset-sm-0 offset-md-1 mt-4 mt-sm-4 mt-md-4">
            <div class="card h-100 w-100">
        <div class="card-header">
            Recente orders
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        </div>
    </div>
    <div class="col-md-3 offset-0 offset-sm-0 offset-md-1 mt-4 mt-sm-4 mt-md-4">
            <div class="card h-100 w-100">
        <div class="card-header">
            Recente orders
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        </div>
    </div>
</div>

@endsection
