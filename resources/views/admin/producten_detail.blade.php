@extends('admin.common_template_admin')

@section('content')

    <div class="row no-gutters justify-content-center">
        <div class="col-12 text-center py-3" id="pagina-titel">
            <h3 class="m-0">ChainGang - Producten</h3>
        </div>

        <div class="col-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="col-md-12" method="post" action="{{ route('products.update', $product) }}">
                @csrf
                {{method_field('patch')}}

                <div class="form-group">
                    <label for="category_id">category id</label>
                    <input class="form-control" id="category_id" name="category_id" type="text"
                           placeholder="{{$product->category_id}}">
                </div>

                <div class="form-group">
                    <label for="name">name</label>
                    <input class="form-control" id="name" name="name" type="text"
                           placeholder="{{$product->name}}">
                </div>

                <div class="form-group">
                    <label for="description">description</label>
                    <input class="form-control" id="description" name="description" type="text"
                           placeholder="{{$product->description}}">
                </div>

                <div class="form-group">
                    <label for="image">image</label>
                    <input class="form-control" id="image" name="image" type="text"
                           placeholder="{{$product->image}}">
                </div>

                <div class="form-group">
                    <label for="price">price</label>
                    <input class="form-control" id="price" name="price" type="text"
                           placeholder="{{$product->price}}">
                </div>

                <div class="form-group">
                    <label for="gears">gears</label>
                    <input class="form-control" id="gears" name="gears" type="text"
                           placeholder="{{$product->gears}}">
                </div>

                <div class="form-group">
                    <label for="frame">frame</label>
                    <input class="form-control" id="frame" name="frame" type="text"
                           placeholder="{{$product->frame}}">
                </div>

                <div class="form-group">
                    <label for="brand">brand</label>
                    <input class="form-control" id="brand" name="brand" type="text"
                           placeholder="{{$product->brand}}">
                </div>

                <div class="form-group">
                    <label for="color">color</label>
                    <input class="form-control" id="color" name="color" type="text"
                           placeholder="{{$product->color}}">
                </div>

                <div class="form-group">
                    <label for="year">year</label>
                    <input class="form-control" id="year" name="year" type="text"
                           placeholder="{{$product->year}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    </div>

@endsection
