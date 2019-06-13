@extends('common_template')

{{--@extends('layouts.app')--}}

@section('content')

<div class="container py-3">
    <div class="row">

            @foreach($products as $product)
            <div class="col-md-4 py-3">
                    <div class="card" style="w-100 h-100">
                        <img class="card-img-top" src="https://via.placeholder.com/400x300.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                             <p class="card-text">{{$product->description}}</p>
                             <div class="text-right">
                                <a href="#" class="btn btn-primary">Toevoegen <i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

    </div>
</div>


@endsection
