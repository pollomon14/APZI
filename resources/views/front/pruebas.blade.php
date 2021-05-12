


    {!! Form::open(['route' => 'busquedas']) !!}
            @csrf
            <h5 class="font-weight-light">Busqueda
            </h5>
            <br>
            <input id="id-field" type="text" name="busqueda" placeholder="buscar" minlength="3" required>
            <br><br>
            <button class="btn-danger" type="submit">Buscar</button>

            <br>
            <br>
    {!! Form::close() !!}



