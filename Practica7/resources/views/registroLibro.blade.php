@extends('layouts.plantilla')

@section('contenido')

<h1 class="display-1 text-center text-success mt-4">REGISTRO DE LIBROS</h1>

<div class="container col-md-6 mt-5 mb-5">
<div class="card">
    <div class="card-header fs-4 fw-medium text-info text-center">
        Introduce un nuevo libro
    </div> <!-- cierre de card-header -->
    <div class="card-body">
    <form method="POST" action="#">
        @csrf

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">ISBN</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Título</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" >
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Autor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" >
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Páginas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" >
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Editorial</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" >
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Email de Editorial</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" >
            </div>
        </div>

    </div><!-- cierre de card-body -->

    <div class="card-footer">

    <div class="d-grip gap-2"></div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    </div><!-- Cierre card footer -->


</div> <!-- cierre de card -->
</div> <!-- cierre del container -->

@endsection