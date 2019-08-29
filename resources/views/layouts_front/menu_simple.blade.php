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
                      <p><a href="{{ route('index')}}">VideoClip</a></p>
                      </div>
                    </a>
                </li>

                
            </ul>
        </div>
        
    </div>
</nav>