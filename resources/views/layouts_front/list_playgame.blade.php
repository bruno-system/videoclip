@extends('layouts_front.main')

@section('content')

@include('layouts_front.menu_simple')

<section  id="salas" style="background-image: url({{asset('images/front/ps4-background.png')}});">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 ">
                <h3 class="section-heading " style="margin-top: 120px">PS4 Games!</h3>

                {{-- <select class="form-control">
                    <option value="">Default select</option>
                </select> --}}

               

            </div>

            <div class="col-md-4 col-md-offset-4" >
                
                <form method="GET" class="form-inline">
                    <div class="form-group">
                        <label for="select" class="" style="">Nombre</label>
                        {!! Form::text('game_name', $game_name ,  ['class' => 'form-control','style' => 'background-color: #0000006e; border-bottom: 1px solid rgb(232, 117, 40)']) !!}   
                        {!! Form::submit('Buscar', ['class' => ' btn btn-primary btn-sm', 'style' => ''] ) !!}  
                    </div>
                    
                </form>   
            </div>

            <div class=" col-md-12">
                <!-- NEWS CAROSUEL -->

                    @foreach($movies as $movie)
                        <!-- SINGLE NEWS ITEM -->
                        <div class="col-md-4">
                                <div class="post-entry wow fadeInUp " style="    margin-top: 20px;" >
                                    <a class="h3 text-center" style="margin-bottom: 0px;height: 50px; "  href="{{ route('smovie', $movie->id) }}" >
                                        {!! $movie->title !!}
                                    </a>
        
                                    <a class="h3 text-center"  href="{{ route('smovie', $movie->id) }}"
                                        data-toggle="tooltip" data-placement="bottom" title="{!! strip_tags ($movie->description) !!}" >
                                        <span class="post-entry-cover" style="background-image:url({{ $movie->img }}); margin-bottom: 0px;" alt="{!! $movie->title !!}">
                                        </span>
                                    </a>
                                    
                                    <textarea class="form-control text-justify text-movie" name="" id="" cols="10" rows="5">{!! strip_tags($movie->description) !!}</textarea>  
                                    <br>
                                    <div class="col-md-6">
                                        <p>Categoria: {!! $movie->category->name !!}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('smovie', $movie->id) }}"  class="post-entry-more btn btn-danger btn-sm">
                                            <b>VER MÁS &nbsp&nbsp</b><span class="ti-arrow-circle-right"></span> 
                                        </a>
                                    </div>

                                </div> 
                        </div>
                        <!-- / SINGLE NEWS ITEM -->
                    @endforeach

                <!-- / NEWS CAROSUEL -->

                       
            </div>
            <div class="row"></div>
            <div class="col-md-12 " style="padding-left: 30px;">
                {{ $movies->appends(['game_name' => $game_name])->links('') }}   
            </div>
            
            <div class="col-md-12" style="padding-left: 30px; margin-top: 15px;">
                <a href="{{ route('index')}}" >
                    <button type="button" class="btn btn-default add-item " >
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Inicio
                    </button>
                </a>
            </div>
           
        </div>

        
    </div>
</section>
@endsection