@extends('admin.backend.layout')
@section('container')
<div class="card">
  <div class="card-header">
    <h3 class="card-tite">Editar Comentario</h3>
  </div>

  <div class="card-body">
    <form action="{{ route('admin.comments.update', [$comment->id ]) }}" method="post" name="formComment" id="formComment">
      <div class="row">
        <label for="description" class="control-label">Descripcion<span class="text-danger">*</span></label>
        <input type="text" name="description" id="description" value="{{$comment->description}}" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="published" class="control-label">Publicado</label>
        <div>
          <input type="radio" name="published" id="publishedTrue" value="1" <?= $comment->published == 1 ? 'checked':''; ?>>
          <label for="publishedTrue">Si</label>
          <input type="radio" name="published" id="publishedFalse" value="0" <?= $comment->published == 0 ? 'checked':''; ?>>
          <label for="publishedTrue">No</label>
        </div>
      </div>
      {{method_field('PUT') }}
      {{ csrf_field() }}
    </form>
  </div>

  <div class="card-footer">
    <button id="btnSave" class="btn btn-success">
      <i class="fa fa-save"></i>Guardar
    </button>
    <a href=" {{ route('admin.comments.index') }} " class="btn btn-danger" id="btnCancel">
      <i class="fa fa-arrow-left"></i>Volver
    </a>
  </div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function()
{
  $('#btnSave').click(function()
  {
    $('#formComment').submit();
  });
});
</script>
@stop
