<div class="table-responsive">
    <table class="table" id="transporteDomiciliarios-table">
        <thead>
            <tr>
                <th>Tipo Vehiculo</th>
        <th>Placa</th>
        <th>Id Icono</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Whatsapp</th>
        <th>Id Evento</th>
        <th>Id Horario</th>
        <th>Id Municipio</th>
        <th>Habilitado</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transporteDomiciliarios as $transporteDomiciliarios)
            <tr>
                <td>{{ $transporteDomiciliarios->tipo_vehiculo }}</td>
            <td>{{ $transporteDomiciliarios->placa }}</td>
            <td>{{ $transporteDomiciliarios->id_icono }}</td>
            <td>{{ $transporteDomiciliarios->nombre }}</td>
            <td>{{ $transporteDomiciliarios->telefono }}</td>
            <td>{{ $transporteDomiciliarios->whatsapp }}</td>
            <td>{{ $transporteDomiciliarios->id_evento }}</td>
            <td>{{ $transporteDomiciliarios->id_horario }}</td>
            <td>{{ $transporteDomiciliarios->id_municipio }}</td>
            <td>{{ $transporteDomiciliarios->habilitado }}</td>
            <td>{{ $transporteDomiciliarios->fecha_inicio }}</td>
            <td>{{ $transporteDomiciliarios->fecha_fin }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['transporteDomiciliarios.destroy', $transporteDomiciliarios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transporteDomiciliarios.show', [$transporteDomiciliarios->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('transporteDomiciliarios.edit', [$transporteDomiciliarios->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
