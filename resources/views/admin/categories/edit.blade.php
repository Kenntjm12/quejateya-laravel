@extends('admin.backend.layout')

@section('container')
<div class="card">

  <div class="card-header">
    <h3 class="card-tite">Editar Categoria</h3>
  </div>

  <div class="card-body">

    <form action="{{ route('admin.categories.update', [$category->id ]) }}" method="post" name="formCategory" id="formCategory">

<div class="row">
  <div class="col-md-6">
    <label for="name" class="coontrol-label">Nombre <span class="text-danger">*</span></label>
    <input type="text" name="name" id="name" value="{{$category->name}}" class="form-control" placeholder="Introduzca el nombre" required>
  </div>

  <div class="col-md-6">
    <label for="hashtag" class="coontrol-label">Hashtag <span class="text-danger">*</span></label>
    <input type="text" name="hashtag" id="hashtag" value="{{$category->hashtag}}" class="form-control" placeholder="Introduzca el hashtag" required>
  </div>
</div>

      <div class="form-group">
        <label for="published" class="control-label">Publicado</label>
        <div>
          <input type="radio" name="published" id="publishedTrue" value="1" <?= $category->published == 1 ? 'checked':''; ?>>
          <label for="publishedTrue">Si</label>
          <input type="radio" name="published" id="publishedFalse" value="0" <?= $category->published == 0 ? 'checked':''; ?>>
          <label for="publishedTrue">No</label>
        </div>
      </div>
      {{method_field('PUT') }}
      {{ csrf_field() }}
    </form>

  </div>

  <div class="card-footer">
    <button id="btnSave" class"btn btn-success">
      <i class="fa fa-save"></i>  Guardar
    </button>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-danger" id="btnCancel">
      <i class="fa fa-arrow-left"></i>Volver
    </a>
  </div>

</div>
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
  $('#btnSave').click(function(){

  $('#formCategory').submit();

  });
});
</script>

@stop
