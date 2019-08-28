<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! $movie->id !!}
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $movie->title !!}</p>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!} <br>
    <img src="{!! $movie->img !!}" class="img-thumbnail" alt="" width="300">
    
</div>

<!-- Video Field -->
<div class="form-group">
    {!! Form::label('video', 'Video:') !!}
    <p>{!! $movie->video !!}</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/{!! $movie->video !!}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $movie->description !!}</p>
</div>

<!-- Show Field -->
<div class="form-group">
    {!! Form::label('show', 'Show:') !!}
    <p>{!! $movie->show !!}</p>
</div>

<!-- Id Category Field -->
<div class="form-group">
    {!! Form::label('id_category', 'Id Category:') !!}
    <p>{!! $movie->id_category !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $movie->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $movie->updated_at !!}</p>
</div>

