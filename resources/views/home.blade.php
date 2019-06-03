@extends('common_template')

{{--@extends('layouts.app')--}}

@section('content')
    <!--------- nieuwe producten --------->
    <div class="container py-3">
        <div class="row">
            <div class="col-md-12 text-center py-3"><h3 class="d-inline-block">Nieuwe producten</h3></div>
            <div class="col-md-4 py-3 shaduw">
                <div class="card" style="w-100 h-100">
                    <img class="card-img-top" src="https://via.placeholder.com/400x300.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product title</h5>
                         <p class="card-text">Short desc.</p>
                         <div class="text-right">
                            <a href="#" class="btn btn-primary">Toevoegen <i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 shaduw">
                <div class="card" style="w-100 h-100">
                    <img class="card-img-top" src="https://via.placeholder.com/400x300.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product title</h5>
                            <p class="card-text">Short desc.</p>
                            <div class="text-right">
                                <a href="#" class="btn btn-primary">Toevoegen <i class="fas fa-cart-plus"></i></a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3  shaduw">
                <div class="card" style="w-100 h-100">
                    <img class="card-img-top" src="https://via.placeholder.com/400x300.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product title</h5>
                            <p class="card-text">Short desc.</p>
                            <div class="text-right">
                            <a href="#" class="btn btn-primary">Toevoegen <i class="fas fa-cart-plus"></i></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------- mountainbike kopen? --------->
    <div class="container-fluid p-0 m-0 d-flex align-items-center justify-content-center mountainbike-quote text-white">
        <div class="row no-gutters">
            <div class="col-md-12 text-center">
                <h3>Moutainbike kopen?</h3>
                <button type="button" class="btn btn-primary">Bekijk alles</button>
            </div>
        </div>
    </div>
    <!--------- over ons --------->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <h3>Over ons</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id magna ullamcorper, vulputate ante vitae, luctus nibh. In mollis dolor interdum eros dictum sodales. Proin cursus vestibulum nulla at fermentum. Pellentesque vel odio metus. Pellentesque lacus neque, laoreet in finibus non, scelerisque in turpis. Morbi sollicitudin urna quis felis iaculis, eu ultrices arcu mattis. Suspendisse tincidunt orci odio, vitae laoreet erat faucibus eu. Praesent at urna varius, accumsan libero eget, pharetra metus. Mauris ac dui lobortis, varius ipsum sed, rhoncus ex. Morbi et malesuada neque.</p>
            </div>
            <div class="col-md-3 offset-md-1 d-flex justify-content-center align-items-center">
                <img class="img-fluid" src="/images/template/kind-huiliehuil.png" alt="Over ons">
            </div>
        </div>
    </div>
@endsection
