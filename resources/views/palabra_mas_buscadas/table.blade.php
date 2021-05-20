<div class="table-responsive">
    <table class="table" id="palabraMasBuscadas-table">
        <thead>
            <tr>
                <th>Palabra</th>
        <th>Contador</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($palabraMasBuscadas as $palabraMasBuscada)
            <tr>
                <td>{{ $palabraMasBuscada->palabra }}</td>
            <td>{{ $palabraMasBuscada->contador }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['palabraMasBuscadas.destroy', $palabraMasBuscada->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('palabraMasBuscadas.show', [$palabraMasBuscada->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('palabraMasBuscadas.edit', [$palabraMasBuscada->id]) }}" class='btn btn-default btn-xs'>
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
