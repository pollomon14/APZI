<!-- Id Icono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_icono', 'Id Icono:') !!}
    {!! Form::number('id_icono', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Horario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_horario', 'Id Horario:') !!}
    {!! Form::number('id_horario', null, ['class' => 'form-control']) !!}
</div>

<!-- Habilitado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('habilitado', 'Habilitado:') !!}
    {!! Form::number('habilitado', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::text('fecha_inicio', null, ['class' => 'form-control','id'=>'fecha_inicio']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_inicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    {!! Form::text('fecha_fin', null, ['class' => 'form-control','id'=>'fecha_fin']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_fin').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush