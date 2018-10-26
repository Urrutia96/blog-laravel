@extends('layouts.layout')

@section('title','Blog Laravel')

@section('css')

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">

@endsection

@section('content')
      @if(isset($categoria))
      <h1 class="my-4">Categoria:
        <small>{{ ucwords($categoria->nombre) }}</small>
      </h1>
      @endif
      @if(isset($user))
      <h1 class="my-4">Usuario:
        <small>{{ ucwords($user->name) }}</small>
      </h1>
      @endif
      <br>
      @foreach($articulos as $articulo)
      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src="{{ Storage::url($articulo->img) }}" height="200px" width="900px" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">{{ $articulo->titulo }}</h2>
          <p class="card-text">{{ $articulo->cuerpo }}</p>
          <a href="{{ route('home',$articulo->slug) }}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          Posted on {{ $articulo->created_at->format('d/m/Y') }} by
          <a href="{{ route('user',$articulo->user->nickname) }}">{{ $articulo->user->name }}</a>
        </div>
      </div>
      @endforeach

      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
          <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Newer &rarr;</a>
        </li>
      </ul>

@endsection