@extends('plantilla')

@section('seccion')
<h1 class="display-4">Modificar Opciones</h1>

@if(session('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('mensaje')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
@endif

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
                    <form action="{{route('opcion.eliminar', $item)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$opciones->links()}}
</section>

<br>

@endsection