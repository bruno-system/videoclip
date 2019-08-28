<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! $movie->id !!}
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!} <br>
    <span class="h3">{!! $movie->title !!}</span>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!} <br>
    <img src="{!! $movie->img !!}" class="img-thumbnail" alt="" width="300">
    
</div>

<!-- Video Field -->
<div class="form-group">
    {!! Form::label('video', 'Video:') !!}
    <span class="text-muted">{!! $movie->video !!}</span>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/{!! $movie->video !!}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>   
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <div class="well">
        <p >{!! $movie->description !!}</p>
    </div>
</div>

<!-- Show Field -->
<div class="form-group">
    {!! Form::label('show', 'Show:') !!}
    {!! $movie->show() !!}
</div>

<!-- Id Category Field -->
<div class="form-group">
    {!! Form::label('id_category', 'Id Category:') !!}
    <p>{!! $movie->category->name !!}</p>
    
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

