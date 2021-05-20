<!-- Palabra Field -->
<div class="col-sm-12">
    {!! Form::label('palabra', 'Palabra:') !!}
    <p>{{ $palabraMasBuscada->palabra }}</p>
</div>

<!-- Contador Field -->
<div class="col-sm-12">
    {!! Form::label('contador', 'Contador:') !!}
    <p>{{ $palabraMasBuscada->contador }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $palabraMasBuscada->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $palabraMasBuscada->updated_at }}</p>
</div>

