<li class="nav-item">
    <a href="{{ route('categorias.index') }}"
       class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
        <p>Categorias</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('emergencias.index') }}"
       class="nav-link {{ Request::is('emergencias*') ? 'active' : '' }}">
        <p>Emergencias</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('subcategorias.index') }}"
       class="nav-link {{ Request::is('subcategorias*') ? 'active' : '' }}">
        <p>Subcategorias</p>
    </a>
</li>







<li class="nav-item">
    <a href="{{ route('iconos.index') }}"
       class="nav-link {{ Request::is('iconos*') ? 'active' : '' }}">
        <p>Iconos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('eventos.index') }}"
       class="nav-link {{ Request::is('eventos*') ? 'active' : '' }}">
        <p>Eventos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('festivos.index') }}"
       class="nav-link {{ Request::is('festivos*') ? 'active' : '' }}">
        <p>Festivos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('horarios.index') }}"
       class="nav-link {{ Request::is('horarios*') ? 'active' : '' }}">
        <p>Horarios</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('municipios.index') }}"
       class="nav-link {{ Request::is('municipios*') ? 'active' : '' }}">
        <p>Municipios</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('transporteCargas.index') }}"
       class="nav-link {{ Request::is('transporteCargas*') ? 'active' : '' }}">
        <p>Transporte Cargas</p>
    </a>
</li>


