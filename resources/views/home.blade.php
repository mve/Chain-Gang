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
    <div class="container-fluid p-0 m-0 mountainbike-quote text-white">
        <div class="w-100 h-100 mountainbike-overlay d-flex align-items-center justify-content-center">
            <div class="row no-gutters">
                <div class="col-md-12 text-center">
                    <h3>Moutainbike kopen?</h3>
                    <a href="/category/4"><button type="button" class="btn btn-primary">Bekijk alles</button></a>
                </div>
            </div>
        </div>
    </div>
    <!--------- over ons --------->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <h3>Over ons</h3>
                <p>
                        Chain Gang is al ruim 80 jaar gevestigd in Doetinchem.
                        We zijn in de loop der tijd uitgegroeid tot een grote tweedehands tweewielerspecialist met een zeer ruim assortiment, voor elk wat wils.
                        Het is ons streven om iedereen van dienst te kunnen zijn op gebied van: fietsen, onderdelen, en accessoires.<br/><br/>

                        Wij hebben een zeer ruime sortering aan gebruikte fietsen en gewone fietsen voor groot en klein. Tevens kunt u bij ons terecht voor diverse artikelen op het gebied van onderdelen en accessoires voor de fiets.
                </p>
            </div>
            <div class="col-md-3 offset-md-1 d-flex justify-content-center align-items-center">
                <img class="img-fluid" src="/images/template/kind-huiliehuil.png" alt="Over ons">
            </div>
        </div>
    </div>
@endsection
