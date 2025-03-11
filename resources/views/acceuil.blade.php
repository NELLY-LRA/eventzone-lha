<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventzone - Page d'accueil</title> <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        Personnalisation des couleurs / .btn-primary {
            background-color: #003366;/ Bleu roi / border-color: #FFD700;/ Or /
        }

        .btn-primary:hover {
            background-color: #ffd900dd;/ Or / border-color: #003366;/ Bleu roi /
        }

        .header,
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .map-container {
            height: 400px;/ Hauteur de la carte / background-color: #003366;/ Bleu roi
        }
    </style>
</head>

<body> <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center"> <img
                    src="img/ logo.jpeg" alt="Eventzone Logo"
                    height="50" width="150"> <!-- Logo -->
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="recherche">Recherche</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Inscription</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header> <!-- Section principale -->
    <section class="text-center py-5">
        <div class="container">
            <h1>Trouvez vos prestataires événementiels près de chez vous</h1>
            <p>Organisez vos événements facilement en réservant des services fiables en un clic</p> <!-- Champ de recherche -->
            <div class="mb-4"> <input type="text" class="form-control" placeholder="Recherchez des prestataires">
            </div> <!-- Bouton de recherche --> <a href="#" class="btn btn-primary">Rechercher</a>
        </div>
    </section> <!-- Carte géographique -->
    <section class="map-container"> <!-- Carte ici, par exemple avec Leaflet.js ou Google Maps -->
        <p>Carte des prestataires à venir</p>
    </section> <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2025 Eventzone | Contact | À propos</p>
        </div>
    </footer> <!-- Lien vers Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0A9fmqUlBX7h2Fkw7FjlOkTQJoVAhCvQoPp0Xt8Nz4z2JS2J" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0A9fmqUlBX7h2Fkw7FjlOkTQJoVAhCvQoPp0Xt8Nz4z2JS2J" crossorigin="anonymous">
    </script>
</body>

</html>
