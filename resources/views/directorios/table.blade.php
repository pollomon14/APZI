<div class="table-responsive">
    <table class="table" id="directorios-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Id Categoria</th>
        <th>Id Subcategoria</th>
        <th>Direccion</th>
        <th>Responsable</th>
        <th>Domicilio</th>
        <th>Descripcion</th>
        <th>Ubicacion</th>
        <th>Id Horario</th>
        <th>Tipo De Plan</th>
        <th>Telefono</th>
        <th>Whatsapp</th>
        <th>Facebook</th>
        <th>Instagram</th>
        <th>Linkedin</th>
        <th>Pagina</th>
        <th>Correo</th>
        <th>Catalogo</th>
        <th>Video</th>
        <th>Imagen1</th>
        <th>Imagen2</th>
        <th>Imagen3</th>
        <th>Imagen4</th>
        <th>Imagen5</th>
        <th>Imagen6</th>
        <th>Imagen7</th>
        <th>Imagen8</th>
        <th>Imagen9</th>
        <th>Imagen10</th>
        <th>Id Evento</th>
        <th>Logo</th>
        <th>Habilitado</th>
        <th>Visitas</th>
        <th>Cant Visitas</th>
        <th>Palabras Clave</th>
        <th>Id Municipio</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($directorios as $directorio)
            <tr>
                <td>{{ $directorio->nombre }}</td>
            <td>{{ $directorio->id_categoria }}</td>
            <td>{{ $directorio->id_subcategoria }}</td>
            <td>{{ $directorio->direccion }}</td>
            <td>{{ $directorio->responsable }}</td>
            <td>{{ $directorio->domicilio }}</td>
            <td>{{ $directorio->descripcion }}</td>
            <td>{{ $directorio->ubicacion }}</td>
            <td>{{ $directorio->id_horario }}</td>
            <td>{{ $directorio->tipo_de_plan }}</td>
            <td>{{ $directorio->telefono }}</td>
            <td>{{ $directorio->whatsapp }}</td>
            <td>{{ $directorio->facebook }}</td>
            <td>{{ $directorio->instagram }}</td>
            <td>{{ $directorio->linkedin }}</td>
            <td>{{ $directorio->pagina }}</td>
            <td>{{ $directorio->correo }}</td>
            <td>{{ $directorio->catalogo }}</td>
            <td>{{ $directorio->video }}</td>
            <td>{{ $directorio->imagen1 }}</td>
            <td>{{ $directorio->imagen2 }}</td>
            <td>{{ $directorio->imagen3 }}</td>
            <td>{{ $directorio->imagen4 }}</td>
            <td>{{ $directorio->imagen5 }}</td>
            <td>{{ $directorio->imagen6 }}</td>
            <td>{{ $directorio->imagen7 }}</td>
            <td>{{ $directorio->imagen8 }}</td>
            <td>{{ $directorio->imagen9 }}</td>
            <td>{{ $directorio->imagen10 }}</td>
            <td>{{ $directorio->id_evento }}</td>
            <td>{{ $directorio->logo }}</td>
            <td>{{ $directorio->habilitado }}</td>
            <td>{{ $directorio->visitas }}</td>
            <td>{{ $directorio->cant_visitas }}</td>
            <td>{{ $directorio->palabras_clave }}</td>
            <td>{{ $directorio->id_municipio }}</td>
            <td>{{ $directorio->fecha_inicio }}</td>
            <td>{{ $directorio->fecha_fin }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['directorios.destroy', $directorio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('directorios.show', [$directorio->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('directorios.edit', [$directorio->id]) }}" class='btn btn-default btn-xs'>
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
