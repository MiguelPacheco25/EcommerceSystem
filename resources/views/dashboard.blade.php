@extends('layouts/app')
@section('link')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
@section('header', "Dashboard")
@section('slot')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <form class="form-group" action="/clothe/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="clothe_name"></input>
                </div>
                <div class="form-group">
                    <label class="form-label">Imagen</label>
                    <input type="file" class="form-control" name="clothe_image"></input>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm btn-block">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection