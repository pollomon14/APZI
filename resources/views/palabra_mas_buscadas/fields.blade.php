<!-- Palabra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('palabra', 'Palabra:') !!}
    {!! Form::text('palabra', null, ['class' => 'form-control']) !!}
</div>

<!-- Contador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contador', 'Contador:') !!}
    {!! Form::number('contador', null, ['class' => 'form-control']) !!}
</div>