@extends('admin.backend.layout')

@section('container')
<div class="card">

  <div class="card-header">
    <h3 class="card-tite">Nueva Categoria</h3>
  </div>

  <div class="card-body">

    <form action="index.html" method="post">

<div class="row">
  <div class="col-md-6">
    <label for="name" class="coontrol-label">Nombre <span class="text-danger">*</span></label>
    <input type="text" name="name" id="name" value="" class="form-control" placeholder="Introduzca el nombre" required>
  </div>

  <div class="col-md-6">
    <label for="code" class="coontrol-label">Code <span class="text-danger">*</span></label>
    <input type="text" name="code" id="hashtag" value="" class="form-control" placeholder="Introduzca el Codigo de Ciudad" required>
  </div>
</div>

      <div class="form-group">
        <label for="published" class="control-label">Publicado</label>
        <div>
          <input type="radio" name="published" id="publishedTrue" value="1">
          <label for="publishedTrue">Si</label>
          <input type="radio" name="published" id="publishedFalse" value="0">
          <label for="publishedTrue">No</label>
        </div>
      </div>
    </form>

  </div>

  <div class="card-footer">
    <button id="btnSave" class"btn btn-success">
      <i class="fa fa-save"></i>  Guardar
    </button>
    <a href="{{ route('admin.cities.index') }}" class="btn btn-danger">
      <i class="fa fa-arrow-left"></i>Volver
    </a>
  </div>

</div>
@stop
