@extends('common_template')

{{--@extends('layouts.app')--}}

@section('content')


    <div class="col-md-12 p-3 p-md-5">
    <div class="row">
        <div class="col-md-6">
            <h4 class="mb-2 product-title">Reviews</h4>
            @foreach($reviews as $review)
            <div class="review py-2">
                <q>{{$review->description}}</q>
                <p class="review-author mt-1">- {{$review->name}}</p>
            </div>
            @endforeach
        </div>
        <div class="col-md-6">
            <h4 class="mb-2 product-title">Schrijf een review</h4>
            <!----- review formulier hier ----->




            <!----- einde review formulier ----->
        </div>
    </div>
</div>

    @endsection