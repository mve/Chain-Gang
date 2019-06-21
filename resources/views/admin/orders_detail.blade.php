@extends('admin.common_template_admin')

@section('content')

    <div class="row no-gutters justify-content-center">
        <div class="col-12 text-center py-3" id="pagina-titel">
            <h3 class="m-0">ChainGang - Orders</h3>
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

            <form class="col-md-12" method="post" action="{{ route('orders.update', $order) }}">
                @csrf
                {{method_field('patch')}}

                <div class="form-group">
                    <label for="voornaam">user id</label>
                    <input class="form-control" id="user_id" name="user_id" type="text"
                           placeholder="{{$order->user_id}}">
                </div>

                <div class="form-group">
                    <label for="voornaam">total</label>
                    <input class="form-control" id="total" name="total" type="text" placeholder="{{$order->total}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    </div>

@endsection
