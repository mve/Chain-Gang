@extends('common_template')

{{--@extends('layouts.app')--}}

@section('content')

<div class="container py-3">
    <div class="row">

            @foreach($products as $product)
            <div class="col-md-4 py-3">
                    <div class="card" style="w-100 h-100">
                        <img class="card-img-top" src="/images/{{$product->image}}"  alt="Card image cap">
                        <div class="card-body">
                            <a href="/products/{{$product->id}}"><h5 class="card-title">{{$product->name}}</h5></a>
                            <b>€{{ number_format($product->price, 2)}}</b>
                             <p class="card-text">{{$product->description}}</p>
                             <div class="text-right">
                                 <form method="post" action="/add-to-cart">
                                     @csrf
                                     {{method_field('post')}}
                                     <input type="hidden" value="{{$product->id}}" name="id">
                                     <button type="submit" class="btn btn-primary">Toevoegen <i class="fas fa-cart-plus"></i></button>
                                 </form>

                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

    </div>
</div>


@endsection
