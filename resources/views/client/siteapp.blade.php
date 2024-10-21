<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Détails du Projet</title>
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
                        <h5 class="mb-0">Ajouter Détails du Projet</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('siteapp.save') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom du Projet</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="animal" class="form-label">Animal</label>
                                <input type="text" class="form-control" id="animal" name="animal" required>
                            </div>
                            <div class="mb-3">
                                <label for="problem" class="form-label">Problème</label>
                                <textarea class="form-control" id="problem" name="problem" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="main_feature" class="form-label">Caractéristique Principale</label>
                                <input type="text" class="form-control" id="main_feature" name="main_feature" required>
                            </div>
                            <div class="mb-3">
                                <label for="secondary_feature" class="form-label">Caractéristique Secondaire</label>
                                <input type="text" class="form-control" id="secondary_feature" name="secondary_feature">
                            </div>
                            <div class="mb-3">
                                <label for="why_good" class="form-label">Pourquoi c'est bon</label>
                                <textarea class="form-control" id="why_good" name="why_good" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="idea_origin" class="form-label">Origine de l'idée</label>
                                <textarea class="form-control" id="idea_origin" name="idea_origin" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="competition" class="form-label">Concurrence</label>
                                <textarea class="form-control" id="competition" name="competition" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="excitement" class="form-label">Excitation</label>
                                <textarea class="form-control" id="excitement" name="excitement" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="fallback_plan" class="form-label">Plan de Repli</label>
                                <textarea class="form-control" id="fallback_plan" name="fallback_plan" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="revenue_model" class="form-label">Modèle de Revenus</label>
                                <textarea class="form-control" id="revenue_model" name="revenue_model" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="target_customers" class="form-label">Clients Cibles</label>
                                <textarea class="form-control" id="target_customers" name="target_customers" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="social_platform" class="form-label">Plateforme Sociale</label>
                                <input type="text" class="form-control" id="social_platform" name="social_platform" required>
                            </div>
                            <div class="mb-3">
                                <label for="availability" class="form-label">Disponibilité</label>
                                <input type="text" class="form-control" id="availability" name="availability" required>
                            </div>
                            <div class="mb-3">
                                <label for="funding_status" class="form-label">Statut de Financement</label>
                                <input type="text" class="form-control" id="funding_status" name="funding_status" required>
                            </div>
                            <div class="mb-3">
                                <label for="project_pitch" class="form-label">Présentation du Projet</label>
                                <textarea class="form-control" id="project_pitch" name="project_pitch" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="dominant_color" class="form-label">Couleur Dominante</label>
                                <input type="text" class="form-control" id="dominant_color" name="dominant_color" required>
                            </div>
                            <div class="mb-3">
                                <label for="design_style" class="form-label">Style de Design</label>
                                <textarea class="form-control" id="design_style" name="design_style" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="graphic_elements" class="form-label">Éléments Graphiques</label>
                                <select class="form-select" id="graphic_elements" name="graphic_elements" required>
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="support_type" class="form-label">Type de Support</label>
                                <input type="text" class="form-control" id="support_type" name="support_type" required>
                            </div>
                            <div class="mb-3">
                                <label for="platforms" class="form-label">Plateformes</label>
                                <input type="text" class="form-control" id="platforms" name="platforms" required>
                            </div>
                            <div class="mb-3">
                                <label for="tech_requirements" class="form-label">Exigences Techniques</label>
                                <textarea class="form-control" id="tech_requirements" name="tech_requirements" required></textarea>
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
