@extends('layouts_front.main')

@push('css')
    <meta name="description" content="{!! $movie->description !!}">
    <!-- <meta name="keywords" content="HTML, CSS, JavaScript"> -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $movie->title}} disponible en VideoClip" />
    <meta property="og:description" content="{{ $movie->description }}" />
    <meta property="og:url" content="http://videocliplp.com.ar/" />
    <meta property="og:site_name" content="VideoClip" />
    <meta property="og:image" content="{{ asset($movie->img) }}" />
    {{-- <meta property="og:image:secure_url" content="{{ asset($movie->img) }}" /> --}}

    {{-- <meta name="medium" content="video">
    <meta property="og:type" content="video">
    <meta property="og:video" content="https://www.youtube-nocookie.com/embed/{{ $movie->video}}" /> --}}
@endpush

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
                                    <img alt="product image"  src="{{ asset($movie->img) }}"> 
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
            <div class="row"></div>
            <div class="col-md-12">
                <a href="{{ route('pmovies')}}" >
                    <button type="button" class="btn btn-default  " >
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Volver
                    </button>
                </a>
            </div>

        </div>
    </div>
</section>
@endsection