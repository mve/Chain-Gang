@extends('common_template')

@section('content')

    <div class="container py-3">
        <div class="row">

            <div class="col-md-12 text-center py-3">
                <h3 class="d-inline-block">Uw account</h3>
            </div>

            <form class="col-md-12">

                <?php
                $user = Auth::user();
                ?>

                <div class="form-group">
                    <label for="voornaam">Voornaam</label>
                    <input class="form-control" id="voornaam" name="name" type="text" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="achternaam">Achternaam</label>
                    <input class="form-control" id="achternaam" name="lastname" type="text" value="{{$user->lastname}}">
                </div>

                <div class="form-group">
                    <label for="adres">adres</label>
                    <input class="form-control" id="adres" name="address" type="text" value="{{$user->address}}">
                </div>

                <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input class="form-control" id="postcode" name="postal_code" type="text" value="{{$user->postal_code}}">
                </div>

                <div class="form-group">
                    <label for="stad">Stad</label>
                    <input class="form-control" id="stad" name="city" type="text" value="{{$user->city}}">
                </div>

                <div class="form-group">
                    <label for="telefoon">Telefoon</label>
                    <input class="form-control" id="telefoon" name="phone" type="text" value="{{$user->phone}}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" name="email" type="email" value="{{$user->email}}">
                </div>

                <div class="form-group">
                    <label for="wachtwoord">Wachtwoord</label>
                    <input class="form-control" id="wachtwoord" name="password" type="password" value="">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>

@endsection
