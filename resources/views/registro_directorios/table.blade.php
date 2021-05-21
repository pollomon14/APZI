<div class="table-responsive">
    <table class="table" id="registroDirectorios-table">
        <thead>
            <tr>
                <th>Id Local</th>
        <th>Nombre Local</th>
        <th>Telefono Contador</th>
        <th>Whatsapp Contador</th>
        <th>Catalogo Contador</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registroDirectorios as $registroDirectorio)
            <tr>
                <td>{{ $registroDirectorio->id_local }}</td>
            <td>{{ $registroDirectorio->nombre_local }}</td>
            <td>{{ $registroDirectorio->telefono_contador }}</td>
            <td>{{ $registroDirectorio->whatsapp_contador }}</td>
            <td>{{ $registroDirectorio->catalogo_contador }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['registroDirectorios.destroy', $registroDirectorio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('registroDirectorios.show', [$registroDirectorio->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('registroDirectorios.edit', [$registroDirectorio->id]) }}" class='btn btn-default btn-xs'>
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
