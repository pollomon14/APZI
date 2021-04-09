<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $municipios->nombre }}</p>
</div>

<!-- Habilitado Field -->
<div class="col-sm-12">
    {!! Form::label('habilitado', 'Habilitado:') !!}
    <p>{{ $municipios->habilitado }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $municipios->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $municipios->updated_at }}</p>
</div>

