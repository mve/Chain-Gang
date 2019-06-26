@extends('admin.common_template_admin')

@section('content')

    <div class="row no-gutters justify-content-left">
        <div class="col-12 text-center py-3" id="pagina-titel">
            <h3 class="m-0">ChainGang - Dashboard</h3>
        </div>
        <div class="col-md-3 mt-4 mt-sm-4 mt-md-4" id="recente-orders">
            <div class="card h-100 w-100">
                <div class="card-header">
                    Recente orders
                </div>

                <ul class="list-group list-group-flush">
                    @foreach($orders->reverse()->take(5) as $order)
                        <li class="list-group-item"><a href="{{ url('/admin/orders/') }}/{{$order->id}}">#{{$order->id}}</a></li>
                    @endforeach
                </ul>

            </div>
        </div>
        <div class="col-md-7 offset-0 offset-sm-0 offset-md-1 mt-4 mt-sm-4 mt-md-4" id="omzet-grafiek">
            <div class="card h-100 w-100">
                <div class="card-header">
                    Omzet
                </div>
                <canvas id="canvas" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
        <div class="col-md-3 mt-4 mt-sm-4 mt-md-4">
            <div class="card h-100 w-100">
                <div class="card-header">
                    Nieuwste klanten
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($users->reverse()->take(5) as $user)
                        <li class="list-group-item"><a href="{{ url('/admin/klanten/') }}/{{ $user->id }}">{{$user->name . " " . $user->lastname}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
