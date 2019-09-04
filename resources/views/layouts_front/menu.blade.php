<nav class="navbar navbar-fixed-top shadow" id="js-nav">
    <div class="container-fluid" >

        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
            </button>

            <button type="button"  class="navbar-toggle"  data-target="#myNavbar" data-toggle="collapse" type="button">
                <div id="icomp-neon">
                    <p>
                        <a href="#">VideoClip</a>
                    </p>
                </div>	
            </button>
            <!--
            <button type="button" class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button">
             <span class="glyphicon glyphicon-user" aria-hidden="true"></span>	
            </button>  -->
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="hidden-xs">
                    <a  > 
                      <div id="icomp-neon">
                      <p><a href="#home">VideoClip</a></p>
                      </div>
                    </a>
                </li>
                <li><a href="#news">Novedades</a></li>
                <li><a href="#salas">Peliculas <span class="label label-danger" style="font-size: 80%;"> News</span></a></li>
                
                <li><a href="#eventos">Te ofrecemos</a></li>
                
                <li><a href="#map">donde estamos</a></li>
                <li><a href="#contact">contacto</a></li>
                <li><a href="{{ route('pmovies')}}" style="color:orange">videoteca</a></li>
                @if( $web_config->instagram!='')
                <li><a href="{{ $web_config->instagram }}" target="_blank"><span class="ti-instagram  colorVideoclip sizeSocialIcon" ></span></a></li>
                @endif

                @if( $web_config->facebook!='')
                <li><a href="{{ $web_config->facebook }}" target="_blank"><span class="ti-facebook  colorVideoclip sizeSocialIcon"></span></a></li>
                @endif
            </ul>
            @if( $web_config->mensaje!='')
                <div class='marquee h3 text-sombra' style="color: orange">  <b>   <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp&nbsp {{ $web_config->mensaje }}</b>  </div>
                @endif
        </div>
        
    </div>
</nav>

@push('javascript')
  <script>
    $('.marquee').marquee({
	    //duration in milliseconds of the marquee
        duration: 11000,
        //gap in pixels between the tickers
        gap: 50,
        //time in milliseconds before the marquee will start animating
        delayBeforeStart: 100,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: false,
        pauseOnHover: true,
        speed : 50
    });
  </script>  
@endpush