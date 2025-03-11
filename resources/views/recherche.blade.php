<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de services - Eventzone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Eventzone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="acceuil">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Connexion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container mt-4">
        <h2 class="text-center">Tous vos services</h2>

        <!-- Filtres -->
        <div class="row mb-4">
            <div class="col-md-4">
                <select id="filter-category" class="form-select">
                    <option value="">catégories</option>
                    <option value="salle d'evenements">Salles</option>
                    <option value="traiteur">Traiteur</option>
                    <option value="photographie">Photographie</option>
                    <option value="animation">Animation</option>
                    <option value="tente">Tentes</option>
                    <option value="chaise">Chaises</option>
                </select>
            </div>
            <div class="col-md-4">
                <select id="filter-location" class="form-select">
                    <option value="">localisations</option>
                    <option value="akwa">Akwa</option>
                    <option value="bali">Bali</option>
                    <option value="bepanda">Bepanda</option>
                    <option value="deido">Deido</option>
                    <option value="bonaberi">Bonaberi</option>
                    <option value="bonapriso">Bonapriso</option>
                    <option value="bonamoussadi">Bonamoussadi</option>
                    <option value="makepe">Makepe</option>
                    <option value="bonanjo">Bonanjo</option>
                    <option value="logpom">logpom</option>
                </select>
            </div>
        </div>

        <!-- Liste des prestataires -->
        <div class="row" id="service-list">
            <div class="col-md-4 mb-4 service-card" data-category="musique" data-location="paris">
                <div class="card">
                    <img src="musicien.jpg" class="card-img-top" alt="Musicien">
                    <div class="card-body">
                        <h5 class="card-title">Groupe de Musique</h5>
                        <p class="card-text">Ambiance garantie pour vos événements.</p>
                        <button class="btn btn-primary">Voir plus</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 service-card" data-category="traiteur" data-location="lyon">
                <div class="card">
                    <img src="traiteur.jpg" class="card-img-top" alt="Traiteur">
                    <div class="card-body">
                        <h5 class="card-title">Traiteur Gourmet</h5>
                        <p class="card-text">Des plats délicieux pour toutes vos occasions.</p>
                        <button class="btn btn-primary">Voir plus</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 service-card" data-category="traiteur" data-location="lyon">
                <div class="card">
                    <img src="traiteur.jpg" class="card-img-top" alt="Traiteur">
                    <div class="card-body">
                        <h5 class="card-title">Traiteur Gourmet</h5>
                        <p class="card-text">Des plats délicieux pour toutes vos occasions.</p>
                        <button class="btn btn-primary">Voir plus</button>
                    </div>
                </div>
            </div>

            <div class="row" id="service-list">
            <div class="col-md-4 mb-4 service-card" data-category="traiteur" data-location="lyon">
                <div class="card">
                    <img src="traiteur.jpg" class="card-img-top" alt="Traiteur">
                    <div class="card-body">
                        <h5 class="card-title">Traiteur Gourmet</h5>
                        <p class="card-text">Des plats délicieux pour toutes vos occasions.</p>
                        <button class="btn btn-primary">Voir plus</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 service-card" data-category="traiteur" data-location="lyon">
                <div class="card">
                    <img src="traiteur.jpg" class="card-img-top" alt="Traiteur">
                    <div class="card-body">
                        <h5 class="card-title">Traiteur Gourmet</h5>
                        <p class="card-text">Des plats délicieux pour toutes vos occasions.</p>
                        <button class="btn btn-primary">Voir plus</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 service-card" data-category="photographie" data-location="marseille">
                <div class="card">
                    <img src="photographe.jpg" class="card-img-top" alt="Photographe">
                    <div class="card-body">
                        <h5 class="card-title">Photographe Pro</h5>
                        <p class="card-text">Immortalisez vos souvenirs avec des clichés professionnels.</p>
                        <button class="btn btn-primary">Voir plus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">

  document.addEventListener("DOMContentLoaded", function() {
        let categoryFilter = document.getElementById("filter-category");
        let locationFilter = document.getElementById("filter-location");
        let serviceCards = document.querySelectorAll(".service-card");

        function filterServices() {
            let selectedCategory = categoryFilter.value;
            let selectedLocation = locationFilter.value;

            serviceCards.forEach(card => {
                let category = card.getAttribute("data-category");
                let location = card.getAttribute("data-location");

                let categoryMatch = selectedCategory === "" || category === selectedCategory;
                let locationMatch = selectedLocation === "" || location === selectedLocation;

                if (categoryMatch && locationMatch) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        }

        categoryFilter.addEventListener("change", filterServices);
        locationFilter.addEventListener("change", filterServices); });
    </script>
</body>
</html>
