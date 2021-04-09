<div class="table-responsive">
    <table class="table" id="horarios-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Horario</th>
        <th>Observacion</th>
        <th>Habilitado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($horarios as $horarios)
            <tr>
                <td>{{ $horarios->nombre }}</td>
            <td>{{ $horarios->horario }}</td>
            <td>{{ $horarios->observacion }}</td>
            <td>{{ $horarios->habilitado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['horarios.destroy', $horarios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('horarios.show', [$horarios->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('horarios.edit', [$horarios->id]) }}" class='btn btn-default btn-xs'>
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
