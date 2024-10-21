<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Créer Détails du Projet</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-5">
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
        <h2 class="text-center mb-4">Créer Détails du Projet</h2>
        <form action="{{ route('marketplace.save') }}" method="POST" class="bg-white p-5 rounded shadow">
            @csrf
            <div class="mb-3">
                <label for="business_name" class="form-label">Nom de l'Entreprise</label>
                <input type="text" class="form-control" id="business_name" name="business_name" required>
            </div>
            <div class="mb-3">
                <label for="attraction_reason" class="form-label">Raison d'Attraction</label>
                <textarea class="form-control" id="attraction_reason" name="attraction_reason" required></textarea>
            </div>
            <div class="mb-3">
                <label for="business_animal" class="form-label">Animal de l'Entreprise</label>
                <input type="text" class="form-control" id="business_animal" name="business_animal" required>
            </div>
            <div class="mb-3">
                <label for="conviction_score" class="form-label">Score de Conviction</label>
                <input type="number" class="form-control" id="conviction_score" name="conviction_score" required>
            </div>
            <div class="mb-3">
                <label for="business_motivation" class="form-label">Motivation de l'Entreprise</label>
                <textarea class="form-control" id="business_motivation" name="business_motivation" required></textarea>
            </div>
            <div class="mb-3">
                <label for="entrepreneurial_approach" class="form-label">Approche Entrepreneuriale</label>
                <textarea class="form-control" id="entrepreneurial_approach" name="entrepreneurial_approach" required></textarea>
            </div>
            <div class="mb-3">
                <label for="personal_strengths" class="form-label">Forces Personnelles</label>
                <textarea class="form-control" id="personal_strengths" name="personal_strengths" required></textarea>
            </div>
            <div class="mb-3">
                <label for="financing_plan" class="form-label">Plan de Financement</label>
                <textarea class="form-control" id="financing_plan" name="financing_plan" required></textarea>
            </div>
            <div class="mb-3">
                <label for="financing_help" class="form-label">Aide au Financement</label>
                <select class="form-select" id="financing_help" name="financing_help" required>
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="budget" class="form-label">Budget</label>
                <input type="text" class="form-control" id="budget" name="budget" required>
            </div>
            <div class="mb-3">
                <label for="post_acquisition_action" class="form-label">Actions Post-Acquisition</label>
                <textarea class="form-control" id="post_acquisition_action" name="post_acquisition_action" required></textarea>
            </div>
            <div class="mb-3">
                <label for="business_strategy" class="form-label">Stratégie d'Entreprise</label>
                <textarea class="form-control" id="business_strategy" name="business_strategy" required></textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Statut</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
