<!-- Id Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_categoria', 'Id Categoria:') !!}
    {!! Form::number('id_categoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Subcategoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_subcategoria', 'Id Subcategoria:') !!}
    {!! Form::number('id_subcategoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Domicilio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domicilio', 'Domicilio:') !!}
    {!! Form::number('domicilio', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Horario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_horario', 'Id Horario:') !!}
    {!! Form::number('id_horario', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo De Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_de_plan', 'Tipo De Plan:') !!}
    {!! Form::number('tipo_de_plan', null, ['class' => 'form-control']) !!}
</div>

<!-- Habilitado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('habilitado', 'Habilitado:') !!}
    {!! Form::number('habilitado', null, ['class' => 'form-control']) !!}
</div>

<!-- Visitas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visitas', 'Visitas:') !!}
    {!! Form::number('visitas', null, ['class' => 'form-control']) !!}
</div>

<!-- Cant Visitas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cant_visitas', 'Cant Visitas:') !!}
    {!! Form::number('cant_visitas', null, ['class' => 'form-control']) !!}
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