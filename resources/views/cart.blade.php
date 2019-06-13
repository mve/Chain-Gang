@extends('common_template')

{{--@extends('layouts.app')--}}

@section('content')

    <div class="container py-3">
        <h3>Winkelwagen</h3>
        <div class="row" class="cart-products">
            <!--- dit product div loopen... --->
            <div class="cart-product d-flex align-items-center p-3">
                <img class="img-fluid cart-product-image" src="https://via.placeholder.com/400x300.png">
                <a href="#"><h4 class="m-0 ml-3">Product naam</h4></a>
                <div class="cart-product-options ml-auto">
                    <input type="number" min="1" max="9" step="1" value="1">
                    <button type="button" class="btn btn-danger ml-0 mt-2 mt-sm-0 ml-sm-3"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <!--- einde product voor loop --->
            <div class="cart-product d-flex align-items-center p-3">
                <img class="img-fluid cart-product-image" src="https://via.placeholder.com/400x300.png">
                <a href="#"><h4 class="m-0 ml-3">Product naam</h4></a>
                <div class="cart-product-options ml-auto">
                    <input type="number" min="1" max="9" step="1" value="1">
                    <button type="button" class="btn btn-danger ml-0 mt-2 mt-sm-0 ml-sm-3"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="cart-product d-flex align-items-center p-3">
                <img class="img-fluid cart-product-image" src="https://via.placeholder.com/400x300.png">
                <a href="#"><h4 class="m-0 ml-3">Product naam</h4></a>
                <div class="cart-product-options ml-auto">
                    <input type="number" min="1" max="9" step="1" value="1">
                    <button type="button" class="btn btn-danger ml-0 mt-2 mt-sm-0 ml-sm-3"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="cart-product d-flex align-items-center p-3">
                <img class="img-fluid cart-product-image" src="https://via.placeholder.com/400x300.png">
                <a href="#"><h4 class="m-0 ml-3">Product naam</h4></a>
                <div class="cart-product-options ml-auto">
                    <input type="number" min="1" max="9" step="1" value="1">
                    <button type="button" class="btn btn-danger ml-0 mt-2 mt-sm-0 ml-sm-3"><i class="fas fa-minus"></i></button>
                </div>
            </div>
        </div>
    </div>

@endsection
