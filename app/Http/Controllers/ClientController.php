<?php

namespace App\Http\Controllers;

use app;
use Exception;
use App\Models\Siteapp;
use App\Models\Franchise;
use Illuminate\Http\Request;
use App\Models\FranchiseDetail;
use App\Models\IncubatorProject;
use App\Models\Marketplacebusiness;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Projectdetailsmarketplacebusiness;

class ClientController extends Controller
{
    //
    public function showWelcome()
    {
        if (Auth::check()) {
            return view('client.welcome');
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }

    public function showsiteapp()
    {
        if (Auth::check()) {
            return view('client.siteapp');
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }

    public function regsiteapp(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'animal' => 'required|string|max:255',
            'problem' => 'required|string',
            'main_feature' => 'required|string|max:255',
            'why_good' => 'required|string',
            'idea_origin' => 'required|string',
            'competition' => 'required|string',
            'excitement' => 'required|string',
            'fallback_plan' => 'required|string',
            'revenue_model' => 'required|string',
            'target_customers' => 'required|string',
            'target_incomes' => 'required|string',
            'target_customers_ideal' => 'required|string',
            'social_platform' => 'required|string|max:255',
            'motivation' => 'required|string',
            'availability' => 'required|string|max:255',
            'funding_status' => 'required|string|max:255',
            'project_pitch' => 'required|string',
            'dominant_color' => 'required|string|max:255',
            'design_style' => 'required|string',
            'example_style' => 'required|string',
            'graphic_elements' => 'required|boolean',
            'support_type' => 'required|string|max:255',
            'platforms' => 'required|string|max:255',
            'tech_requirements' => 'required|string',
            'contractor_power' => 'required|string',
            'famous_entrepreneur' => 'required|string',
            'worldwide_success' => 'required|string',
            'leisure' => 'required|string',
        ]);

        $validatedData['user_id'] = Auth::id();

        try {
            Siteapp::create($validatedData);
            return redirect()->route('siteapp')->with('success', 'Détails du projet enregistrés avec succès.');
        } catch (Exception $e) {
            return redirect()->route('siteapp')->with('error', 'Erreur. ' . $e);
        }
    }

    public function showfranchise()
    {
        if (Auth::check()) {
            return view('client.franchise');
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }

    public function regfranchise(Request $request)
    {
        $validatedData = $request->validate([
            'business_name' => 'required|string|max:255',
            'character_comparison' => 'required|string|max:255',
            'activity_description' => 'required|string',
            'business_age' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'sucess_product' => 'required|string|max:255',
            'key_products' => 'required|string',
            'proudest_achievement' => 'required|string',
            'customer_count' => 'required|string|max:255',
            'current_revenue' => 'required|string|max:255',
            'scalability_score' => 'required|integer',
            'franchise_motivation' => 'required|string',
            'excitement' => 'required|string',
            'current_locations' => 'required|string',
            'franchise_target' => 'required|integer',
            'franchise_reproducibility' => 'required|string',
            'key_resources' => 'required|string',
            'sector_growth' => 'required|string',
            'market_study' => 'required|string',
            'company_values' => 'required|string',
            'business_currency' => 'required|string|max:255',
            'franchisee_requirements' => 'required|string',
            'franchisee_search' => 'required|string',
            'competitors' => 'required|string',
            'analyse' => 'required|string',
            'role' => 'required|string',
            'location_data' => 'required|string',
            'franchisee_training' => 'required|string',
            'tools' => 'required|string',
            'business_song' => 'required|string|max:255',
            'imaginary' => 'required|string|max:255',
            'success_plan' => 'required|string',
        ]);

        $validatedData['user_id'] = Auth::id();

        try {
            Franchise::create($validatedData);
            return redirect()->route('franchise')->with('success', 'Détails de la franchise enregistrés avec succès.');
        } catch (Exception $e) {
            return redirect()->route('franchise')->with('error', 'Erreur. ' . $e);
        }
    }

    public function showmarketplace()
    {
        if (Auth::check()) {
            return view('client.marketplace');
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
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
        ]);


        $validatedData['user_id'] = Auth::id();
        try {
            Marketplacebusiness::create($validatedData);
            return redirect()->route('marketplace')->with('success', 'Détails du projet enregistrés avec succès.');
        } catch (Exception $e) {
            return redirect()->route('marketplace')->with('error', 'Erreur. ' . $e);
        }
    }

    public function getStatistics()
    {
        // Comptage des projets soumis (total)
        $franchiseSubmitted = Franchise::count();
        $siteappSubmitted = Siteapp::count();
        $marketplaceSubmitted = Marketplacebusiness::count();

        // Nombre total de projets soumis
        $totalSubmitted = $franchiseSubmitted + $siteappSubmitted + $marketplaceSubmitted;

        // Comptage des projets en attente
        $franchisePending = Franchise::where('status', 'en attente')->count();
        $siteappPending = Siteapp::where('status', 'en attente')->count();
        $marketplacePending = Marketplacebusiness::where('status', 'en attente')->count();

        // Comptage des projets validés
        $franchiseValid = Franchise::where('status', 'validé')->count();
        $siteappValid = Siteapp::where('status', 'validé')->count();
        $marketplaceValid = Marketplacebusiness::where('status', 'validé')->count();

        // Comptage des projets rejetés
        $franchiseRejected = Franchise::where('status', 'rejeté')->count();
        $siteappRejected = Siteapp::where('status', 'rejeté')->count();
        $marketplaceRejected = Marketplacebusiness::where('status', 'rejeté')->count();

        // Nombre total de projets validés et rejetés
        $totalValid = $franchiseValid + $siteappValid + $marketplaceValid;
        $totalRejected = $franchiseRejected + $siteappRejected + $marketplaceRejected;

        // Retour des données au format JSON
        return response()->json([
            'pending' => $franchisePending + $siteappPending + $marketplacePending, // Nombre de projets en attente
            'submitted' => $totalSubmitted, // Total projets soumis
            'valid' => $totalValid,
            'rejected' => $totalRejected
        ]);
    }


    public function index()
    {
        if (Auth::check()) {
            // Récupérer tous les projets de chaque modèle
            $franchises = Franchise::select('id', 'business_name as nom', 'activity_description as description', 'status')->get()->map(function ($item) {
                $item->type = 'Franchise';
                return $item;
            });

            $marketplaces = Marketplacebusiness::select('id', 'business_name as nom', 'business_motivation as description', 'status')->get()->map(function ($item) {
                $item->type = 'Marketplace';
                return $item;
            });

            $siteapps = Siteapp::select('id', 'name as nom', 'description', 'status')->get()->map(function ($item) {
                $item->type = 'Siteapp';
                return $item;
            });

            // Fusionner tous les projets
            $projects = $franchises->merge($marketplaces)->merge($siteapps);

            // Vérification de la fusion
            if ($projects->isEmpty()) {
                // Optionnel : si aucun projet n'est trouvé
                session()->flash('info', 'Aucun projet trouvé.');
            }
            // dd($projects);

            return view('client.welcome', compact('projects'));
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }

    public function showincubator()
    {
        if (Auth::check()) {
            return view('client.incubator');
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }

    public function regincubator(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_description' => 'required|string',
            'project_stage' => 'required|string',
            'project_mission' => 'required|string',
            'project_movie' => 'required|string',
            'origin_motivation' => 'required|string',
            'passion_aspect' => 'required|string',
            'strength' => 'required|string',
            'obstacle' => 'required|string',
            'objective' => 'required|string',
            'time_to_profit' => 'required|string',
            'strategy' => 'required|string',
            'target_amount' => 'nullable|string',
            'growth_vision' => 'required|string',
            'why' => 'required|string',
            'sector' => 'required|string',
            'market_target' => 'required|string',
            'unique_features' => 'required|string',
            'growth_limitations' => 'required|string',
            'market_analysis' => 'required|string',
            'competitors' => 'required|string',
            'clients' => 'required|string',
            'market_strategy' => 'required|string',
            'funds_raised' => 'required|string',
            'initial_budget' => 'nullable|numeric|min:0',
            'first_step_with_unlimited_funds' => 'required|string',
            'growth_needs' => 'required|string',
            'strategic_support' => 'required|string',
            'co_management' => 'required|string',
            'desired_connections' => 'required|string',
            'impact' => 'required|string',
            'core_values' => 'required|string',
            'value_translation' => 'required|string',
            'global_impact' => 'required|string',
            'cartoon_character' => 'required|string',
            'tv_synopsis' => 'required|string',
            'documentary_title' => 'required|string',
            'celebration_details' => 'required|string',
            'client_slogan' => 'required|string',
        ]);

        // Ajouter l'ID de l'utilisateur
        $validatedData['user_id'] = Auth::id();

        try {
            // Créer un nouvel enregistrement dans la base de données
            IncubatorProject::create($validatedData);
            return redirect()->route('incubator')->with('success', 'Votre projet a été enregistré avec succès!');
        } catch (\Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            return redirect()->route('incubator')->with('error', 'Erreur : ' . $e->getMessage());
        }
    }
}
