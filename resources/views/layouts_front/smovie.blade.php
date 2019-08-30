@extends('layouts_front.main')

@section('content')

@include('layouts_front.menu_simple')

<section class="countdown" id="special">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="section-heading">{{ $movie->title}}</h3>
            </div>

            <div class="col-md-5 col-sm-12">
                <ul class="product-list product-list-vertical">
                    <li class="wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <span class="product-list-left pull-left">
                                <a href="#" data-target="#product-01" data-toggle="modal">
                                    <img alt="product image" class="product-list-primary-img" src="{{ $movie->img }}"> 
                                    <span class="h3 text-center" >{{ $movie->category->name }}</span>
                                </a>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="col-md-7 text-center">
                <div class="countdown-container">

                    
                    
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/{{ $movie->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <p class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">{!! $movie->description !!}</p>

                    
                </div>
            </div>
            
            <div class="col-md-12">
                <a href="{{ route('pmovies')}}" >
                    <button type="button" class="btn btn-default add-item " >
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Volver
                    </button>
                </a>
            </div>

        </div>
    </div>
</section>
@endsection