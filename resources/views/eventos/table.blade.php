<div class="table-responsive">
    <table class="table" id="eventos-table">
        <thead>
            <tr>
                <th>Imagen</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Link</th>
        <th>Id Icono</th>
        <th>Texto Boton</th>
        <th>Id Municipio</th>
        <th>Habilitado</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Tipo</th>
        <th>Id Destacado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($eventos as $eventos)
            <tr>
                <td>{{ $eventos->imagen }}</td>
            <td>{{ $eventos->titulo }}</td>
            <td>{{ $eventos->descripcion }}</td>
            <td>{{ $eventos->link }}</td>
            <td>{{ $eventos->id_icono }}</td>
            <td>{{ $eventos->texto_boton }}</td>
            <td>{{ $eventos->id_municipio }}</td>
            <td>{{ $eventos->habilitado }}</td>
            <td>{{ $eventos->fecha_inicio }}</td>
            <td>{{ $eventos->fecha_fin }}</td>
            <td>{{ $eventos->tipo }}</td>
            <td>{{ $eventos->id_destacado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['eventos.destroy', $eventos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('eventos.show', [$eventos->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('eventos.edit', [$eventos->id]) }}" class='btn btn-default btn-xs'>
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
