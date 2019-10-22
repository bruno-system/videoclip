<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-12">
    {!! Form::label('img', 'Img:') !!}
    {{-- {!! Form::file('img',  ['class' => 'form-control-file']) !!} <br> --}}
    <input type="hidden" value="{{ $imgSlider->img }}" name="img">
    <div id="preview-crop-image" class="col-md-12 text-center h3"
         style="background:#9d9d9d;padding:5px;min-height:300px;">
        <img src="{{ asset($imgSlider->img) }}" class="img-responsive" />
    </div>
</div>
<div class="clearfix"></div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'id'=>'editor']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Show Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('show', 'Show:') !!} <br>
    <label class="checkbox-inline">
        {!! Form::hidden('show', 0) !!}
        {!! Form::checkbox('show', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Id User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user', 'Id User:') !!}
    {!! Form::select('id_user',$users, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary ']) !!}
    <a href="{!! route('imgSliders.index') !!}" class="btn btn-default">Cancel</a>
</div>
