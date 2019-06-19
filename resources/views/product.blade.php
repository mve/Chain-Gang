@extends('common_template')

{{--@extends('layouts.app')--}}

@section('content')

<div class="container py-3">
    <div class="col-12 my-4">
        <h3>Product naam bitch</h3>
    </div>
    <div class="col-12 my-4 schaduw">
        <div class="row">
            <div class="col-md-6 p-3 p-md-5">
                <img class="product-image" src="/images/{{$product->image}}" class="img-fluid h-100 w-100" alt="product foto">

            </div>
            <div class="col-md-6 p-3 p-md-5">
                <h4 class="mb-4 product-title">{{$product->name}}</h4>
                <p>{{$product->description}}</p>
                <div class="text-right">
                        <input type="number" min="1" max="9" step="1" value="1">
                        <a href="#" class="btn btn-primary ml-1">Toevoegen <i class="fas fa-cart-plus"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection
