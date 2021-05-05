<div class="table-responsive">
    <input id="myInput" type="text" placeholder="Search.." class="form-control">
    <table class="table" id="emergencias-table">
        <thead>
            <tr>
        <th>Action</th>
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

            </tr>
        </thead>
        <tbody id="myTable">
        @foreach($emergencias as $emergencia)
            <tr>
                <td width="120">
                    {!! Form::open(['route' => ['emergencias.destroy', $emergencia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('emergencias.show', [$emergencia->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('emergencias.edit', [$emergencia->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>

                <td>{{ $emergencia->nombre }}</td>
            <td>{{ $emergencia->direccion }}</td>
            <td>{{ $emergencia->telefono }}</td>
            <td>{{ $emergencia->iconos->nombre}}</td>
            <td>{{ $emergencia->municipios->nombre }}</td>
            <td>{{ $emergencia->maps }}</td>
            <td>{{ $emergencia->tipo_servicio }}</td>
            <td>{{ $emergencia->html }}</td>
            <td>{{ $emergencia->eventos->titulo }}</td>
            <td>{{ $emergencia->habilitado }}</td>

            </tr>
        @endforeach

        </tbody>
    </table>

</div>

