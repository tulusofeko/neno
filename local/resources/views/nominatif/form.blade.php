<div class="form-group @if ($errors->has('dokumen')) has-error @endif">
    {!! Form::label('dokumen','UPLOAD FILE :', ['class'=>'control-label']) !!}
    <input type="file" name="dokumen" class="form-control" id="{{ $jenis_form }}">
    @if ($errors->has('dokumen')) <p class="help-block">{{ $errors->first('dokumen') }}</p> @endif
</div>