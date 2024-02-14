<img src="/images/logo.png" alt="logo del equipo" class="logoNav">
<h2>Delta Rayo DoradoFC</h2>
<nav>
    <a href="{{ route('index') }}">Inicio</a>
    <a href="{{ route('players.index') }}">Jugadores</a>
    <a href="{{ route('events.index') }}">Eventos</a>
    <a href="{{ route('general.index') }}">Tienda</a>
    <a href="{{ route('footerinfo.contact') }}">Contacto</a>
    <a href="{{ route('general.where') }}">Donde estamos</a>

    @auth
        {{-- Aparecera estas opciones cuando el usuario este logueado --}}
        {{-- Añadir el usuario, para si mostrar su informacion --}}
        {{-- <a href="{{ route('profile.show') }}">Perfil</a> --}}
        <a href="{{ route('logout') }}">Salir</a>

        {{-- Aparecera estas opciones cuando el usuario sea admin --}}
        @if (auth()->user()->isAdmin())
            <a href="{{ route('players.create') }}">Añadir Jugador</a>
            <a href="{{ route('events.create') }}">Añadir Evento</a>
            <a href="{{ route('messages.index') }}">Mensajes</a>
            <a href="{{ route('profile.index') }}">Cuentas</a>

        @endif
    @else
        <a href="{{ route('login') }}">Login</a>
    @endauth

</nav>
