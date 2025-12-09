<?php

namespace App\Http\Controllers;

use app;
use Exception;
use App\Models\Siteapp;
use App\Models\Franchise;
use Illuminate\Http\Request;
use App\Models\FranchiseDetail;
use App\Models\Marketplacebusiness;
use App\Models\MarketplaceDepot;
use App\Models\MarketplaceAchat;
use App\Models\IncubateurZero;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectSubmitted;
use App\Models\Projectdetailsmarketplacebusiness;

class ClientController extends Controller
{
    public function showsiteapp()
    {
        return view('client.siteapp');
    }

    public function regsiteapp(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'animal' => 'required|string|max:255',
            'problem' => 'required|string',
            'main_feature' => 'required|string|max:255',
            'secondary_feature' => 'nullable|string|max:255',
            'why_good' => 'required|string',
            'idea_origin' => 'required|string',
            'competition' => 'required|string',
            'excitement' => 'required|string',
            'fallback_plan' => 'required|string',
            'revenue_model' => 'required|string',
            'target_customers' => 'required|string',
            'social_platform' => 'required|string|max:255',
            'availability' => 'required|string|max:255',
            'funding_status' => 'required|string|max:255',
            'project_pitch' => 'required|string',
            'dominant_color' => 'required|string|max:255',
            'design_style' => 'required|string',
            'graphic_elements' => 'required|boolean',
            'support_type' => 'required|string|max:255',
            'platforms' => 'required|string|max:255',
            'tech_requirements' => 'required|string',
            'status' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id();

        try{
            $project = Siteapp::create($validatedData);
            
            // Envoi de la notification par email
            try {
                Mail::to('admin@appzeroinvestissement.com')->send(
                    new ProjectSubmitted(
                        'Site Web / Application',
                        $validatedData['name'],
                        $validatedData['description'],
                        Auth::user()->name,
                        Auth::user()->email
                    )
                );
                
                return redirect()->route('siteapp')->with('success', 'Projet enregistré avec succès ! Email de notification envoyé à l\'administrateur.');
            } catch (\Exception $mailError) {
                return redirect()->route('siteapp')->with('warning', 'Projet enregistré mais l\'email de notification n\'a pas pu être envoyé : ' . $mailError->getMessage());
            }
            
        }catch(Exception $e){
            return redirect()->route('siteapp')->with('error', 'Erreur lors de l\'enregistrement du projet : '.$e->getMessage());
        }

    }

    public function showfranchise()
    {
        return view('client.franchise');
    }

    public function regfranchise(Request $request)
    {
        $validatedData = $request->validate([
            'business_name' => 'required|string|max:255',
            'name_reason' => 'nullable|string',
            'character_comparison' => 'required|string|max:255',
            'movie_character' => 'nullable|string',
            'activity_description' => 'required|string',
            'simple_description' => 'nullable|string',
            'business_age' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'key_products' => 'required|string',
            'key_products_list' => 'nullable|string',
            'proudest_achievement' => 'required|string',
            'customer_count' => 'required|string|max:255',
            'current_revenue' => 'required|string|max:255',
            'scalability_score' => 'required|integer',
            'franchise_motivation' => 'required|string',
            'franchise_why' => 'nullable|string',
            'excitement_reason' => 'nullable|string',
            'current_locations' => 'required|string',
            'multi_location' => 'nullable|string',
            'franchise_target' => 'required|integer',
            'franchise_count_3years' => 'nullable|string',
            'franchise_reproducibility' => 'required|string',
            'key_resources' => 'required|string',
            'sector_growth' => 'required|string',
            'market_study' => 'required|string',
            'company_values' => 'required|string',
            'company_motto' => 'nullable|string',
            'values_importance' => 'nullable|string',
            'franchisee_requirements' => 'required|string',
            'competitors' => 'required|string',
            'competitors_identified' => 'nullable|string',
            'location_data' => 'required|string',
            'location_analysis' => 'nullable|string',
            'need_help_analysis' => 'nullable|string',
            'management_role' => 'nullable|string',
            'franchisee_training' => 'required|string',
            'tools' => 'required|string',
            'franchisee_tools' => 'nullable|string',
            'business_song' => 'nullable|string',
            'success_plan' => 'required|string',
            'famous_franchise_lunch' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id();

        try{
            $franchise = Franchise::create($validatedData);
            
            // Envoi de la notification par email
            try {
                Mail::to('admin@appzeroinvestissement.com')->send(
                    new ProjectSubmitted(
                        'Franchise',
                        $validatedData['business_name'],
                        $validatedData['activity_description'],
                        Auth::user()->name,
                        Auth::user()->email
                    )
                );
                
                return redirect()->route('franchise')->with('success', 'Projet enregistré avec succès ! Email de notification envoyé à l\'administrateur.');
            } catch (\Exception $mailError) {
                return redirect()->route('franchise')->with('warning', 'Projet enregistré mais l\'email de notification n\'a pas pu être envoyé : ' . $mailError->getMessage());
            }
            
        }catch(Exception $e){
            return redirect()->route('franchise')->with('error', 'Erreur lors de l\'enregistrement du projet : '.$e->getMessage());
        }

    }

    public function showmarketplace()
    {
        return view('client.marketplace');
    }

    public function regmarketplace(Request $request)
    {
        $validatedData = $request->validate([
            'business_name' => 'required|string|max:255',
            'attraction_reason' => 'required|string',
            'business_animal' => 'required|string|max:255',
            'conviction_score' => 'required|integer',
            'business_motivation' => 'required|string',
            'entrepreneurial_approach' => 'required|string',
            'personal_strengths' => 'required|string',
            'financing_plan' => 'required|string',
            'financing_help' => 'required|boolean',
            'budget' => 'required|decimal:0,2',
            'post_acquisition_action' => 'required|string',
            'business_strategy' => 'required|string',
            'status' => 'required|string|max:255',
        ]);


        $validatedData['user_id'] = Auth::id();
        try{
            $marketplace = Marketplacebusiness::create($validatedData);
            
            // Envoi de la notification par email
            try {
                Mail::to('admin@appzeroinvestissement.com')->send(
                    new ProjectSubmitted(
                        'Marketplace Business',
                        $validatedData['business_name'],
                        $validatedData['attraction_reason'],
                        Auth::user()->name,
                        Auth::user()->email
                    )
                );
                
                return redirect()->route('marketplace')->with('success', 'Projet enregistré avec succès ! Email de notification envoyé à l\'administrateur.');
            } catch (\Exception $mailError) {
                return redirect()->route('marketplace')->with('warning', 'Projet enregistré mais l\'email de notification n\'a pas pu être envoyé : ' . $mailError->getMessage());
            }
            
        }catch(Exception $e){
            return redirect()->route('marketplace')->with('error', 'Erreur lors de l\'enregistrement du projet : '.$e->getMessage());
        }

    }

    public function showDashboard()
    {
        $userId = Auth::id();
        
        // Fonction helper pour normaliser les statuts
        $normalizeStatus = function($status) {
            switch(strtolower($status)) {
                case 'valide':
                case 'validé':
                    return 'Validé';
                case 'rejete':
                case 'rejeté':
                    return 'Rejeté';
                case 'en_attente':
                case 'en attente':
                default:
                    return 'En attente';
            }
        };
        
        // Récupérer tous les projets de l'utilisateur
        $siteapps = Siteapp::where('user_id', $userId)->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'description' => $item->description,
                'type' => 'Web/App',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
            ];
        });

        $franchises = Franchise::where('user_id', $userId)->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->business_name,
                'description' => $item->activity_description,
                'type' => 'Franchise',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
            ];
        });

        $marketplaceDepots = MarketplaceDepot::where('user_id', $userId)->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->business_name,
                'description' => $item->elevator_pitch ?? $item->business_mission,
                'type' => 'Marketplace Dépôt',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
            ];
        });

        $marketplaceAchats = MarketplaceAchat::where('user_id', $userId)->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->chosen_business ?? 'Achat Business',
                'description' => $item->business_description ?? $item->attraction_reason,
                'type' => 'Marketplace Achat',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
            ];
        });

        $incubateurZeros = IncubateurZero::where('user_id', $userId)->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->project_name,
                'description' => $item->project_description ?? $item->main_mission,
                'type' => 'Incubateur Zéro',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
            ];
        });

        $marketplaces = Marketplacebusiness::where('user_id', $userId)->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->business_name,
                'description' => $item->attraction_reason,
                'type' => 'Marketplace',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
            ];
        });

        // Fusionner tous les projets
        $allProjects = $siteapps->concat($franchises)->concat($marketplaceDepots)
                                ->concat($marketplaceAchats)->concat($incubateurZeros)
                                ->concat($marketplaces)->sortByDesc('created_at');

        // Calculer les statistiques sur tous les projets
        $totalProjects = $allProjects->count();
        $approvedProjects = $allProjects->where('status', 'Validé')->count();
        $rejectedProjects = $allProjects->where('status', 'Rejeté')->count();

        // Statistiques par semaine du mois (4 dernières semaines)
        $weeklyStats = [];
        $today = now();
        
        for ($i = 0; $i < 4; $i++) {
            $weekStart = $today->copy()->subWeeks(3 - $i)->startOfWeek();
            $weekEnd = $today->copy()->subWeeks(3 - $i)->endOfWeek();
            
            $count = $allProjects->filter(function($project) use ($weekStart, $weekEnd) {
                return $project['created_at']->between($weekStart, $weekEnd);
            })->count();
            
            $weeklyStats[] = [
                'label' => 'S' . ($i + 1),
                'count' => $count,
                'period' => $weekStart->format('d/m') . '-' . $weekEnd->format('d/m')
            ];
        }

        // Pagination manuelle : 5 éléments par page
        $currentPage = request()->get('page', 1);
        $perPage = 5;
        $projects = $allProjects->forPage($currentPage, $perPage);
        $totalPages = ceil($totalProjects / $perPage);

        return view('dashboard', compact('projects', 'totalProjects', 'approvedProjects', 'rejectedProjects', 'weeklyStats', 'currentPage', 'totalPages'));
    }

    // ===== ESPACE ADMIN =====
    
    public function showAdmin()
    {
        // Fonction helper pour normaliser les statuts
        $normalizeStatus = function($status) {
            switch(strtolower($status)) {
                case 'valide':
                case 'validé':
                    return 'Validé';
                case 'rejete':
                case 'rejeté':
                    return 'Rejeté';
                case 'en_attente':
                case 'en attente':
                default:
                    return 'En attente';
            }
        };
        
        // Récupérer TOUS les projets de TOUS les utilisateurs
        $siteapps = Siteapp::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'description' => $item->description,
                'type' => 'Web/App',
                'type_key' => 'siteapp',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        $franchises = Franchise::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->business_name,
                'description' => $item->activity_description,
                'type' => 'Franchise',
                'type_key' => 'franchise',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        $marketplaceDepots = MarketplaceDepot::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->business_name,
                'description' => $item->elevator_pitch ?? $item->business_mission,
                'type' => 'Marketplace Dépôt',
                'type_key' => 'marketplace_depot',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        $marketplaceAchats = MarketplaceAchat::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->chosen_business ?? 'Achat Business',
                'description' => $item->business_description ?? $item->attraction_reason,
                'type' => 'Marketplace Achat',
                'type_key' => 'marketplace_achat',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        $incubateurZeros = IncubateurZero::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->project_name,
                'description' => $item->project_description ?? $item->main_mission,
                'type' => 'Incubateur Zéro',
                'type_key' => 'incubateur_zero',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        $marketplaces = Marketplacebusiness::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->business_name,
                'description' => $item->attraction_reason,
                'type' => 'Marketplace',
                'type_key' => 'marketplace',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        // Fusionner tous les projets
        $allProjects = $siteapps->concat($franchises)->concat($marketplaceDepots)
                                ->concat($marketplaceAchats)->concat($incubateurZeros)
                                ->concat($marketplaces)->sortByDesc('created_at');

        // Statistiques globales sur tous les projets
        $totalProjects = $allProjects->count();
        $pendingProjects = $allProjects->where('status', 'En attente')->count();
        $approvedProjects = $allProjects->where('status', 'Validé')->count();
        $rejectedProjects = $allProjects->where('status', 'Rejeté')->count();

        // Pagination manuelle : 5 éléments par page
        $currentPage = request()->get('page', 1);
        $perPage = 5;
        $projects = $allProjects->forPage($currentPage, $perPage);
        $totalPages = ceil($totalProjects / $perPage);

        return view('admin', compact('projects', 'totalProjects', 'pendingProjects', 'approvedProjects', 'rejectedProjects', 'currentPage', 'totalPages'));
    }

    public function manageProjects(Request $request)
    {
        // Fonction helper pour normaliser les statuts
        $normalizeStatus = function($status) {
            switch(strtolower($status)) {
                case 'valide':
                case 'validé':
                    return 'Validé';
                case 'rejete':
                case 'rejeté':
                    return 'Rejeté';
                case 'en_attente':
                case 'en attente':
                default:
                    return 'En attente';
            }
        };
        
        // Récupérer tous les projets
        $siteapps = Siteapp::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'description' => $item->description,
                'type' => 'Web/App',
                'type_key' => 'siteapp',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        $franchises = Franchise::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->business_name,
                'description' => $item->activity_description,
                'type' => 'Franchise',
                'type_key' => 'franchise',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        $marketplaceDepots = MarketplaceDepot::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->business_name,
                'description' => $item->elevator_pitch ?? $item->business_mission,
                'type' => 'Marketplace Dépôt',
                'type_key' => 'marketplace_depot',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        $marketplaceAchats = MarketplaceAchat::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->chosen_business ?? 'Achat Business',
                'description' => $item->business_description ?? $item->attraction_reason,
                'type' => 'Marketplace Achat',
                'type_key' => 'marketplace_achat',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        $incubateurZeros = IncubateurZero::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->project_name,
                'description' => $item->project_description ?? $item->main_mission,
                'type' => 'Incubateur Zéro',
                'type_key' => 'incubateur_zero',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        $marketplaces = Marketplacebusiness::with('user')->get()->map(function($item) use ($normalizeStatus) {
            return [
                'id' => $item->id,
                'name' => $item->business_name,
                'description' => $item->attraction_reason,
                'type' => 'Marketplace',
                'type_key' => 'marketplace',
                'status' => $normalizeStatus($item->status),
                'created_at' => $item->created_at,
                'user' => $item->user,
            ];
        });

        // Fusionner tous les projets
        $allProjects = $siteapps->concat($franchises)->concat($marketplaceDepots)
                                ->concat($marketplaceAchats)->concat($incubateurZeros)
                                ->concat($marketplaces)->sortByDesc('created_at');

        // Statistiques globales
        $totalProjects = $allProjects->count();
        $pendingProjects = $allProjects->where('status', 'En attente')->count();
        $approvedProjects = $allProjects->where('status', 'Validé')->count();
        $rejectedProjects = $allProjects->where('status', 'Rejeté')->count();

        // Filtrer par statut si nécessaire
        if ($request->has('status')) {
            $allProjects = $allProjects->where('status', $request->status);
        }

        $filteredCount = $allProjects->count();

        // Pagination : 5 éléments par page
        $currentPage = request()->get('page', 1);
        $perPage = 5;
        $projects = $allProjects->forPage($currentPage, $perPage);
        $totalPages = ceil($filteredCount / $perPage);

        return view('admin-projects', compact('projects', 'totalProjects', 'pendingProjects', 'approvedProjects', 'rejectedProjects', 'currentPage', 'totalPages', 'filteredCount'));
    }

    public function updateProjectStatus(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|in:siteapp,franchise,marketplace,marketplace_depot,marketplace_achat,incubateur_zero',
            'id' => 'required|integer',
            'status' => 'required|string|in:En attente,Validé,Rejeté',
        ]);

        try {
            // Trouver le projet selon son type
            switch ($validatedData['type']) {
                case 'siteapp':
                    $project = Siteapp::findOrFail($validatedData['id']);
                    break;
                case 'franchise':
                    $project = Franchise::findOrFail($validatedData['id']);
                    break;
                case 'marketplace':
                    $project = Marketplacebusiness::findOrFail($validatedData['id']);
                    break;
                case 'marketplace_depot':
                    $project = MarketplaceDepot::findOrFail($validatedData['id']);
                    break;
                case 'marketplace_achat':
                    $project = MarketplaceAchat::findOrFail($validatedData['id']);
                    break;
                case 'incubateur_zero':
                    $project = IncubateurZero::findOrFail($validatedData['id']);
                    break;
            }

            // Mettre à jour le statut
            $project->status = $validatedData['status'];
            $project->save();

            return redirect()->route('admin')->with('success', 'Statut du projet mis à jour avec succès.');
        } catch (Exception $e) {
            return redirect()->route('admin')->with('error', 'Erreur lors de la mise à jour du statut.');
        }
    }

    public function showProject($type, $id)
    {
        try {
            switch ($type) {
                case 'siteapp':
                    $project = Siteapp::with('user')->findOrFail($id);
                    $projectData = [
                        'id' => $project->id,
                        'type' => 'Web/App',
                        'type_key' => 'siteapp',
                        'name' => $project->name,
                        'description' => $project->description,
                        'status' => $project->status,
                        'created_at' => $project->created_at,
                        'user' => $project->user,
                        'details' => [
                            'Animal représentatif' => $project->animal,
                            'Problème résolu' => $project->problem,
                            'Fonctionnalité principale' => $project->main_feature,
                            'Fonctionnalité secondaire' => $project->secondary_feature,
                            'Fonctionnalité phare' => $project->features,
                            'Pourquoi cela fonctionne' => $project->why_good,
                            'Origine de idée' => $project->idea_origin,
                            'Concurrence' => $project->competition,
                            'Niveau enthousiasme' => $project->excitement,
                            'Plan de secours' => $project->fallback_plan,
                            'Modèle de revenus' => $project->revenue_model,
                            'Clients cibles' => $project->target_customers,
                            'Taille audience cible' => $project->target_audience_size,
                            'Projection CA 2 ans' => $project->revenue_2years,
                            'Engagement à 100%' => $project->full_engagement,
                            'Plateforme sociale' => $project->social_platform,
                            'Disponibilité' => $project->availability,
                            'Statut de financement' => $project->funding_status,
                            'Pitch du projet' => $project->project_pitch,
                            'Couleur dominante' => $project->dominant_color,
                            'Style de design' => $project->design_style,
                            'Éléments graphiques' => $project->graphic_elements ? 'Oui' : 'Non',
                            'Type de support' => $project->support_type,
                            'Plateformes' => $project->platforms,
                            'Exigences techniques' => $project->tech_requirements,
                            'Superpouvoir entrepreneur' => $project->entrepreneur_superpower,
                            'Hobbies/Passions' => $project->hobbies,
                            'Modèle entrepreneuriat' => $project->role_model,
                            'Célébration du succès' => $project->success_celebration,
                        ]
                    ];
                    break;

                case 'franchise':
                    $project = Franchise::with('user')->findOrFail($id);
                    $projectData = [
                        'id' => $project->id,
                        'type' => 'Franchise',
                        'type_key' => 'franchise',
                        'name' => $project->business_name,
                        'description' => $project->activity_description,
                        'status' => $project->status,
                        'created_at' => $project->created_at,
                        'user' => $project->user,
                        'details' => [
                            'Nom du business' => $project->business_name,
                            'Raison du nom' => $project->name_reason,
                            'Personnage de comparaison' => $project->character_comparison,
                            'Pourquoi ce personnage' => $project->movie_character,
                            'Âge de entreprise' => $project->business_age,
                            'Secteur' => $project->sector,
                            'Produits clés' => $project->key_products,
                            'Liste produits clés' => $project->key_products_list,
                            'Plus grande fierté' => $project->proudest_achievement,
                            'Nombre de clients' => $project->customer_count,
                            'Revenus actuels' => $project->current_revenue . ' €',
                            'Score de scalabilité' => $project->scalability_score . '/10',
                            'Motivation franchise' => $project->franchise_motivation,
                            'Pourquoi franchiser' => $project->franchise_why,
                            'Ce qui excite' => $project->excitement_reason,
                            'Emplacements actuels' => $project->current_locations,
                            'Multi-localisation' => $project->multi_location,
                            'Objectif franchises' => $project->franchise_target . ' franchises',
                            'Objectif 3 ans' => $project->franchise_count_3years,
                            'Reproductibilité' => $project->franchise_reproducibility,
                            'Ressources clés' => $project->key_resources,
                            'Croissance du secteur' => $project->sector_growth,
                            'Étude de marché' => $project->market_study,
                            'Valeurs de entreprise' => $project->company_values,
                            'Devise de entreprise' => $project->company_motto,
                            'Importance des valeurs' => $project->values_importance,
                            'Exigences franchisé' => $project->franchisee_requirements,
                            'Concurrents' => $project->competitors,
                            'Concurrents identifiés' => $project->competitors_identified,
                            'Données de localisation' => $project->location_data,
                            'Analyse localisation' => $project->location_analysis,
                            'Besoin aide analyse' => $project->need_help_analysis,
                            'Rôle gestion' => $project->management_role,
                            'Formation franchisé' => $project->franchisee_training,
                            'Outils fournis' => $project->tools,
                            'Outils franchisés' => $project->franchisee_tools,
                            'Chanson de entreprise' => $project->business_song,
                            'Plan de succès' => $project->success_plan,
                            'Déjeuner franchise célèbre' => $project->famous_franchise_lunch,
                        ]
                    ];
                    break;

                case 'marketplace':
                    $project = Marketplacebusiness::with('user')->findOrFail($id);
                    $projectData = [
                        'id' => $project->id,
                        'type' => 'Marketplace Business',
                        'type_key' => 'marketplace',
                        'name' => $project->business_name,
                        'description' => $project->attraction_reason,
                        'status' => $project->status,
                        'created_at' => $project->created_at,
                        'user' => $project->user,
                        'details' => [
                            'Raison attraction' => $project->attraction_reason,
                            'Animal représentatif' => $project->business_animal,
                            'Score de conviction' => $project->conviction_score . '/10',
                            'Motivation business' => $project->business_motivation,
                            'Approche entrepreneuriale' => $project->entrepreneurial_approach,
                            'Forces personnelles' => $project->personal_strengths,
                            'Plan de financement' => $project->financing_plan,
                            'Aide au financement' => $project->financing_help ? 'Oui' : 'Non',
                            'Budget' => number_format($project->budget, 2, ',', ' ') . ' €',
                            'Action post-acquisition' => $project->post_acquisition_action,
                            'Stratégie business' => $project->business_strategy,
                        ]
                    ];
                    break;

                case 'marketplace_depot':
                    $project = MarketplaceDepot::with('user')->findOrFail($id);
                    $projectData = [
                        'id' => $project->id,
                        'type' => 'Marketplace Dépôt',
                        'type_key' => 'marketplace_depot',
                        'name' => $project->business_name,
                        'description' => $project->elevator_pitch,
                        'status' => $project->status,
                        'created_at' => $project->created_at,
                        'user' => $project->user,
                        'details' => [
                            'Nom du business' => $project->business_name,
                            'Raison du nom' => $project->name_reason,
                            'Si projet était un plat' => $project->business_dish,
                            'Pourquoi ce plat' => $project->dish_reason,
                            'Pitch' => $project->elevator_pitch,
                            'Mission' => $project->business_mission,
                            'Secteur' => $project->activity_sector,
                            'Pourquoi ce secteur' => $project->sector_choice_reason,
                            'Facteurs de succès' => $project->success_factors,
                            'Score scalabilité' => $project->scalability_score . '/10',
                            'Clients actuels' => $project->current_customers,
                            'CA annuel' => $project->annual_revenue,
                            'Caractéristiques uniques' => $project->key_features,
                            'Si business était licorne' => $project->unique_characteristic,
                            'Compétences requises' => $project->required_skills,
                            'Outils en place' => $project->tools_in_place,
                            'Équipe' => $project->team_status,
                            'Valeur unique' => $project->unique_value,
                            'Slogan pub télé' => $project->tv_slogan,
                            'Business en 3 mots' => $project->business_in_3_words,
                            'Prix de vente' => $project->selling_price,
                            'Inclus dans achat' => $project->included_in_purchase,
                            'Support acheteur' => $project->buyer_support,
                            'Partenaires disponibles' => $project->partners_available,
                            'Pitch à Elon Musk' => $project->elon_musk_pitch,
                            'Prochain projet après vente' => $project->next_project,
                        ]
                    ];
                    break;

                case 'marketplace_achat':
                    $project = MarketplaceAchat::with('user')->findOrFail($id);
                    $projectData = [
                        'id' => $project->id,
                        'type' => 'Marketplace Achat',
                        'type_key' => 'marketplace_achat',
                        'name' => $project->entrepreneur_name ?? 'Achat Business',
                        'description' => $project->business_type,
                        'status' => $project->status,
                        'created_at' => $project->created_at,
                        'user' => $project->user,
                        'details' => [
                            'Nom entrepreneur' => $project->entrepreneur_name,
                            'Business choisi' => $project->chosen_business,
                            'Description business' => $project->business_description,
                            'Type de business' => $project->business_type,
                            'Raison attraction' => $project->attraction_reason,
                            'Animal représentatif' => $project->business_animal,
                            'Pourquoi cet animal' => $project->animal_reason,
                            'Score conviction (1-10)' => $project->conviction_score,
                            'Raison enthousiasme' => $project->enthusiasm_reason,
                            'Secteur souhaité' => $project->desired_sector,
                            'Raison choix secteur' => $project->sector_choice_reason,
                            'Motivation principale' => $project->primary_motivation,
                            'Raison entrepreneuriat' => $project->entrepreneurship_reason,
                            'Motivation business' => $project->business_motivation,
                            'Approche en 3 mots' => $project->entrepreneurial_approach_3words,
                            'Facteurs de succès' => $project->success_factors,
                            'Expérience passée' => $project->past_experience,
                            'Financement planifié' => $project->financing_planned,
                            'Accès financement' => $project->financing_access,
                            'Budget disponible' => $project->available_budget,
                            'Budget maximum' => $project->max_budget,
                            'Origine financement' => $project->financing_origin,
                            'Apport personnel' => $project->personal_contribution,
                            'Besoin prêt' => $project->loan_needed ? 'Oui' : 'Non',
                            'Intérêt financement Zero' => $project->zero_financing_interest,
                            'Première action' => $project->first_action,
                            'Stratégie marketing' => $project->marketing_strategy,
                            'Objectif 12 mois' => $project->main_objective,
                            'Budget publicité initial' => $project->advertising_budget,
                            'Priorité boost' => $project->priority_boost,
                            'Stratégie croissance' => $project->growth_strategy,
                            'Délai lancement' => $project->launch_timeline,
                            'Formation nécessaire' => $project->training_needed,
                            'Méthode formation préférée' => $project->preferred_training_method,
                            'Compétences à développer' => $project->skills_to_develop,
                            'Qualités personnelles' => $project->personal_qualities,
                            'Niveau compétences' => $project->skill_level,
                            'Formation souhaitée' => $project->training_desired,
                            'Support attendu' => $project->expected_support,
                            'Temps hebdomadaire' => $project->weekly_time_commitment,
                            'Disponibilité' => $project->time_availability,
                            'Délai rentabilité' => $project->profitability_timeline,
                            'Plan croissance' => $project->growth_plan,
                            'Tolérance risque' => $project->risk_tolerance,
                            'Question au mentor' => $project->mentor_question,
                            'Superpouvoir du business' => $project->business_superpower,
                            'Titre du livre' => $project->book_title,
                            'Célébration succès' => $project->success_celebration,
                        ]
                    ];
                    break;

                case 'incubateur_zero':
                    $project = IncubateurZero::with('user')->findOrFail($id);
                    $projectData = [
                        'id' => $project->id,
                        'type' => 'Incubateur Zéro',
                        'type_key' => 'incubateur_zero',
                        'name' => $project->project_name,
                        'description' => $project->main_mission,
                        'status' => $project->status,
                        'created_at' => $project->created_at,
                        'user' => $project->user,
                        'details' => [
                            'Nom du projet' => $project->project_name,
                            'Raison du nom' => $project->name_reason,
                            'Description projet' => $project->project_description,
                            'Titre du film' => $project->movie_title,
                            'Pourquoi ce titre' => $project->movie_reason,
                            'Stade du projet' => $project->project_stage,
                            'Mission principale' => $project->main_mission,
                            'Origine de idée' => $project->idea_origin,
                            'Raison passion' => $project->passion_reason,
                            'Force du projet' => $project->project_strength,
                            'Plus grand obstacle' => $project->biggest_obstacle,
                            'Objectif 5 ans' => $project->five_year_goal,
                            'Objectif principal 5 ans' => $project->main_objective_5years,
                            'Stratégie' => $project->strategy,
                            'Cible levée de fonds' => $project->funding_target,
                            'Délai rentabilité' => $project->profitability_timeline,
                            'Montant levée de fonds' => $project->fundraising_amount,
                            'Croissance 12 mois' => $project->twelve_month_growth,
                            'Vision croissance 12 mois' => $project->growth_vision_12months,
                            'Problème résolu' => $project->problem_solved,
                            'Public cible' => $project->target_audience,
                            'Différenciateur' => $project->differentiator,
                            'Raison scalabilité' => $project->scalability_reason,
                            'Niveau innovation' => $project->innovation_level . '/10',
                            'Secteur projet' => $project->project_sector,
                            'Innovation secteur' => $project->sector_innovation,
                            'Marché cible' => $project->target_market,
                            'Caractéristiques uniques' => $project->unique_characteristics,
                            'Limitations croissance' => $project->growth_limitations,
                            'Concurrence' => $project->competition_level,
                            'Analyse marché effectuée' => $project->market_analysis_done,
                            'Concurrents principaux' => $project->main_competitors,
                            'A des clients' => $project->has_customers,
                            'Stratégie conquête marché' => $project->market_conquest_strategy,
                            'Secteur marché' => $project->market_sector,
                            'Taille marché' => $project->market_size,
                            'Modèle revenus' => $project->revenue_model,
                            'Projection CA 1 an' => $project->year_one_revenue,
                            'Fonds levés' => $project->funds_raised,
                            'Budget initial' => $project->initial_budget,
                            'Usage financement illimité' => $project->unlimited_funding_use,
                            'Coûts démarrage' => $project->startup_costs,
                            'Besoins croissance' => $project->growth_needs,
                            'Gestion financière' => $project->financial_management,
                            'Type support' => $project->support_type,
                            'Support stratégique nécessaire' => $project->strategic_support_needed,
                            'Ouvert co-gestion' => $project->co_management_open,
                            'Connexions désirées' => $project->desired_connections,
                            'Aide spécifique' => $project->specific_help,
                            'Impact positif' => $project->positive_impact,
                            'Impact espéré' => $project->expected_impact,
                            'Valeurs fondamentales' => $project->core_values,
                            'Valeurs en pratique' => $project->values_in_practice,
                            'Vision impact global' => $project->global_impact_vision,
                            'Public bénéficiaire' => $project->beneficiary_audience,
                            'Personnage dessin animé' => $project->cartoon_character,
                            'Synopsis série TV' => $project->tv_series_synopsis,
                            'Titre doc Netflix' => $project->netflix_doc_title,
                            'Fête célébration' => $project->success_party,
                            'Slogan projet' => $project->project_slogan,
                        ]
                    ];
                    break;

                default:
                    abort(404);
            }

            return view('project-details', compact('projectData'));

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Projet non trouvé.');
        }
    }

    // Marketplace Dépôt
    public function showMarketplaceDepot()
    {
        return view('client.marketplace-depot');
    }

    public function regMarketplaceDepot(Request $request)
    {
        $validatedData = $request->validate([
            'business_name' => 'required|string|max:255',
            'name_reason' => 'nullable|string',
            'elevator_pitch' => 'required|string',
            'business_dish' => 'nullable|string',
            'dish_reason' => 'nullable|string',
            'business_mission' => 'required|string',
            'activity_sector' => 'required|string',
            'sector_choice_reason' => 'nullable|string',
            'success_factors' => 'required|string',
            'scalability_score' => 'required|integer',
            'current_customers' => 'required|string',
            'annual_revenue' => 'required|string',
            'unique_characteristic' => 'nullable|string',
            'key_features' => 'required|string',
            'required_skills' => 'required|string',
            'tools_in_place' => 'required|string',
            'team_status' => 'required|string',
            'unique_value' => 'required|string',
            'selling_price' => 'required|string',
            'included_in_purchase' => 'required|string',
            'tv_slogan' => 'nullable|string',
            'buyer_support' => 'required|string',
            'partners_available' => 'required|string',
            'business_in_3_words' => 'nullable|string',
            'elon_musk_pitch' => 'nullable|string',
            'next_project' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id();

        try {
            $project = MarketplaceDepot::create($validatedData);
            
            try {
                Mail::to('admin@appzeroinvestissement.com')->send(
                    new ProjectSubmitted(
                        'Marketplace Dépôt',
                        $validatedData['business_name'],
                        $validatedData['elevator_pitch'],
                        Auth::user()->name,
                        Auth::user()->email
                    )
                );
                
                return redirect()->route('marketplace.depot')->with('success', 'Projet enregistré avec succès ! Email de notification envoyé à l\'administrateur.');
            } catch (\Exception $mailError) {
                return redirect()->route('marketplace.depot')->with('warning', 'Projet enregistré mais l\'email de notification n\'a pas pu être envoyé : ' . $mailError->getMessage());
            }
        } catch (Exception $e) {
            return redirect()->route('marketplace.depot')->with('error', 'Erreur lors de l\'enregistrement du projet : ' . $e->getMessage());
        }
    }

    // Marketplace Achat
    public function showMarketplaceAchat()
    {
        return view('client.marketplace-achat');
    }

    public function regMarketplaceAchat(Request $request)
    {
        $validatedData = $request->validate([
            'chosen_business' => 'required|string',
            'business_description' => 'nullable|string',
            'attraction_reason' => 'required|string',
            'business_animal' => 'nullable|string',
            'animal_reason' => 'nullable|string',
            'conviction_score' => 'required|integer',
            'enthusiasm_reason' => 'required|string',
            'entrepreneurship_reason' => 'required|string',
            'business_motivation' => 'required|string',
            'entrepreneurial_approach_3words' => 'nullable|string',
            'success_factors' => 'required|string',
            'financing_planned' => 'required|string',
            'financing_access' => 'nullable|string',
            'max_budget' => 'required|string',
            'zero_financing_interest' => 'required|string',
            'first_action' => 'required|string',
            'marketing_strategy' => 'required|string',
            'main_objective' => 'nullable|string',
            'advertising_budget' => 'required|string',
            'priority_boost' => 'required|string',
            'training_needed' => 'required|string',
            'preferred_training_method' => 'required|string',
            'skills_to_develop' => 'required|string',
            'expected_support' => 'required|string',
            'weekly_time_commitment' => 'required|string',
            'profitability_timeline' => 'required|string',
            'growth_plan' => 'required|string',
            'mentor_question' => 'nullable|string',
            'business_superpower' => 'nullable|string',
            'book_title' => 'nullable|string',
            'success_celebration' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id();

        try {
            $project = MarketplaceAchat::create($validatedData);
            
            try {
                Mail::to('admin@appzeroinvestissement.com')->send(
                    new ProjectSubmitted(
                        'Marketplace Achat',
                        $validatedData['chosen_business'],
                        $validatedData['business_description'] ?? 'Business clé en main',
                        Auth::user()->name,
                        Auth::user()->email
                    )
                );
                
                return redirect()->route('marketplace.achat')->with('success', 'Projet enregistré avec succès ! Email de notification envoyé à l\'administrateur.');
            } catch (\Exception $mailError) {
                return redirect()->route('marketplace.achat')->with('warning', 'Projet enregistré mais l\'email de notification n\'a pas pu être envoyé : ' . $mailError->getMessage());
            }
        } catch (Exception $e) {
            return redirect()->route('marketplace.achat')->with('error', 'Erreur lors de l\'enregistrement du projet : ' . $e->getMessage());
        }
    }

    // Incubateur Zéro
    public function showIncubateurZero()
    {
        return view('client.incubateur-zero');
    }

    public function regIncubateurZero(Request $request)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',
            'name_reason' => 'nullable|string',
            'project_description' => 'required|string',
            'project_stage' => 'required|string',
            'movie_title' => 'nullable|string',
            'movie_reason' => 'nullable|string',
            'main_mission' => 'required|string',
            'idea_origin' => 'required|string',
            'passion_reason' => 'required|string',
            'project_strength' => 'required|string',
            'biggest_obstacle' => 'nullable|string',
            'main_objective_5years' => 'required|string',
            'profitability_timeline' => 'required|string',
            'strategy' => 'required|string',
            'funding_target' => 'nullable|string',
            'growth_vision_12months' => 'required|string',
            'scalability_reason' => 'required|string',
            'project_sector' => 'required|string',
            'sector_innovation' => 'nullable|string',
            'target_market' => 'required|string',
            'unique_characteristics' => 'required|string',
            'growth_limitations' => 'nullable|string',
            'market_analysis_done' => 'required|string',
            'main_competitors' => 'nullable|string',
            'has_customers' => 'required|string',
            'market_conquest_strategy' => 'required|string',
            'funds_raised' => 'required|string',
            'initial_budget' => 'required|string',
            'unlimited_funding_use' => 'nullable|string',
            'growth_needs' => 'required|string',
            'strategic_support_needed' => 'required|string',
            'co_management_open' => 'required|string',
            'desired_connections' => 'required|string',
            'positive_impact' => 'required|string',
            'core_values' => 'required|string',
            'values_in_practice' => 'nullable|string',
            'global_impact_vision' => 'nullable|string',
            'cartoon_character' => 'nullable|string',
            'tv_series_synopsis' => 'nullable|string',
            'netflix_doc_title' => 'nullable|string',
            'success_party' => 'nullable|string',
            'project_slogan' => 'nullable|string',
            'status' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id();

        try {
            $project = IncubateurZero::create($validatedData);
            
            try {
                Mail::to('admin@appzeroinvestissement.com')->send(
                    new ProjectSubmitted(
                        'Incubateur Zéro',
                        $validatedData['project_name'],
                        $validatedData['project_description'],
                        Auth::user()->name,
                        Auth::user()->email
                    )
                );
                
                return redirect()->route('incubateur.zero')->with('success', 'Projet enregistré avec succès ! Email de notification envoyé à l\'administrateur.');
            } catch (\Exception $mailError) {
                return redirect()->route('incubateur.zero')->with('warning', 'Projet enregistré mais l\'email de notification n\'a pas pu être envoyé : ' . $mailError->getMessage());
            }
        } catch (Exception $e) {
            return redirect()->route('incubateur.zero')->with('error', 'Erreur lors de l\'enregistrement du projet : ' . $e->getMessage());
        }
    }
}


