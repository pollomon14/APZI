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







