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
                                    <a class="h3 text-center" href="#" data-toggle="modal" data-target="#post-01">
                                        {!! $movie->title !!}
                                    </a>
        
                                    <a href="#" data-toggle="modal" data-target="#post-01">
                                        <span class="post-entry-cover" style="background-image:url({{ $movie->img }});">
                                        </span>
                                    </a>
                                    
                                    <p class="text-right" >{!! $movie->description !!}</p>
                                    
                                    <p>Categoria: {!! $movie->category->name !!}</p>
                                    <br>
                                    <a href="#" data-toggle="modal" data-target="#post-01" class="post-entry-more">
                                        <p class="text-right "><b>VER MÁS &nbsp&nbsp</b>
                                        <span class="ti-arrow-circle-right"></span> 
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <!-- / SINGLE NEWS ITEM -->
                    @endforeach


                    <!-- SINGLE NEWS ITEM -->
                    <div class="swiper-slide">
                        <div class="post-entry wow fadeInUp " style="">
                                <a class="h3 text-center" href="#" data-toggle="modal" data-target="#post-01">
                                        Un Titulo
                                    </a>

                            <a href="#" data-toggle="modal" data-target="#post-01">
                                <span class="post-entry-cover" style="background-image:url({{ asset('images/front/salas/sala1.png') }});">
                                </span>
                            </a>
                            
                            <p class="text-right" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum officiis eligendi tenetur minima rem temporibus exercitationem molestiae totam natus, dolorem iure impedit aspernatur hic. Suscipit magni laborum, est aut.</p>
                            <br>
                            <a href="#" data-toggle="modal" data-target="#post-01" class="post-entry-more">
                                <p class="text-right "><b>VER MÁS &nbsp&nbsp
</b>										<span class="ti-arrow-circle-right"></span> 
                                </p>
                            </a>
                        </div>
                    </div>
                    <!-- / SINGLE NEWS ITEM -->

                    <!-- SINGLE NEWS ITEM -->
                    <div class="swiper-slide">
                        <div class="post-entry wow fadeInUp">
                                <a class="h3 text-center" href="#" data-toggle="modal" data-target="#post-01">
                                        otro Titulo
                                    </a>

                            <a href="#" data-toggle="modal" data-target="#post-01">
                                <span class="post-entry-cover" style="background-image:url({{ asset('images/front/salas/sala3.jpg') }});">
                                </span>
                            </a>

                            <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum officiis eligendi tenetur minima rem temporibus exercitationem molestiae totam natus, dolorem iure impedit aspernatur hic. Suscipit magni laborum, est aut.</p>
                            
                            <br>
                            <a href="#" data-toggle="modal" data-target="#post-01" class="post-entry-more">
                                <p class="text-right "><b>VER MÁS </b>	&nbsp&nbsp									
                                    <span class="ti-arrow-circle-right"></span> 
                                </p>
                            </a>
                        </div>
                    </div>
                    <!-- / SINGLE NEWS ITEM -->

                    <!-- SINGLE NEWS ITEM -->
                    <div class="swiper-slide">
                        <div class="post-entry wow fadeInUp">
                            <a class="h3" href="#" data-toggle="modal" data-target="#post-01">
                                <img src="{{ asset('images/front/tit_reynegro.png') }}" class="img-responsive"  alt="">
                            </a>

                            <a href="#" data-toggle="modal" data-target="#post-01">
                                <span class="post-entry-cover" style="background-image:url({{ asset('images/front/salas/sala2.png') }});">
                                </span>
                            </a>

                            <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptatum officiis eligendi tenetur minima rem temporibus exercitationem molestiae totam natus, dolorem iure impedit aspernatur hic. Suscipit magni laborum, est aut.</p>
                            
                            <a href="#" data-toggle="modal" data-target="#post-01" class="post-entry-more"><img src="{{ asset('images/front/bot_reserva.png') }}" class="img_responsive_md" alt=""></a>
                            <br>
                            <a href="#" data-toggle="modal" data-target="#post-01" class="post-entry-more">
                                <p class="text-right "><b>VER MÁS </b>	&nbsp&nbsp
                                    <span class="ti-arrow-circle-right"></span> 
                                </p>
                            </a>
                        </div>
                    </div>
                    <!-- / SINGLE NEWS ITEM -->

                    
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

        <!-- NEWS MODAL -->
        <div class="modal fade" id="post-01" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <!-- NEWS MODAL CONTENT -->
                <div class="modal-content shadow">
                    <a class="close" data-dismiss="modal"> <span class="ti-close"></span></a>
                    
                    <div class="modal-body">
                        <div class="post-entry post-entry-modal">
                            <h3 class="section-heading">MA </h3> 
                            
                            <span class="post-entry-meta">

                                <span class="post-entry-time pull-right">Thriller &nbsp 
                                    <span class="post-entry-category">interior, furnitures</span>
                                </span> 
  
                                </span>
                            </span>

                            <iframe width="560" height="315" src="https://www.youtube.com/embed/eIvbEC8N3cA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            {{-- <span class="post-entry-cover" style="background-image:url({{ asset('images/front/salas/sala1.png') }});"></span>
 --}}
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  </p>

                            <div class="col-md-12 product-modal-header">
                                            <h3 class="pull-left product-modal-title">HACE TÚ RESERVA</h3>
                                    
                                            <span class="product-action-section">
                                                <span class="price">$250.00</span>
                                                <button type="button" class="btn btn-default add-item" data-image="{{ asset('images/front/product3.png') }}" data-name="Purgatorio" data-cost="750.00" data-id="8">
                                                <span class="ti-shopping-cart"></span>add to cart </button>
                                            </span>


                                            <form>

                                        <div class="row-demo"> <p>Elegí una opcion de pago:</p>
                                            <div class="col-sm-6 text-left">
                                                <div class="custom-radio">
                                                    <input type="radio" name="radio1" id="radio1" value="option1" checked>
                                                    <label for="radio1"> Tranferencia bancaria </label>
                                                </div>
                                                <div class="custom-radio">
                                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                                    <label for="radio2"> Efectivo en lugar </label>
                                                </div>

                                                <div class="custom-radio">
                                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                                    <label for="radio2"> MercadoPago </label>
                                                </div>
                                            </div>

                                        </div> 
                            <p>Completa el Formulario</p>
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nombre y Apellido" required="" type="text"> </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" required="" type="text"> </div>
                                <div class="form-group">
                                    <input class="form-control" id="mobile" name="mobile" placeholder="Teléfono" required="" type="text"> </div>

                                <button type="button" id="submit" name="submit" class="btn btn-primary btn-lg text-center">FINALIZAR</button>
                            </form>

                    </div>

                        

                        
                        </div> 


                    </div>
                </div>
                <!-- / NEWS MODAL CONTENT -->
            </div>
        </div>
        <!-- / NEWS MODAL -->
    </div>
</section>