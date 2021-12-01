@extends('principal')
@section('title')
<title>OLAM</title>
@endsection
@section('link')
@endsection
@section('body')
@include('components.nav-link-home')
<div class="container">
	<!-- <div class="row">
		<div class="col-md-3">
			<div class="card">
				<div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="card-link">Card link</a>
				    <a href="#" class="card-link">Another link</a>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="card-link">Card link</a>
				    <a href="#" class="card-link">Another link</a>
				</div>
			</div>
		</div>
	</div> -->
	<div class="row">
		<div class="col-4">
			<div class="row-sm-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="card-link">Card link</a>
				    <a href="#" class="card-link">Another link</a>
				  </div>
				</div>
			</div>
			<br>
			<div class="row-sm-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">Filtrar por</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Categorías</h6>
				    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="filterCategoriesItem1">
					  <label class="form-check-label" for="filterCategoriesItem1">
					    Casacas
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="filterCategoriesItem2">
					  <label class="form-check-label" for="filterCategoriesItem2">
					    Pantalones
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="filterCategoriesItem3">
					  <label class="form-check-label" for="filterCategoriesItem3">
					    Blusas
					  </label>
					</div>
				  </div>
				  <div class="card-body">
				    <h6 class="card-subtitle mb-2 text-muted">Tamaño</h6>
				    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="filterCategoriesItem1">
					  <label class="form-check-label" for="filterCategoriesItem1">
					    S
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="filterCategoriesItem2">
					  <label class="form-check-label" for="filterCategoriesItem2">
					    M
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="filterCategoriesItem3">
					  <label class="form-check-label" for="filterCategoriesItem3">
					    L
					  </label>
					</div>
				  </div>
				</div>
			</div>
		</div>
		<div class="col-8">
			<div class="row-sm-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">Casacas</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <div class="row d-flex justify-content-center mt-3">
			            <div class="col-md-3 pb-5">
			                <div class="card card-products-home">
			                    <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="d-block w-100" alt="...">
			                </div>
			            </div>
			            <div class="col-md-3 pb-5">
			                <div class="card card-products-home">
			                    <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="d-block w-100" alt="...">
			                </div>
			            </div>
       	 			</div>
				  </div>
				</div>
			</div>
			<br>
			<div class="row-sm-3">
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">Casacas</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <div class="row d-flex justify-content-center mt-3">
			            <div class="col-md-3 pb-5">
			                <div class="card card-products-home">
			                    <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="d-block w-100" alt="...">
			                </div>
			            </div>
			            <div class="col-md-3 pb-5">
			                <div class="card card-products-home">
			                    <img src="<?php $path ?>/assets/clothes/Pantalon.jpg" class="d-block w-100" alt="...">
			                </div>
			            </div>
       	 			</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	
</div>
@endsection