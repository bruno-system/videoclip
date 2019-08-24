<section id="map" class="countdown section contact white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-heading">DONDE ESTAMOS</h3>
            </div>


        </div>
        <div class="row">
            @if( $web_config->direccion!='')
            <div class="col-md-3 text-center">  
                <h2 class="section-heading-logic"><span class="ti-map"></span>&nbsp&nbsp&nbsp DIRECCIÓN</h2>
                {!! $web_config->direccion !!}
            </div>
            @endif

            @if( $web_config->email!='')
            <div class="col-md-3">
                <h3 class="section-heading-logic"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp&nbsp&nbsp EMAIL </h3>
                <p class="text-center ">{{ $web_config->email }}</p>
            </div>
            @endif

            @if( $web_config->phone!='')
            <div class="col-md-3">
                <h3 class="section-heading-logic"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp&nbsp&nbsp TELEFONO </h3>
                <p class="text-center ">{{ $web_config->phone }}</p>
            </div>
            @endif

            @if( $web_config->horarios!='')
            <div class="col-md-3 text-center ">
                <h3 class="section-heading-logic"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp&nbsp&nbsp HORARIOS </h3>
                {!! $web_config->horarios !!}
            </div>
            @endif

        </div>
    </div>

    <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.3548059458662!2d-57.99030968504125!3d-34.92263758194864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a2e7eb0760f311%3A0xaa5fa93dbe4c1c6d!2sVIDEOCLIP+LA+PLATA!5e0!3m2!1ses!2sar!4v1564277779196!5m2!1ses!2sar" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        
    </div>
</section>