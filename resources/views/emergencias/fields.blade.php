<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Icono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_icono', 'Id Icono:') !!}
    {!! Form::number('id_icono', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_municipio', 'Id Municipio:') !!}
    {!! Form::number('id_municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Maps Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('maps', 'Maps:') !!}
    {!! Form::textarea('maps', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_servicio', 'Tipo Servicio:') !!}
    {!! Form::number('tipo_servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Html Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('html', 'Html:') !!}
    {!! Form::textarea('html', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Evento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_evento', 'Id Evento:') !!}
    {!! Form::number('id_evento', null, ['class' => 'form-control']) !!}
</div>

<!-- Habilitado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('habilitado', 'Habilitado:') !!}
    {!! Form::number('habilitado', null, ['class' => 'form-control']) !!}
</div>