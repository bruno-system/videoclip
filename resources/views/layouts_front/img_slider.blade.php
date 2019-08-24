<section class="home section image-slider" id="home"> 
    <div class="home-slider text-center"> 
        <div class="swiper-wrapper">  
            <div class="swiper-slide " id="slide1-img"> 
                <!-- <img src="images/logo-white.png" alt="store logo"> -->
                <!--<h2 class="home-slider-title-main white-color">test</h2> -->

                <a href="#salas">
                    <img src="{{ asset('images/front/tit_purgatorio1.png') }} " class="purgatorioSlide"  alt="">
                </a>
                <a href="#salas">
                    <img src="{{ asset('images/front/bot_reserva.png') }}" class="botonReserva"  alt="">
                </a>



                <div class="barra_redes">
                    seguinos en &nbsp
                    <a href="https://www.instagram.com/logicgamesargentina/" target="_blank"><img     height="25px" src="{{ asset('images/front/icon_instagram.png') }}"  alt=""></a> &nbsp
                    <a href="https://www.facebook.com/logicgamesargentina/" target="_blank"><img     height="25px" src="{{ asset('images/front/icon_face.png') }}"  alt=""></a>
                </div>
                <!--
                <div class="home-buttons text-center">
                    <a href="#salas"><img src="images/bot_reserva.png"  alt=""></a>
                 
                </div>  -->

                <a class="arrow bounce text-center" href="#news"> <span class="ti-mouse"></span> <span class="ti-angle-double-down"></span> </a>
            </div>

            @foreach($img_sliders as $slider)
            <div class="swiper-slide" style="background: url({{ $slider->img }});">
                <img style="height: 50px;" src="{{ asset('images/icon-videoclip.png') }}" alt="store logo">
                <!--
                <a href="#products" class="btn btn-lg  btn-danger">¡reservá ahora!</a> 
                <h2 class="home-slider-title-main white-color">with working cart & pay pal</h2>
                -->
                <a class="arrow bounce text-center" href="#news"> <span class="ti-mouse"></span> <span class="ti-angle-double-down"></span> </a>
            </div>
            @endforeach

        </div>
        <div class="home-pagination"></div>
        <div class="home-slider-next right-arrow-negative"> <span class="glyphicon glyphicon-menu-right"></span> </div>
        <div class="home-slider-prev left-arrow-negative"> <span class="glyphicon glyphicon-menu-left"></span> </div>
    </div>
</section>