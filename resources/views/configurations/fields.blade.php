<!-- Direccion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::textarea('direccion', null, ['class' => 'form-control', 'id'=>'direccion']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Horarios Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('horarios', 'Horarios:') !!}
    {!! Form::textarea('horarios', null, ['class' => 'form-control', 'id'=>'horarios']) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- Instagram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram', 'Instagram:') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
</div>

<!-- Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('social', 'Social:') !!}
    {!! Form::text('social', null, ['class' => 'form-control']) !!}
</div>

<!-- Mensaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mensaje', 'Mensaje:') !!}
    {!! Form::text('mensaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Popup Field -->
<div class="form-group col-sm-6">
    {!! Form::label('popup', 'Popup:') !!}
    {!! Form::text('popup', null, ['class' => 'form-control']) !!}
</div>

<!-- Paginatea Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paginateA', 'Paginatea:') !!}
    {!! Form::number('paginateA', null, ['class' => 'form-control']) !!}
</div>

<!-- Paginateb Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paginateB', 'Paginateb:') !!}
    {!! Form::number('paginateB', null, ['class' => 'form-control']) !!}
</div>

<!-- Style Field -->
<div class="form-group col-sm-6">
    {!! Form::label('style', 'Style:') !!}
    {!! Form::select('style', ['0' => 'Dark', '1' => 'White', '2' => 'Other'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('configurations.index') !!}" class="btn btn-default">Cancel</a>
</div>
