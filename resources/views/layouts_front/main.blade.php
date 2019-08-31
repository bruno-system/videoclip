<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>VideoClip</title>
	<meta content="alquiler de peliculas en dvd y  blu ray" name="description">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="width=device-width" name="viewport">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<link rel="icon" href="{{ asset('images/icon-videoclip.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script%7CLato:300,400,700" rel="stylesheet">
	<link href="{{ asset('css/front/bootstrap-dark.css') }}" rel="stylesheet">
	<link id="pagestyle" href="{{ asset('css/front/theme-dark.css') }}" rel="stylesheet">
	<!-- neon-text -->
	<link rel="stylesheet" href="{{ asset('css/front/style-neon.css') }}">
	<!-- myStyle -->
	<link href="{{ asset('css/front/mystyle.css') }}" rel="stylesheet">
	<!-- aJAX no necesario-->
	{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	@yield('css')
</head>

<body data-offset="50" data-spy="scroll" data-target=".navbar" class="dark-theme">
	
	@yield('content')
    
	@include('layouts_front.footer')

	<script src="{{ asset('js/front/vendor/wow.js') }}"></script>
	<!-- jqueery y tb necesario para ajax -->
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	{{-- <script src="{{ asset('js/front/vendor/jquery-1.11.2.min.js') }}"></script> --}}
	<script src="{{ asset('js/front/vendor/swiper.min.js') }}"></script>
	<script src="{{ asset('js/front/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/front/vendor/jquery.countTo.js') }}"></script>
	<script src="{{ asset('js/front/vendor/jquery.inview.js') }}"></script>
	<script src="{{ asset('js/front/vendor/jquery.countdown.js') }}"></script>
	
	<script src="{{ asset('js/front/main.js') }}"></script>
	<script>
		// go to tOP
		$(document).ready(function(){
		$('body').append('<div id="toTop" class="btn btn-warning colorVideoclipFondo"><span class="glyphicon glyphicon-chevron-up"></span></div>');
			$(window).scroll(function () {
				if ($(this).scrollTop() != 0) { 
					$('#toTop').fadeIn();
				} else {
					$('#toTop').fadeOut(); 
				}
				});  
			$('#toTop').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
		});

		
	</script>
	<script src="{{ asset('vendor/sweet/sweetalert2all.js') }}"></script>

	@include('sweet::alert')


	@stack('javascript')
	
</body>
</html>