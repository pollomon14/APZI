<div class="table-responsive">
    <input id="myInput" type="text" placeholder="Search.." class="form-control">
    <table class="table" id="categorias-table">
        <thead>
            <tr>
                <th>Action</th>
                <th>Nombre</th>
        <th>Habilitado</th>

            </tr>
        </thead>
        <tbody id="myTable">
        @foreach($categorias as $categorias)
            <tr>
                <td width="120">
                    {!! Form::open(['route' => ['categorias.destroy', $categorias->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categorias.show', [$categorias->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('categorias.edit', [$categorias->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                <td>{{ $categorias->nombre }}</td>
            <td>{{ $categorias->habilitado }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
