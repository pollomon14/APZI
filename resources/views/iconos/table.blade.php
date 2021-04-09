<div class="table-responsive">
    <table class="table" id="iconos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Link</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($iconos as $iconos)
            <tr>
                <td>{{ $iconos->nombre }}</td>
            <td>{{ $iconos->link }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['iconos.destroy', $iconos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('iconos.show', [$iconos->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('iconos.edit', [$iconos->id]) }}" class='btn btn-default btn-xs'>
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
