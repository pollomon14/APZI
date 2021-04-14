<div class="table-responsive">
    <table class="table" id="transporteExpresos-table">
        <thead>
            <tr>
                <th>Placa</th>
        <th>Id Icono</th>
        <th>Nombre</th>
        <th>Carroceria</th>
        <th>Capacidad</th>
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
        @foreach($transporteExpresos as $transporteExpresos)
            <tr>
                <td>{{ $transporteExpresos->placa }}</td>
            <td>{{ $transporteExpresos->id_icono }}</td>
            <td>{{ $transporteExpresos->nombre }}</td>
            <td>{{ $transporteExpresos->carroceria }}</td>
            <td>{{ $transporteExpresos->capacidad }}</td>
            <td>{{ $transporteExpresos->telefono }}</td>
            <td>{{ $transporteExpresos->whatsapp }}</td>
            <td>{{ $transporteExpresos->id_evento }}</td>
            <td>{{ $transporteExpresos->id_horario }}</td>
            <td>{{ $transporteExpresos->id_municipio }}</td>
            <td>{{ $transporteExpresos->habilitado }}</td>
            <td>{{ $transporteExpresos->fecha_inicio }}</td>
            <td>{{ $transporteExpresos->fecha_fin }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['transporteExpresos.destroy', $transporteExpresos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transporteExpresos.show', [$transporteExpresos->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('transporteExpresos.edit', [$transporteExpresos->id]) }}" class='btn btn-default btn-xs'>
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
