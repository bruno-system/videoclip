@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Movie Category
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($movieCategory, ['route' => ['movieCategories.update', $movieCategory->id], 'method' => 'patch']) !!}

                        @include('movie_categories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection