<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand text-white" href="/">Examen</a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link {{ setActivo('home') }}" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link {{ setActivo('servicios') }}" href="{{ route('servicios') }}">Servicios</a></li>
            <li class="nav-item"><a class="nav-link {{ setActivo('proyectos') }}" href="{{ route('proyectos') }}">Proyectos</a></li>
            <li class="nav-item"><a class="nav-link {{ setActivo('clientes.index') }}" href="{{ route('clientes.index') }}">Clientes</a></li>
            <li class="nav-item"><a class="nav-link {{ setActivo('blog') }}" href="{{ route('blog') }}">Blog</a></li>
            <li class="nav-item"><a class="nav-link {{ setActivo('contacto') }}" href="{{ route('contacto') }}">Contacto</a></li>

            @guest
                <li class="nav-item"><a class="nav-link {{ setActivo('login') }}" href="{{ route('login') }}">Login</a></li>
            @endguest

            @auth
                <li class="nav-item d-flex align-items-center">
                    <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link p-0" style="color: #5a1e2e;">
                            Cerrar sesión
                        </button>
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</nav>
