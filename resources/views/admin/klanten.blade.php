@extends('admin.common_template_admin')

@section('content')

    <div class="row no-gutters justify-content-center">
        <div class="col-12 text-center py-3" id="pagina-titel">
            <h3 class="m-0">ChainGang - Klanten</h3>
        </div>


            <div class="col-12">


            <table class="GeneratedTable">
                    <thead>
                        <tr>
                        <th>Header Cell 1</th>
                        <th>Header Cell 2</th>
                        <th>Header Cell 3</th>
                        <th>Header Cell 4</th>
                        </tr>
                        </thead>
                            <tbody>


                            @foreach($users as $user)

                            <tr>
                                <td>{{$user->name . " " . $user->lastname}}</td>
                                <td>{{$user->email}}
                            </tr>

                            @endforeach

                            </tbody>
                    </table>



        </div>

    </div>

@endsection
