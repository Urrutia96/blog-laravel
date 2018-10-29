@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <div class="card-title">
              <h4>Articulos</h4>
              <div class="text-right"><a class="btn btn-info" href="{{ route('admin.new') }}">+</a></div>
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
                    <td>{{ substr($articulo->cuerpo,0,100) }}</td>
                    <td>{{ $articulo->created_at->format('d/m/Y') }}</td>
                    <td class="text-primary">
                        <a class="nav-link" href="{{ route('admin.showEdit',$articulo->id) }}">
                          <i class="material-icons">edit</i>
                        </a>
                        <a class="nav-link" href="{{ route('admin.delete',$articulo->id) }}">
                          <i class="material-icons">delete</i>
                        </a>
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

@section('scripts')

@if(Session::has('message'))
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/dashboard/core/popper.min.js') }}"></script>
<script src="{{ asset('js/dashboard/core/bootstrap-material-design.min.js') }}"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="{{ asset('js/dashboard/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('js/dashboard/plugins/bootstrap-notify.js') }}"></script>
<script src="{{ asset('js/dashboard/material-dashboard.js?v=2.1.0') }}"></script>
<script>
    md.showNotification('top','right','{{ Session::get("message") }}');
</script>
@endif

@endsection