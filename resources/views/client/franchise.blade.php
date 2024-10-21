<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Détails de la Franchise</title>
</head>

<body class="bg-gray-100">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Ajouter Détails de la Franchise</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('franchise.save') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="business_name" class="form-label">Nom de l'Entreprise</label>
                                <input type="text" class="form-control" id="business_name" name="business_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="character_comparison" class="form-label">Comparaison de Caractère</label>
                                <input type="text" class="form-control" id="character_comparison" name="character_comparison" required>
                            </div>
                            <div class="mb-3">
                                <label for="activity_description" class="form-label">Description de l'Activité</label>
                                <textarea class="form-control" id="activity_description" name="activity_description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="business_age" class="form-label">Âge de l'Entreprise</label>
                                <input type="text" class="form-control" id="business_age" name="business_age" required>
                            </div>
                            <div class="mb-3">
                                <label for="sector" class="form-label">Secteur</label>
                                <input type="text" class="form-control" id="sector" name="sector" required>
                            </div>
                            <div class="mb-3">
                                <label for="key_products" class="form-label">Produits Clés</label>
                                <textarea class="form-control" id="key_products" name="key_products" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="proudest_achievement" class="form-label">Plus Grande Fierté</label>
                                <textarea class="form-control" id="proudest_achievement" name="proudest_achievement" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="customer_count" class="form-label">Nombre de Clients</label>
                                <input type="text" class="form-control" id="customer_count" name="customer_count" required>
                            </div>
                            <div class="mb-3">
                                <label for="current_revenue" class="form-label">Revenu Actuel</label>
                                <input type="text" class="form-control" id="current_revenue" name="current_revenue" required>
                            </div>
                            <div class="mb-3">
                                <label for="scalability_score" class="form-label">Score de Scalabilité</label>
                                <input type="number" class="form-control" id="scalability_score" name="scalability_score" required>
                            </div>
                            <div class="mb-3">
                                <label for="franchise_motivation" class="form-label">Motivation pour la Franchise</label>
                                <textarea class="form-control" id="franchise_motivation" name="franchise_motivation" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="current_locations" class="form-label">Localisations Actuelles</label>
                                <textarea class="form-control" id="current_locations" name="current_locations" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="franchise_target" class="form-label">Cible de Franchise</label>
                                <input type="number" class="form-control" id="franchise_target" name="franchise_target" required>
                            </div>
                            <div class="mb-3">
                                <label for="franchise_reproducibility" class="form-label">Reproductibilité de la Franchise</label>
                                <textarea class="form-control" id="franchise_reproducibility" name="franchise_reproducibility" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="key_resources" class="form-label">Ressources Clés</label>
                                <textarea class="form-control" id="key_resources" name="key_resources" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="sector_growth" class="form-label">Croissance du Secteur</label>
                                <textarea class="form-control" id="sector_growth" name="sector_growth" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="market_study" class="form-label">Étude de Marché</label>
                                <textarea class="form-control" id="market_study" name="market_study" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="company_values" class="form-label">Valeurs de l'Entreprise</label>
                                <textarea class="form-control" id="company_values" name="company_values" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="franchisee_requirements" class="form-label">Exigences du Franchiseur</label>
                                <textarea class="form-control" id="franchisee_requirements" name="franchisee_requirements" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="competitors" class="form-label">Concurrents</label>
                                <textarea class="form-control" id="competitors" name="competitors" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="location_data" class="form-label">Données de Localisation</label>
                                <textarea class="form-control" id="location_data" name="location_data" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="franchisee_training" class="form-label">Formation des Franchiseurs</label>
                                <textarea class="form-control" id="franchisee_training" name="franchisee_training" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tools" class="form-label">Outils</label>
                                <textarea class="form-control" id="tools" name="tools" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="business_song" class="form-label">Chanson de l'Entreprise</label>
                                <input type="text" class="form-control" id="business_song" name="business_song" required>
                            </div>
                            <div class="mb-3">
                                <label for="success_plan" class="form-label">Plan de Réussite</label>
                                <textarea class="form-control" id="success_plan" name="success_plan" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Statut</label>
                                <input type="text" class="form-control" id="status" name="status" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
