@extends('common_template')

{{--@extends('layouts.app')--}}

@section('content')

<div class="container py-3">
    <div class="col-12 my-4">
        <h3>Product naam bitch</h3>
    </div>
    <div class="col-12 my-4 schaduw">
        <div class="row">
            <div class="col-md-6 p-3 p-md-5">
                <img class="product-image" src="https://dummyimage.com/600x400/5bc3f7/ffffff" class="img-fluid h-100 w-100" alt="product foto">
                <div class="row py-3">
                    <div class="col-3"><img class="product-small-image" src="https://dummyimage.com/600x400/5bc3f7/ffffff" class="img-fluid h-100 w-100" alt="product foto"></div>
                    <div class="col-3"><img class="product-small-image" src="https://dummyimage.com/600x400/5bc3f7/ffffff" class="img-fluid h-100 w-100" alt="product foto"></div>
                    <div class="col-3"><img class="product-small-image" src="https://dummyimage.com/600x400/5bc3f7/ffffff" class="img-fluid h-100 w-100" alt="product foto"></div>
                    <div class="col-3"><img class="product-small-image" src="https://dummyimage.com/600x400/5bc3f7/ffffff" class="img-fluid h-100 w-100" alt="product foto"></div>
                </div>
            </div>
            <div class="col-md-6 p-3 p-md-5">
                <h4 class="mb-4 product-title">Schitterende fiets 01</h4>
                <p>Blabla wat een schitterende omschrijving dus hier gaan we een heleboel mooie product gegevens neerknallen en wat informatie verschaffen maargoed heb nu echt genoeg getypt en heb er geen zin meer in. Doei.</p>
                <div class="text-right">
                        <input type="number" min="1" max="9" step="1" value="1">
                        <a href="#" class="btn btn-primary ml-1">Toevoegen <i class="fas fa-cart-plus"></i></a>
                </div>
            </div>
            <div class="col-md-12 p-3 p-md-5">
                <div class="row">
                    <div class="col-md-6">
                            <h4 class="mb-2 product-title">Reviews</h4>
                                <!--- dit loopen --->
                                <div class="review py-2">
                                    <q>Review tekst hier dusja hier moeten we dat laten zien man wat ben ik slecht in placeholder tekst verzinnen pfoew, ik word nu wel moe in de vingers hoor. Ciao.</q>
                                    <p class="review-author mt-1">- Mart Vrieze</p>
                                </div>
                                 <div class="review py-2">
                                    <q>Review tekst hier dusja hier moeten we dat laten zien man wat ben ik slecht in placeholder tekst verzinnen pfoew, ik word nu wel moe in de vingers hoor. Ciao.</q>
                                    <p class="review-author mt-1">- Mart Vrieze</p>
                                </div>
                                 <div class="review py-2">
                                    <q>Review tekst hier dusja hier moeten we dat laten zien man wat ben ik slecht in placeholder tekst verzinnen pfoew, ik word nu wel moe in de vingers hoor. Ciao.</q>
                                    <p class="review-author mt-1">- Mart Vrieze</p>
                                </div>
                                <!---- einde loopen --->
                    </div>
                    <div class="col-md-6">
                            <h4 class="mb-2 product-title">Schrijf een review</h4>
                            <!----- review formulier hier ----->
                            <div class="form-group">
                                <label for="review">Review tekst</label>
                                <textarea class="form-control review-textarea" id="review-tekst"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Review plaatsen</button>
                            </form>
                            <!----- einde review formulier ----->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
