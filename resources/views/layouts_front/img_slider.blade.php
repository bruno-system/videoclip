<section class="home section image-slider" id="home"> 
    <div class="home-slider text-center"> 
        <div class="swiper-wrapper">  

            @foreach($img_sliders as $slider)
            <div class="swiper-slide" style="background: url({{ $slider->img }});">

                <img style="height: 50px;"  src="{{ asset('images/icon-videoclip.png') }}" alt="store logo">
                <!--
                <a href="#products" class="btn btn-lg  btn-danger">¡reservá ahora!</a> 
                <h2 class="home-slider-title-main white-color">with working cart & pay pal</h2>
                -->
                
                <div 
                style="text-shadow: 2px 2px 1px black;" class="home-slider-title-main white-color h2">{!! $slider->title !!}</div>
                <div class="home-slider-title-main white-color h3">{!! $slider->description !!}</div>
                
                <a class="arrow bounce text-center" href="#news"> <span class="ti-mouse"></span> <span class="ti-angle-double-down"></span> </a>
            </div>
            @endforeach

        </div>
        <div class="home-pagination"></div>
        <div class="home-slider-next right-arrow-negative"> <span class="glyphicon glyphicon-menu-right"></span> </div>
        <div class="home-slider-prev left-arrow-negative"> <span class="glyphicon glyphicon-menu-left"></span> </div>
    </div>
</section>