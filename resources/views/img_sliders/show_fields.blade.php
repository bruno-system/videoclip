<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! $imgSlider->id !!}
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $imgSlider->title !!}</p>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!}   <br>   
    <img src="{!! $imgSlider->img !!}" class="img-thumbnail" width="600" alt="">
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $imgSlider->description !!}</p>
</div>

<!-- Show Field -->
<div class="form-group">
    {!! Form::label('show', 'Show:') !!}
    <p>{!! $imgSlider->show !!}</p>
</div>

<!-- Id User Field -->
<div class="form-group">
    {!! Form::label('id_user', 'Id User:') !!}
    <p>{!! $imgSlider->user->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $imgSlider->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $imgSlider->updated_at !!}</p>
</div>

