    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-logo">🍳 Ricettario Digitale</a>
            <div class="nav-links">
                <a href="{{ route('index') }}">Tutte le Ricette</a>
                @guest
                <a class="nav-link" href="{{route ('register')}}">Registrati</a>
                <a class="nav-link" href="{{route ('login')}}">Login</a>
                @endguest
                @auth
                <a href="{{ route('create') }}" class="btn-add">+ Nuova Ricetta</a>
                
                <a href="{{ route('my-ricettario') }}" class="nav-link">
                    Ricettario di {{ auth()->user()->name }}
                </a>
                
                <form class="d-inline m-0 p-0" action="{{route ('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link text-white">Logout</button>
                </form>
                
                @endauth
            </div>
        </div>
    </nav>
    