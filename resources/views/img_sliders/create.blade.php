@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Img Slider
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'imgSliders.store','enctype' => 'multipart/form-data']) !!}

                        @include('img_sliders.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    let editor;
    ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .then( newEditor  => {
              editor = newEditor;
              console.log( editor );
      } )
      .catch( error => {
              console.error( error );
      } );

     
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
<script type="text/javascript"> 
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    
    var resize = $('#upload-demo').croppie({
        enableExif: true,
        enableOrientation: true,  
        viewport: { 
            width: 600,
            height: 310,
            type: 'square'
        },
        boundary: {
          width: 800,
          height: 340
        }
    });
    
    $('#img').on('change', function () { 
      var reader = new FileReader();
        reader.onload = function (e) {
          resize.croppie('bind',{
            url: e.target.result
          }).then(function(){
            console.log('jQuery bind complete');
          });
        }
        reader.readAsDataURL(this.files[0]);
    });
    
    $('.upload-image').on('click', function (ev) {
      var title = $("input[name=title]").val();
      var description = editor.getData();
      var show = $("input[name=show]").val();
      var img = $("input[name=img]").val();
      var id_user = $("select[name=id_user]").val();


      resize.croppie('result', {
        type: 'canvas',
        size: 'original',
        format: "jpeg",
        quality :0.96

      }).then(function (imge) {
        $.ajax({
          url: "{{route('imgSliders.store')}}",
          type: "POST",
          data: {
            "title":title,
            "description":description,
            "show":show,
            "img":img,
            "id_user":id_user,

            "imge":imge
          },
          
          success: function (data) {
            swal({
                    position: 'top-end',
                    type: 'success',
                    title: 'Carga con exito',
                    showConfirmButton: true,
                    //timer: 3600,
                    onAfterClose: () => {
                      window.location.href = "{{URL::to('imgSliders')}}"
                    }
                    });

            /* html = '<img src="' + imge + '" class="img-responsive" />';
            $("#preview-crop-image").html(html); */
          },

          error: function (data) {
            swal({
                    position: 'top-end',
                    type: 'error',
                    title: 'Oops.. algo salio mal :(',
                    showConfirmButton: true,
                    
                    });
          }
        });
    
      });
    
    });
    </script>
@stop