<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $emergencias->nombre }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $emergencias->direccion }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $emergencias->telefono }}</p>
</div>

<!-- Id Icono Field -->
<div class="col-sm-12">
    {!! Form::label('id_icono', 'Id Icono:') !!}
    <p>{{ $emergencias->id_icono }}</p>
</div>

<!-- Id Municipio Field -->
<div class="col-sm-12">
    {!! Form::label('id_municipio', 'Id Municipio:') !!}
    <p>{{ $emergencias->id_municipio }}</p>
</div>

<!-- Maps Field -->
<div class="col-sm-12">
    {!! Form::label('maps', 'Maps:') !!}
    <p>{{ $emergencias->maps }}</p>
</div>

<!-- Tipo Servicio Field -->
<div class="col-sm-12">
    {!! Form::label('tipo_servicio', 'Tipo Servicio:') !!}
    <p>{{ $emergencias->tipo_servicio }}</p>
</div>

<!-- Html Field -->
<div class="col-sm-12">
    {!! Form::label('html', 'Html:') !!}
    <p>{{ $emergencias->html }}</p>
</div>

<!-- Id Evento Field -->
<div class="col-sm-12">
    {!! Form::label('id_evento', 'Id Evento:') !!}
    <p>{{ $emergencias->id_evento }}</p>
</div>

<!-- Habilitado Field -->
<div class="col-sm-12">
    {!! Form::label('habilitado', 'Habilitado:') !!}
    <p>{{ $emergencias->habilitado }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $emergencias->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $emergencias->updated_at }}</p>
</div>

