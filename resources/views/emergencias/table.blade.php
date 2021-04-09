<div class="table-responsive">
    <table class="table" id="emergencias-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Id Icono</th>
        <th>Id Municipio</th>
        <th>Maps</th>
        <th>Tipo Servicio</th>
        <th>Html</th>
        <th>Id Evento</th>
        <th>Habilitado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($emergencias as $emergencias)
            <tr>
                <td>{{ $emergencias->nombre }}</td>
            <td>{{ $emergencias->direccion }}</td>
            <td>{{ $emergencias->telefono }}</td>
            <td>{{ $emergencias->id_icono }}</td>
            <td>{{ $emergencias->id_municipio }}</td>
            <td>{{ $emergencias->maps }}</td>
            <td>{{ $emergencias->tipo_servicio }}</td>
            <td>{{ $emergencias->html }}</td>
            <td>{{ $emergencias->id_evento }}</td>
            <td>{{ $emergencias->habilitado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['emergencias.destroy', $emergencias->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('emergencias.show', [$emergencias->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('emergencias.edit', [$emergencias->id]) }}" class='btn btn-default btn-xs'>
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
