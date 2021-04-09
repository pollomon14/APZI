<div class="table-responsive">
    <table class="table" id="festivos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Fecha</th>
        <th>Habilitado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($festivos as $festivos)
            <tr>
                <td>{{ $festivos->nombre }}</td>
            <td>{{ $festivos->fecha }}</td>
            <td>{{ $festivos->habilitado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['festivos.destroy', $festivos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('festivos.show', [$festivos->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('festivos.edit', [$festivos->id]) }}" class='btn btn-default btn-xs'>
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
