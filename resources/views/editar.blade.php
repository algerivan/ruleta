@extends('plantilla')

@section('seccion')
<h1 class="display-4">Modificar Opciones</h1>
<section class="mb-5">
    <table class="table table-striped text-center table-hover">
        <thead>
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Costo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($opciones as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->descripcion}}</td>
                <td>${{$item->costo}}</td>
                <td class="d-flex justify-content-center">
                    <a href="{{ route('modificar', $item) }}"><button class="btn btn-warning mr-1">Editar</button></a>
                    <a href="#"><button class="btn btn-danger">Eliminar</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
<br>
@endsection