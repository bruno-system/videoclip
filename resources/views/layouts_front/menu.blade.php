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
                <li><a href="#salas">Peliculas</a></li>
                
                <li><a href="#eventos">eventos</a></li>
                
                <li><a href="#map">donde estamos</a></li>
                <li><a href="#contact">contacto</a></li>
                @if( $web_config->instagram!='')
                <li><a href="{{ $web_config->instagram }}" target="_blank"><span class="ti-instagram  colorVideoclip sizeSocialIcon" ></span></a></li>
                @endif

                @if( $web_config->facebook!='')
                <li><a href="{{ $web_config->facebook }}" target="_blank"><span class="ti-facebook  colorVideoclip sizeSocialIcon"></span></a></li>
                @endif
            </ul>
        </div>
        
    </div>
</nav>