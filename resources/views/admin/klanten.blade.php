@extends('admin.common_template_admin')

@section('content')

    <div class="row no-gutters justify-content-center">
        <div class="col-12 text-center py-3" id="pagina-titel">
            <h3 class="m-0">ChainGang - Klanten</h3>
        </div>


            <div class="col-12">


                <table class="display nowrap w-100" id="data-table">
                    <thead>
                        <tr>
                        <th>Klant ID</th>
                        <th>Klant naam</th>
                        <th>Email adres</th>
                        <th>Plaats</th>
                        <th>Acties</th>
                        </tr>
                        </thead>
                            <tbody>


                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name . " " . $user->lastname}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->city}}</td>
                                <td class="text-center"><a href="#" class="btn btn-primary">Bewerken <i class="fas fa-edit"></i></a></td>
                            </tr>
                            @endforeach

                            </tbody>
                    </table>



        </div>

    </div>

@endsection
