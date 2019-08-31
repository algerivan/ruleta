@extends('plantilla')

@section('seccion')
<h1 class="display-4">Agregar nueva opcion</h1>
@if(session('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{session('mensaje')}}</strong> Haz click <a href="{{route('editar')}}">aqui</a> para ver las opciones
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<hr>
<form action="{{ route('opcion.crear') }}" method="POST">
    @csrf
    <section class="row">
        <section class="col-12 col-md-6 form-group">
            <label for="nombreOpcion">Nombre</label>
            <input name="nombreOpcion" type="text" class="form-control" placeholder="Nombre de la opcion" required>
        </section>
        <section class="col-12 col-md-6 form-group">
            <label for="costoOpcion">Costo</label>
            <input name="costoOpcion" type="text" class="form-control" placeholder="$$$$$$" required>
        </section>
        <section class="col-12">
            <label for="descripcionOpcion">Descripcion</label>
            <textarea type="text" name="descripcionOpcion" placeholder="Descripcion de la opcion" class="form-control" rows="5" required></textarea>
        </section>
    </section>
    <section class="row">
        <section class="col-12 mt-3 mb-4">
            <button class="btn btn-block btn-success" type="submit">Agregar Opcion</button>
        </section>
    </section>
</form>

@endsection