@extends('admin.common_template_admin')

@section('content')

    <div class="row no-gutters justify-content-center">
        <div class="col-12 text-center py-3" id="pagina-titel">
            <h3 class="m-0">ChainGang - Producten</h3>
        </div>

        <div class="col-12">
            <table class="display nowrap w-100" id="data-table">
                <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product naam</th>
                    <th>Product catogorie</th>
                    <th>Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach($producten as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{DB::table('categories')->where('id', $product->category_id)->value('name')}}</td>
                        <td class="text-center"><a href="/admin/producten/{{$product->id}}" class="btn btn-primary">Bewerken
                                <i class="fas fa-edit"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
