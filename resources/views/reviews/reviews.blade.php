@extends('common_template')

{{--@extends('layouts.app')--}}

@section('content')

    <div class="col-md-12 p-3 p-md-5">


            <h4 class="mb-2 product-title">Reviews</h4>
            @if($reviews != null )
            @foreach($reviews as $review)
            <div class="review py-2">
                <h5>{{$review->title}}</h5>
                <q>{{$review->description}}</q>
                <p class="review-author mt-1">- {{$review->name}}</p>
            </div>
            @endforeach
            @elseif($reviews == null)
            <div class="review py-2">
               <h5>Er zijn geen reviews geschreven</h5>
            </div>
            @endif

            <a href="/reviews/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Schrijf je eigen review</a>

    </div>




    @endsection