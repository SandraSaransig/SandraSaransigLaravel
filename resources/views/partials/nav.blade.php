<img src="{{asset('images/logo.png')}}" alt="logo del equipo" class="logoNav">
<h2>Delta Rayo DoradoFC</h2>
<nav>
    <a href="{{route('index')}}">Inicio</a>
    <a href="{{route('players.index')}}">Jugadores</a>
    <a href="{{route('events.index')}}">Eventos</a>
    <a href="">Tienda</a>
    <a href="{{route('footerinfo.contact')}}">Contacto</a>
    <a href="{{route('general.where')}}">Donde estamos</a>

    @auth
    <a href="{{route('profile.show')}}">Perfil</a>
    <a href="{{route('logout')}}">Salir</a>

    @if (auth()->user()->isAdmin())
        <a href="{{route('players.create')}}">Añadir Jugador</a>
        <a href="{{route('events.create')}}">Añadir Evento</a>
        <a href="{{route('general.index ')}}">Mensajes</a>

    @endif
    @else
    <a href="{{route('login')}}">Login</a>
   @endauth

</nav>
