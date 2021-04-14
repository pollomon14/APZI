<div class="table-responsive">
    <table class="table" id="transporteTaxes-table">
        <thead>
            <tr>
                <th>Placa</th>
        <th>Id Icono</th>
        <th>Nombre</th>
        <th>Desplegable</th>
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
        @foreach($transporteTaxes as $transporteTaxis)
            <tr>
                <td>{{ $transporteTaxis->placa }}</td>
            <td>{{ $transporteTaxis->id_icono }}</td>
            <td>{{ $transporteTaxis->nombre }}</td>
            <td>{{ $transporteTaxis->desplegable }}</td>
            <td>{{ $transporteTaxis->telefono }}</td>
            <td>{{ $transporteTaxis->whatsapp }}</td>
            <td>{{ $transporteTaxis->id_evento }}</td>
            <td>{{ $transporteTaxis->id_horario }}</td>
            <td>{{ $transporteTaxis->id_municipio }}</td>
            <td>{{ $transporteTaxis->habilitado }}</td>
            <td>{{ $transporteTaxis->fecha_inicio }}</td>
            <td>{{ $transporteTaxis->fecha_fin }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['transporteTaxes.destroy', $transporteTaxis->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transporteTaxes.show', [$transporteTaxis->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('transporteTaxes.edit', [$transporteTaxis->id]) }}" class='btn btn-default btn-xs'>
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
