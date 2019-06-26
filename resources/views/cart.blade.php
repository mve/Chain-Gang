@extends('common_template')

{{--@extends('layouts.app')--}}

@section('content')

    <div class="container py-3">
        <h3>Winkelwagen</h3>
        <div class="row" class="cart-products">

                @if($products !== null)
                @foreach($products as $product)
                <div class="cart-product d-flex align-items-center p-3">
                    <img class="img-fluid cart-product-image" src="/images/{{$product->image}}">
                    <a href="/products/{{$product->id}}"><h4 class="m-0 ml-3">{{$product->name}}</h4></a>
                    <div class="cart-product-options ml-auto">
                        <form method="post" action="/remove-from-cart">
                            @csrf

                            {{method_field('delete')}}
                            <input type="hidden" value="{{$product->id}}" name="id">
                        <button type="submit" class="btn btn-danger ml-0 mt-2 mt-sm-0 ml-sm-3"><i class="fas fa-minus"></i></button>
                        </form>
                    </div>
                </div>
                @endforeach
                <div class="cart-product d-flex align-items-center p-3">
                    <h3>Totale prijs: <b>€{{ number_format($price, 2)}}</b></h3>
                    <div class="cart-product-options ml-auto">
                        <form method="post" action="/make-order">
                            @csrf
                            <button type="submit" class="btn btn-primary ">Afrekenen</button>
                        </form>
                    </div>
                </div>
                @else
                <div class="cart-product d-flex align-items-center p-3">
                    <h3>Je hebt nog geen producten in je winkelmand!</h3>
                </div>
            @endif
        </div>
    </div>

@endsection
