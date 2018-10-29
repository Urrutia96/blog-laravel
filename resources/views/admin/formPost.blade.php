@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
          @if(isset($articulo))
            <div class="card-header card-header-primary">
                <h4 class="card-title">Editar Articulo</h4>
                <p class="card-category">{{ $articulo->titulo }}</p>
            </div>
          @else
            <div class="card-header card-header-primary">
                <h4 class="card-title">Nuevo Articulo</h4>
            </div>
          @endif
        <div class="card-body">
          @if(isset($articulo))
            <form action="{{ route('admin.edit') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $articulo->id }}" />
          @else
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
          @endif

          @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Titulo</label>
                        <input type="text" class="form-control" name="titulo" value="{{ isset($articulo->titulo) ? $articulo->titulo: ""}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Imagen</label>                        
                    </div>
                </div>
            </div>
            <input type="file" id="img" name="img" class="form-control" accept="image/png, image/jpeg" />
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Categoria</label>
                        <select class="form-control" name="categoria">
                            @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ isset($articulo->titulo) ? $articulo->categoria->nombre==$categoria->nombre?'selected':'' : ""}}>{{ ucwords($categoria->nombre) }}</option>
                            @endforeach
                        </select>                        
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Cuerpo</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"></label>
                    <textarea class="form-control" rows="5" name="cuerpo">{{ isset($articulo->cuerpo) ? $articulo->cuerpo: ""}}</textarea>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">
                {{isset($articulo) ? 'Guardar Cambios' : 'Publicar'}}
            </button>
            <div class="clearfix"></div>
          </form>
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