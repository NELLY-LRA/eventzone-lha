@if(auth()->user()->role == 'client')
    <p>Bienvenue, client !</p>
@elseif(auth()->user()->role == 'prestataire')
    <p>Bienvenue, prestataire !</p>
@endif
