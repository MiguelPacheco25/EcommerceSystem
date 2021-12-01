@extends('principal')
@section('title')
<title>OLAM</title>
@endsection
@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('home.css') }}">
@endsection
@section('body')
@include('components.nav-link-home')
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="5000">
                <img src="<?php $path ?>/assets/banner/banner1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="5000">
                <img src="<?php $path ?>/assets/banner/banner2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="5000">
                <img src="<?php $path ?>/assets/banner/banner3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container container-product my-5">
        <h5>{{ $popularSection->value }}</h5>
        <div class="row d-flex justify-content-center mt-3">
            @foreach($clothes as $clothe)
                <div class="col-md-3 pb-5">
                    <div class="card card-products-home">
                        <img src="{{ asset('storage/img/'.$clothe->image) }}" class="d-block w-100" alt="...">
                        
                        <p class="card-text text-center my-2 fade-in-quickView">
                            <a href="#" data-toggle="modal" data-target="#quickview-modal">Quick view</a>
                        </p>

                        <p class="card-text text-center my-2">
                            {{ $clothe->name }} <br>
                            <b>€22.94</b>
                        </p>
                    </div>
                </div>
            @endforeach
            <div class="col-md-3 pb-5">
                <div class="card card-products-home">
                    <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="d-block w-100" alt="...">
                    
                    <p class="card-text text-center my-2 fade-in-quickView">
                        <a href="#" data-toggle="modal" data-target="#quickview-modal">Quick view</a>
                    </p>

                    <p class="card-text text-center my-2">
                        Hummingbird printed t-shirt <br>
                        <b>€22.94</b>
                    </p>
                </div>
            </div>

            <div class="col-md-3 pb-5">
                <div class="card card-products-home">
                    <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="d-block w-100" alt="...">
                    
                    <p class="card-text text-center my-2 fade-in-quickView">
                        <a href="#" data-toggle="modal" data-target="#quickview-modal">Quick view</a>
                    </p>

                    <p class="card-text text-center my-2">
                        Hummingbird printed t-shirt <br>
                        <b>€22.94</b>
                    </p>
                </div>
            </div>

            <div class="col-md-3 pb-5">
                <div class="card card-products-home">
                    <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="d-block w-100" alt="...">
                    
                    <p class="card-text text-center my-2 fade-in-quickView">
                        <a href="#" data-toggle="modal" data-target="#quickview-modal">Quick view</a>
                    </p>

                    <p class="card-text text-center my-2">
                        Hummingbird printed t-shirt <br>
                        <b>€22.94</b>
                    </p>
                </div>
            </div>

            <div class="col-md-3 pb-5">
                <div class="card card-products-home">
                    <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="d-block w-100" alt="...">
                    
                    <p class="card-text text-center my-2 fade-in-quickView">
                        <a href="#" data-toggle="modal" data-target="#quickview-modal">Quick view</a>
                    </p>

                    <p class="card-text text-center my-2">
                        Hummingbird printed t-shirt <br>
                        <b>€22.94</b>
                    </p>
                </div>
            </div>

            <div class="col-md-3 pb-5">
                <div class="card card-products-home">
                    <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="d-block w-100" alt="...">
                    
                    <p class="card-text text-center my-2 fade-in-quickView">
                        <a href="#" data-toggle="modal" data-target="#quickview-modal">Quick view</a>
                    </p>

                    <p class="card-text text-center my-2">
                        Hummingbird printed t-shirt <br>
                        <b>€22.94</b>
                    </p>
                </div>
            </div>
        </div>
        
    </div>

    

    <div class="modal fade" id="quickview-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content justify-content-center">
              
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="card mb-3  border-0">
                    <div class="row no-gutters">
                      <div class="col-md-5 card-product-modal rounded">
                        <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="card-img" alt="...">
                      </div>
                      <div class="col-md-2 text-center">
                          <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="card-img card-mini-image" alt="...">
                      </div>
                      <div class="col-md-5">
                        <div class="card-body">
                            <div class="col-md-12">
                                <h5 class="card-title">HUMMINGBIRD PRINTED T-SHIRT</h5>
                                <p class="card-text"><del>€28.68</del></p>
                                <p class="card-text">€22.94 </p>
                                <p class="card-text">Tax included Regular</p>
                                <p class="card-text">Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton.</p>
                            </div>
                            <div class="col-md-4">
                                <h5>Size</h5>
                                <select class="form-control">
                                  <option selected>S</option>
                                  <option value="1">M</option>
                                  <option value="2">L</option>
                                  <option value="3">XL</option>
                                </select>
                            </div>
                            
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        Get our latest news and special sales
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                          <input type="email" class="form-control" placeholder="@example">
                          <div class="input-group-append">
                            <a class="btn btn-primary">Suscribir</a>
                          </div>
                        </div>
                        <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection
@section('script')
<script>
    $(document).ready(function(){
        console.log("Cargado.");
    });
</script>
@endsection
@section('footer')
<footer class="text-center">
    © 2021 - Ecommerce software by Bitelix™
</footer>
@endsection
