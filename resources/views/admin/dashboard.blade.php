<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin</title>
    <!-- Liens CSS de Bootstrap et des icônes -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Style CSS personnalisé -->
    <style>
        /* Style général */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #343a40 !important;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .navbar-toggler-icon {
            background-color: #ffffff !important;
        }
        /* Style du tableau de bord */
        .dashboard {
            margin-top: 80px;
        }
        .dashboard h2 {
            color: #343a40;
            margin-bottom: 30px;
            font-weight: bold;
        }
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #343a40;
            font-weight: bold;
        }
        .card-text {
            color: #6c757d;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        /* Effet d'ombre sur les boutons */
        .btn-shadow {
            transition: box-shadow 0.3s ease;
        }
        .btn-shadow:hover {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="#">Tableau de bord Admin</a>
        <!-- Bouton de navigation pour les appareils mobiles -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu de navigation -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-box"></i> Moutons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i>Commandes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user-cog"></i> Gérer mon compte</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Contenu principal -->
    <main role="main" class="container dashboard">
        <h2>Bienvenue sur votre tableau de bord admin</h2>
        <div class="row">
            <!-- Carte pour les produits -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Produits</h5>
                        <p class="card-text">Découvrez nos derniers produits.</p>
                        <a href="{{ route('products.index') }}" class="btn btn-primary btn-shadow">Voir les produits</a>
                    </div>
                </div>
            </div>
            <!-- Carte pour les commandes -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Commandes</h5>
                        <p class="card-text">Consultez l'historique de vos commandes.</p>
                        <a href="#" class="btn btn-primary btn-shadow">Voir mes commandes</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carte pour la gestion du compte -->
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Gérer mon compte</h5>
                <p class="card-text">Modifiez vos informations personnelles et préférences.</p>
                <a href="#" class="btn btn-primary btn-shadow">Gérer mon compte</a>
            </div>
        </div>
    </main>
    <!-- Liens JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
