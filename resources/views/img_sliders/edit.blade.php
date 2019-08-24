@extends('layouts.app')

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
                   {!! Form::model($imgSlider, ['route' => ['imgSliders.update', $imgSlider->id], 'method' => 'patch' ,'enctype' => 'multipart/form-data']) !!}

                        @include('img_sliders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
@section('scripts')
<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
@stop