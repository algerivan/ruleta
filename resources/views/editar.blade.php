@extends('plantilla')

@section('seccion')
<h1 class="display-4">Modificar Opciones</h1>
<section class="mb-5">
    <table class="table table-striped text-center">
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
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>$10</td>
                <td class="d-flex justify-content-center">
                    <button class="btn btn-warning mr-1">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>$10</td>
                <td class="d-flex justify-content-center">
                    <button class="btn btn-warning mr-1">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>$10</td>
                <td class="d-flex justify-content-center">
                    <button class="btn btn-warning mr-1">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
</section>
<br>
@endsection