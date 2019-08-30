<section class="countdown section contact granulado" id="news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-heading ">NOVEDADES</h3>
                
            </div>

            <div class="col-md-12 text-center">
                <div class="countdown-container">
                    <p class="wow fadeInDown">VIDEOCLUB DE LA PLATA!!!! SIEMPRE CON LAS MEJORES NOVEDADES!!!!! </p>

                    <div id="instagram-feed2" class="instagram_feed wow pulse"></div>

                </div>
            </div>
        </div>
    </div>
</section>

@push('javascript')
    <!-- instagramfeed.-->
	<script src="{{ asset('js/front/jquery.instagramFeed.js') }}"></script>
	<script>
		(function($){
            $(window).on('load', function(){                

                $.instagramFeed({
                    'username': 'videoclip_la_plata',
                    'container': "#instagram-feed2",
                    'display_profile': false,
                    'display_biography': false,
                    'display_gallery': true,
                    'get_raw_json': false,
                    'callback': null,
                    'styling': true,
                    'items': 8,
                    'items_per_row': 4,
                    'margin': 1
                });

            });
        })(jQuery);
    </script>
    
@endpush