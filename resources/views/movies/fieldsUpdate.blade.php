<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::text('video', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Img:') !!}
    {{-- {!! Form::file('img') !!} --}}
    <input type="hidden" value="{{ $movie->img }}" name="img">
    <div  class="col-md-12 text-center h3">
        <img src="{{ $movie->img }}" class="img-thumbnail" style="max-height: 300px;"/>
    </div>
</div>
<div class="clearfix"></div>



<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'id'=>'editor']) !!}
</div>

<!-- Id Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_category', 'Id Category:') !!}
    {!! Form::select('id_category', $categories, null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Show Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('show', 'Show:') !!} <br>
    <label class="checkbox-inline">
        {!! Form::hidden('show', 0) !!}
        {!! Form::checkbox('show', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('movies.index') !!}" class="btn btn-default">Cancel</a>
</div>
