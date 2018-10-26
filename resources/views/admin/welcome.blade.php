@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <div class="card-title">
              <h4>Articulos</h4>
              <div class="text-right"><a class="btn btn-info">+</a></div>
          </div>
          <p class="card-category"> </p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Acción</th>
              </thead>
              <tbody>
                @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->titulo }}</td>
                    <td>{{ $articulo->cuerpo }}</td>
                    <td>{{ $articulo->created_at->format('d/m/Y') }}</td>
                    <td class="text-primary">

                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection