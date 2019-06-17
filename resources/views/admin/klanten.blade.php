@extends('admin.common_template_admin')

@section('content')

    <div class="row no-gutters justify-content-center">
        <div class="col-12 text-center py-3" id="pagina-titel">
            <h3 class="m-0">ChainGang - Klanten</h3>
        </div>

        <div class="container">
            <div class="row">

                @foreach($users as $user)

                    <div style="text-align: center" class="col-md-12">
                        <p>{{$user->name . " " . $user->lastname . " " . $user->email}}</p>
                    </div>

                @endforeach

            </div>
        </div>

    </div>

@endsection
