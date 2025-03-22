

<h1>Welcome to your client dashboard, {{ auth()->user()->name }}!</h1>
<a href="{{ route('logout') }}">Logout</a>

@if(auth()->user()->role == 'client')
    <p>Bienvenue, client !</p>
@elseif(auth()->user()->role == 'prestataire')
    <p>Bienvenue, prestataire !</p>
@endif

