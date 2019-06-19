@extends('common_template')

{{--@extends('layouts.app')--}}

@section('content')


    <div class="col-md-12 p-3 p-md-5">
    <h4 class="mb-2 product-title">Schrijf een review</h4>

    <form method="POST" action="/reviews">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" class="form-control" name="name" placeholder="Naam">
        </div>
        <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" class="form-control" name="title" placeholder="Titel">
        </div>
        <div class="form-group">
            <label for="description">Review</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>

@endsection