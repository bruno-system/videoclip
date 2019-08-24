<div class="section section-min">
    <footer class="">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-4 col-md-push-4 text-center "> 
                            <div class="wow pulse">
                            <img class="footer-logo " src="{{ asset('images/icon-videoclip.png') }}" alt="footer-logo"> 
                            <img class="footer-logo-letras" src="{{ asset('images/videoClipWhite.png') }}" alt="footer-logo">
                            </div>
                            <div class="social">
                                <ul>
                                    
                                    <li>
                                        @if( $web_config->instagram!='')
                                        <a href="{{ $web_config->instagram }}" target="_blank"><span class="ti-instagram "></span></a> &nbsp&nbsp&nbsp
                                        @endif
                                        @if( $web_config->facebook!='')
                                        <a href="{{ $web_config->facebook }}" target="_blank"><span class="ti-facebook"></span></a>
                                        @endif
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6 text-left">
                        <span style="font-size:14px;"> 2019 &copy; Todos los derechos reservados</span>
                    </div>
                    <div class="col-md-6 text-right ">
                        <span  style="font-size:14px;" data-toggle="tooltip" data-placement="top" title="Web Developer Bruno Alvarado."> Web Developer Bruno Alvarado</span>
                    </div>
                </div>
            </div>
        </div>


    </footer>
</div>