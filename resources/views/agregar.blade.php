@extends('plantilla')

@section('seccion')
<h1 class="display-4">Agregar nueva opcion</h1>
<hr>
<form action="">
    <section class="row">
        <section class="col-6 form-group">
            <label for="nombreOpcion">Nombre</label>
            <input name="nombreOpcion" type="text" class="form-control" placeholder="Nombre de la opcion">
        </section>
        <section class="col-6 form-group">
            <label for="costoOpcion">Costo</label>
            <input name="costoOpcion" type="text" class="form-control" placeholder="$$$$$$">
        </section>
        <section class="col-12">
            <label for="descripcionOpcion">Descripcion</label>
            <textarea type="text" name="descripcionOpcion" placeholder="Descripcion de la opcion" class="form-control" rows="5"></textarea>
        </section>
    </section>
    <section class="row">
        <section class="col-12 mt-3 mb-4">
            <button class="btn btn-block btn-success">Agregar Opcion</button>
        </section>
    </section>
</form>

@endsection