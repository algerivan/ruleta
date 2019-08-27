@extends('plantilla')

@section('seccion')

{{-- Slider imagenes --}}
<section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <section class="carousel-inner">
          <section class="carousel-item active">
            <a href=""><img src="imagenes/money.jpg" class="d-block w-100" alt="..."></a>
          </section>
          <section class="carousel-item">
            <a href=""><img src="imagenes/nomoney.jpg" class="d-block w-100" alt="..."></a>
          </section>
        </section>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
</section>
<hr>

{{-- Lista colapsable con las opciones --}}
<h1 class="display">Lista de opciones</h1>
<section class="accordion" id="accordionExample">

        {{-- Grupo 1 --}}

        <section class="card">
          <section class="card-header bg-success" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Opciones con Dinero
              </button>
            </h2>
          </section>
      
          <section id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <section class="card-body">
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cine</li>
                        <li class="list-group-item">Sushi</li>
                        <li class="list-group-item">Pasear al Luzu :'c</li>
                        <li class="list-group-item">Coger</li>
                        <li class="list-group-item">Bailar</li>
                </ul>
            </section>
          </section>
        </section>

        {{-- Grupo 2 --}}

        <section class="card">
          <section class="card-header bg-danger" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Opciones sin Dinero
              </button>
            </h2>
          </section>
          <section id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <section class="card-body">
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">Navegar</li>
                        <li class="list-group-item">Volar</li>
                        <li class="list-group-item">Hacer pipi</li>
                </ul>
            </section>
          </section>
        </section>
      </section>

      <hr>

{{-- Columnas ejemplos --}}
<section class="row">
    <section class="col-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio molestiae officia voluptatum culpa quia eius, dolorum et aliquam tempore quisquam, debitis laudantium consequatur fugit, harum labore ducimus rerum animi earum!</p>
    </section>
    <section class="col-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio molestiae officia voluptatum culpa quia eius, dolorum et aliquam tempore quisquam, debitis laudantium consequatur fugit, harum labore ducimus rerum animi earum!</p>
        </section>
        <section class="col-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio molestiae officia voluptatum culpa quia eius, dolorum et aliquam tempore quisquam, debitis laudantium consequatur fugit, harum labore ducimus rerum animi earum!</p>
            </section>
</section>
@endsection