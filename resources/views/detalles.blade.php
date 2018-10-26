@extends('layouts.layout')

@section('title', $articulo->titulo . " | Blog Laravel")

@section('css')

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog-post.css') }}" rel="stylesheet">

@endsection

@section('content')

    <!-- Title -->
    <h1 class="mt-4">{{ $articulo->titulo }}</h1>

    <!-- Author -->
    <p class="lead">
    by
    <a href="#">{{ $articulo->user->name }}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Posted on {{ $articulo->created_at->format('d/m/Y') }}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="{{ Storage::url($articulo->img) }}" width="650px" height="300px" alt="">

    <hr>

    <!-- Post Content -->
    {{ $articulo->cuerpo }}

    <hr>

    <!-- Comments Form -->
    <div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
        <form>
        <div class="form-group">
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>

@endsection