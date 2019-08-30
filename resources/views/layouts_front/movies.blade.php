<section class="post-list" id="salas">
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-heading">PELICULAS</h3>
            </div>

            <div class="post-slider col-md-12">
                <!-- NEWS CAROSUEL -->
                <div class="swiper-wrapper">



                    @foreach($movies as $movie)
                        <!-- SINGLE NEWS ITEM -->
                        <div class="swiper-slide">
                                <div class="post-entry wow fadeInUp " style="">
                                    <a class="h3 text-center" style="margin-bottom: 0px; " href="{{ route('smovie', $movie->id) }}" >
                                        {!! $movie->title !!}
                                    </a>
        
                                    <a class="h3 text-center" href="{{ route('smovie', $movie->id) }}" >
                                        <span class="post-entry-cover" style="background-image:url({{ $movie->img }});" alt="{!! $movie->title !!}">
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
                    
                </div>
                <!-- / NEWS CAROSUEL -->

                <!-- CAROUSEL CONTROLS -->
                <div class="post-pagination text-center"></div>
                <div class="post-slider-next right-arrow-negative"> 
                    <span class="ti-arrow-right"></span>
                </div>
                
                <div class="post-slider-prev left-arrow-negative"> 
                    <span class="ti-arrow-left"></span>
                </div>
                <!-- / CAROUSEL CONTROLS -->
            </div>
        </div>

    </div>
</section>