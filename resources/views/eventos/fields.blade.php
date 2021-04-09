<!-- Imagen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imagen', 'Imagen:') !!}
    {!! Form::text('imagen', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Icono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_icono', 'Id Icono:') !!}
    {!! Form::text('id_icono', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Boton Field -->
<div class="form-group col-sm-6">
    {!! Form::label('texto_boton', 'Texto Boton:') !!}
    {!! Form::text('texto_boton', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_municipio', 'Id Municipio:') !!}
    {!! Form::number('id_municipio', null, ['class' => 'form-control']) !!}
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

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Destacado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_destacado', 'Id Destacado:') !!}
    {!! Form::number('id_destacado', null, ['class' => 'form-control']) !!}
</div>