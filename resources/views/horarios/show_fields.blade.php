<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $horarios->nombre }}</p>
</div>

<!-- Horario Field -->
<div class="col-sm-12">
    {!! Form::label('horario', 'Horario:') !!}
    <p>{{ $horarios->horario }}</p>
</div>

<!-- Observacion Field -->
<div class="col-sm-12">
    {!! Form::label('observacion', 'Observacion:') !!}
    <p>{{ $horarios->observacion }}</p>
</div>

<!-- Habilitado Field -->
<div class="col-sm-12">
    {!! Form::label('habilitado', 'Habilitado:') !!}
    <p>{{ $horarios->habilitado }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $horarios->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $horarios->updated_at }}</p>
</div>

