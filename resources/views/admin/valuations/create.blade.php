@extends('admin.backend.layout')

@section('container')
<div class="card">

  <div class="card-header">
    <h3 class="card-tite">Nueva Valoracion</h3>
  </div>

  <div class="card-body">

    <form action="{{ route('admin.valuations.store') }}" method="post" name="formValuation" id="formValuation">

<div class="row">
  <div class="col-md-6">
    <label for="name" class="control-label">Nombre <span class="text-danger">*</span></label>
    <input type="text" name="name" id="name" value="" class="form-control" placeholder="Introduzca el nombre" required>
  </div>

  <div class="col-md-6">
    <label for="position" class="control-label">Posicion <span class="text-danger">*</span></label>
    <input type="text" name="position" id="position" value="" class="form-control" placeholder="Introduzca la posicion" required>
  </div>
</div>

      <div class="form-group">
        <label for="published" class="control-label">Publicado</label>
        <div>
          <input type="radio" name="published" id="publishedTrue" value="1" checked>
          <label for="publishedTrue">Si</label>
          <input type="radio" name="published" id="publishedFalse" value="0">
          <label for="publishedTrue">No</label>
        </div>
      </div>
      {{ csrf_field() }}
    </form>

  </div>

  <div class="card-footer">
    <button id="btnSave" class="btn btn-success">
      <i class="fa fa-save"></i>  Guardar
    </button>
    <a href="{{ route('admin.valuations.index') }}" class="btn btn-danger" id="btnCancel">
      <i class="fa fa-arrow-left"></i>Volver
    </a>
  </div>

</div>
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
  $('#btnSave').click(function(){
  $('#formValuation').submit();
  });
});
</script>

@stop
