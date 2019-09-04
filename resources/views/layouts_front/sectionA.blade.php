<section class="container-fluid about white-color no-padding" id="eventos">

    <div class="countdown section contact row no-margin">
    	<div class="col-md-12">
			<h3 class="section-heading granulado colorVideoclip">TE OFRECEMOS</h3>
		</div>

        <div class="col-md-6 about-black-box">
        	<ul class="product-list product-list-vertical ">
						<li class="wow fadeInUp" data-wow-delay=".2s">
							<span class="product-list-left ">
									<a href="#" data-target="#product-01" data-toggle="modal">
										<img alt="product image" class="product-list-primary-img img-responsive" src="{{ asset('images/front/product3.jpg') }}"> 
										<img alt="product image" class="product-list-secondary-img img-responsive" src="{{ asset('images/front/amigospelis.jpg') }}">
									</a>
							</span>

						</li>
						Seguinos en &nbsp 

						@if( $web_config->instagram!='')
						<a href="{{ $web_config->instagram }}" target="_blank"><span class="ti-instagram  colorVideoclip sizeSocialIcon" ></span></a>
						@endif

						@if( $web_config->facebook!='')
						<a href="{{ $web_config->facebook }}" target="_blank"><span class="ti-facebook  colorVideoclip sizeSocialIcon"></span></a>
						@endif
			</ul>
			
        	<h3 class="wow fadeInDown text-center "><b>Una peli en casa</b></h3>
        	<p class=" text-justify">
				Si bien no hay nada como mirar una película en el cine, mirar una en casa suele ser más conveniente, más cómodo y menos costoso. Quizá tengas ganas de acurrucarte y mirar una película solo o quizá quieras invitar a amigos para una maratón de películas toda la noche. Sea como fuera, tendrás que elegir una película excelente, alistar tu espacio y preparar algunos ricos bocadillos.</p>
        	
        </div>

		<div class="col-md-6 about-black-box ">
			<ul class="product-list product-list-vertical">
						<li class="wow fadeInUp" data-wow-delay=".2s">
							<span class="product-list-left ">
									<a href="#" data-target="#product-01" data-toggle="modal">
										<img alt="product image" class="product-list-primary-img" src="{{ asset('images/front/control-sm.jpg') }}"> 
										<img alt="product image" class="product-list-secondary-img" src="{{ asset('images/front/collage-sm.jpg') }}">
									</a>
							</span>
						</li>
						Seguinos en &nbsp 

						@if( $web_config->instagram!='')
						<a href="{{ $web_config->instagram }}" target="_blank"><span class="ti-instagram  colorVideoclip sizeSocialIcon" ></span></a>
						@endif

						@if( $web_config->facebook!='')
						<a href="{{ $web_config->facebook }}" target="_blank"><span class="ti-facebook  colorVideoclip sizeSocialIcon"></span></a>
						@endif		
			</ul>
        	<h3 class="wow fadeInDown text-center"><b>Juegos para disfrutar en grande</b></h3>
        	<p class="textoBoxNegraIzquierda">En nuestro local tambien encontraras alquileres de  los ultimos y mejores video juegos para  plataformas PS4 y PS3, sumergite en una nueva aventura virtual. </p>

        	
        </div>
    </div>


  </section>