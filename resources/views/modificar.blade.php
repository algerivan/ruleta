@extends('plantilla')

@section('seccion')

<h1 class="display-4">Modificar Opcion {{$opcion->id}}</h1>
<hr>
<form action="">
    <section class="row">
        <section class="col-6 form-group">
            <label for="nombreOpcion">Nombre</label>
            <input name="nombreOpcion" type="text" class="form-control" value="{{$opcion->nombre}}">
        </section>
        <section class="col-6 form-group">
            <label for="costoOpcion">Costo</label>
            <input name="costoOpcion" type="text" class="form-control" value="{{$opcion->costo}}">
        </section>
        <section class="col-12">
            <label for="descripcionOpcion">Descripcion</label>
            <textarea type="text" name="descripcionOpcion" class="form-control" rows="5">{{$opcion->descripcion}}</textarea>
        </section>
    </section>
    <section class="row">
        <section class="col-12 mt-3 mb-4">
            <button class="btn btn-block btn-warning">Editar Opcion</button>
        </section>
    </section>
</form>
@endsection