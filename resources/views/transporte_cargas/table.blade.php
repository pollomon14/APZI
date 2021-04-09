<div class="table-responsive">
    <table class="table" id="transporteCargas-table">
        <thead>
            <tr>
                <th>Placa</th>
        <th>Id Icono</th>
        <th>Nombre</th>
        <th>Carroceria</th>
        <th>Capacidad</th>
        <th>Telefono</th>
        <th>Whatsapp</th>
        <th>Id Horario</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transporteCargas as $transporteCarga)
            <tr>
                <td>{{ $transporteCarga->placa }}</td>
            <td>{{ $transporteCarga->id_icono }}</td>
            <td>{{ $transporteCarga->nombre }}</td>
            <td>{{ $transporteCarga->carroceria }}</td>
            <td>{{ $transporteCarga->capacidad }}</td>
            <td>{{ $transporteCarga->telefono }}</td>
            <td>{{ $transporteCarga->whatsapp }}</td>
            <td>{{ $transporteCarga->id_horario }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['transporteCargas.destroy', $transporteCarga->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transporteCargas.show', [$transporteCarga->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('transporteCargas.edit', [$transporteCarga->id]) }}" class='btn btn-default btn-xs'>
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
