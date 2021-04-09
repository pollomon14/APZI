<div class="table-responsive">
    <table class="table" id="municipios-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Habilitado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($municipios as $municipios)
            <tr>
                <td>{{ $municipios->nombre }}</td>
            <td>{{ $municipios->habilitado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['municipios.destroy', $municipios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('municipios.show', [$municipios->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('municipios.edit', [$municipios->id]) }}" class='btn btn-default btn-xs'>
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
