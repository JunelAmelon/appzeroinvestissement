<?php

namespace App\Http\Controllers;

use app;
use App\Http\Controllers\Controller;
use App\Models\Franchise;
use App\Models\IncubatorProject;
use App\Models\Marketplacebusiness;
use App\Models\MarketplacebusinessModel;
use App\Models\Marketplacedepot;
use App\Models\Siteapp;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function  showfaq()
    {
        if (Auth::check()) {
            return view('client.faq');
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
            'files' => 'required|file',

        ]);


        $validatedData['user_id'] = Auth::id();

        try {
            // Gestion du téléversement de fichier
            if ($request->hasFile('files')) {
                // Créez un nom de fichier unique
                $filename = time() . '_' . $request->file('files')->getClientOriginalName();

                // Essayez de déplacer le fichier
                $filePath = $request->file('files')->move(public_path('build/assets/files'), $filename);

                // Vérifiez si le fichier a bien été déplacé
                if (!$filePath) {
                    return back()->with('error', 'Échec de l\'enregistrement du fichier dans le dossier public/build/assets/files.');
                }

                // Enregistrez le chemin du fichier dans les données validées
                $validatedData['files'] = 'build/assets/files/' . $filename;
            }

            // Enregistrement dans la base de données
            Siteapp::create($validatedData);

            return redirect()->route('siteapp')->with('success', 'Détails du projet enregistrés avec succès. Vous pouvez retourner sur la <a href="' . url('/welcome') . '">page d\'accueil</a> en cliquant ici.');
        } catch (Exception $e) {
            // Capture et affiche toute erreur
            return back()->with('error', 'Erreur : ' . $e->getMessage());
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
            'project_name' => 'required|string|max:255',
            'character_comparison' => 'required|string|max:255',
            'project_description' => 'required|string',
            'business_age' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'sucess_product' => 'required|string|max:255',
            'proudest_achievement' => 'required|string',
            'customer_count' => 'required|string|max:255',
            'current_revenue' => 'required|string|max:255',
            'scalability_score' => 'required|integer',
            'franchise_motivation' => 'required|string',
            'excitement' => 'required|string',
            'current_locations' => 'required|string',
            'franchise_target' => 'required|string',
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
            'files' => 'required|file'
        ]);

        $validatedData['user_id'] = Auth::id();

        try {
            if ($request->hasFile('files')) {
                // Créez un nom de fichier unique
                $filename = time() . '_' . $request->file('files')->getClientOriginalName();

                // Déplacez le fichier vers le dossier souhaité
                $filePath = $request->file('files')->move(public_path('build/assets/files'), $filename);

                // Assurez-vous que le fichier a bien été déplacé et enregistrez le chemin dans $validatedData
                if ($filePath) {
                    $validatedData['files'] = 'build/assets/files/' . $filename;
                } else {
                    return back()->with('error', 'Échec de l\'enregistrement du fichier.');
                }
            }

            Franchise::create($validatedData);
            return redirect()->route('franchise')->with('success', 'Détails du projet enregistrés avec succès. Vous pouvez retourner sur la <a href="' . url('/welcome') . '">page d\'accueil</a> en cliquant ici.');
        } catch (Exception $e) {
            return redirect()->route('franchise')->with('error', 'Erreur lors de l\'enregistrement: ' . $e->getMessage());
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
            'business_name' => 'required|string',
            'business_attraction' => 'required|string',
            'animal_comparison' => 'required|string',
            'conviction_level' => 'required|string',
            'enthusiasm_reason' => 'required|string',
            'entrepreneur_reason' => 'required|string',
            'specific_motivation' => 'required|string',
            'approach_keywords' => 'required|string',
            'success_factors' => 'required|string',
            'financing_planned' => 'required|string',
            'financing_method' => 'required|string',
            'max_budget' => 'required|string',
            'interest_in_financing_option' => 'required|string',
            'first_action' => 'required|string',
            'marketing_strategy' => 'required|string',
            'main_objective' => 'required|string',
            'initial_ad_budget' => 'required|string',
            'business_boost_area' => 'required|string',
            'training_needed' => 'required|string',
            'preferred_training_method' => 'required|string',
            'skills_to_develop' => 'required|string',
            'expected_support' => 'required|string',
            'weekly_hours' => 'required|string',
            'profit_timeline' => 'required|string',
            'growth_plan' => 'required|string',
            'mentor_questions' => 'required|string',
            'superpower' => 'required|string',
            'book_title' => 'required|string',
            'five_year_action' => 'required|string',
            'files' => 'required|file',
        ]);

        $validatedData['user_id'] = Auth::id();

        try {
            if ($request->hasFile('files')) {
                // Créez un nom de fichier unique
                $filename = time() . '_' . $request->file('files')->getClientOriginalName();

                // Déplacez le fichier vers le dossier souhaité
                $filePath = $request->file('files')->move(public_path('build/assets/files'), $filename);

                // Assurez-vous que le fichier a bien été déplacé et enregistrez le chemin dans $validatedData
                if ($filePath) {
                    $validatedData['files'] = 'build/assets/files/' . $filename;
                } else {
                    return back()->with('error', 'Échec de l\'enregistrement du fichier.');
                }
            }

            MarketplaceBusiness::create($validatedData);
            return redirect()->route('marketplace')->with('success', 'Vos réponses ont été enregistrées avec succès !');
        } catch (Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            return redirect()->route('marketplace')->with('error', 'Erreur : ' . $e->getMessage());
        }
    }

    public function getStatistics()
    {
        // Comptage des projets soumis (total)
        $franchiseSubmitted = Franchise::count();
        $siteappSubmitted = Siteapp::count();
        $marketplaceSubmitted = Marketplacebusiness::count();
        $incubatoreSubmitted = IncubatorProject::count();
        // Nombre total de projets soumis
        $totalSubmitted = $franchiseSubmitted + $siteappSubmitted + $marketplaceSubmitted + $incubatoreSubmitted;

        // Comptage des projets en attente
        $franchisePending = Franchise::where('status', 'en attente')->count();
        $siteappPending = Siteapp::where('status', 'en attente')->count();
        $marketplacePending = Marketplacebusiness::where('status', 'en attente')->count();
        $incubatorPending = IncubatorProject::where('status', 'en attente')->count();

        // Comptage des projets validés
        $franchiseValid = Franchise::where('status', 'validé')->count();
        $siteappValid = Siteapp::where('status', 'validé')->count();
        $marketplaceValid = Marketplacebusiness::where('status', 'validé')->count();
        $incubatorValid = IncubatorProject::where('status', 'validé')->count();
        // Comptage des projets rejetés
        $franchiseRejected = Franchise::where('status', 'rejeté')->count();
        $siteappRejected = Siteapp::where('status', 'rejeté')->count();
        $marketplaceRejected = Marketplacebusiness::where('status', 'rejeté')->count();
        $incubatoreRejected = IncubatorProject::where('status', 'rejeté')->count();
        // Nombre total de projets validés et rejetés
        $totalValid = $franchiseValid + $siteappValid + $marketplaceValid +  $incubatorValid;
        $totalRejected = $franchiseRejected + $siteappRejected + $marketplaceRejected +  $incubatoreRejected;

        // Retour des données au format JSON
        return response()->json([
            'pending' => $franchisePending + $siteappPending + $marketplacePending +  $incubatorPending, // Nombre de projets en attente
            'submitted' => $totalSubmitted, // Total projets soumis
            'valid' => $totalValid,
            'rejected' => $totalRejected,
        ]);
    }

    public function index()
    {
        if (Auth::check()) {
            // Récupérer tous les projets de chaque modèle
            $franchises = Franchise::select('id', 'project_name as nom', 'project_description as description', 'status')->get()->map(function ($item) {
                $item->type = 'Franchise';
                return $item;
            });
            $incubator = IncubatorProject::select('id', 'project_name as nom', 'project_description as description', 'status')->get()->map(function ($item) {
                $item->type = 'IncubatorProject';
                return $item;
            });
            $marketplaces = Marketplacebusiness::select('id', 'business_name as nom', 'specific_motivation as description', 'status')->get()->map(function ($item) {
                $item->type = 'Marketplace';
                return $item;
            });

            $siteapps = Siteapp::select('id', 'name as nom', 'description', 'status')->get()->map(function ($item) {
                $item->type = 'Siteapp';
                return $item;
            });

            $marketplacesd = Marketplacedepot::select('id', 'project_name as nom', 'mission', 'status')->get()->map(function ($item) {
                $item->type = 'Marketplaced';
                return $item;
            });

            // Fusionner tous les projets
            $projects = $franchises->merge($marketplaces)->merge($siteapps)->merge($incubator)->merge($marketplacesd);

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
            'target_amount' => 'required|string',
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
            'initial_budget' => 'required|string|min:0',
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
            'files' => 'required|file'
        ]);

        // Ajouter l'ID de l'utilisateur
        $validatedData['user_id'] = Auth::id();

        try {
            if ($request->hasFile('files')) {
                // Créez un nom de fichier unique
                $filename = time() . '_' . $request->file('files')->getClientOriginalName();

                // Déplacez le fichier vers le dossier souhaité
                $filePath = $request->file('files')->move(public_path('build/assets/files'), $filename);

                // Assurez-vous que le fichier a bien été déplacé et enregistrez le chemin dans $validatedData
                if ($filePath) {
                    $validatedData['files'] = 'build/assets/files/' . $filename;
                } else {
                    return back()->with('error', 'Échec de l\'enregistrement du fichier.');
                }
            }

            // Créer un nouvel enregistrement dans la base de données
            IncubatorProject::create($validatedData);
            return redirect()->route('incubator')->with('success', 'Détails du projet enregistrés avec succès. Vous pouvez retourner sur la <a href="' . url('/welcome') . '">page d\'accueil</a> en cliquant ici.');
        } catch (Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            return redirect()->route('incubator')->with('error', 'Erreur : ' . $e->getMessage());
        }
    }

    public function showmarketplacebusiness()
    {
        if (Auth::check()) {
            return view('client.marketplace-depot');
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }
    public function regmarketplacebusiness(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'elevator_pitch' => 'required',
            'dish_comparison' => 'required|string|max:255',
            'mission' => 'required',
            'industry_sector' => 'required|string|max:255',
            'success_factors' => 'required',
            'scalability_score' => 'required|string|max:255',
            'current_or_target_customers' => 'required|string|max:255',
            'annual_revenue' => 'required|string|max:255',
            'unicorn_magic' => 'required',
            'key_features' => 'required',
            'requires_specific_skills' => 'required|string|max:255',
            'tools_in_place' => 'required',
            'has_existing_team' => 'required|string|max:255',
            'unique_selling_points' => 'required',
            'selling_price' => 'required|string|max:255',
            'purchase_includes' => 'required',
            'advertising_slogan' => 'required|string|max:255',
            'provides_training' => 'required|string|max:255',
            'partners_and_suppliers' => 'required',
            'business_summary' => 'required|string|max:255',
            'elon_pitch' => 'required',
            'next_project' => 'required',
            'files' => 'required|file',
        ]);

        // Ajouter l'ID de l'utilisateur
        $validated['user_id'] = Auth::id();

        try {
            if ($request->hasFile('files')) {
                // Créez un nom de fichier unique
                $filename = time() . '_' . $request->file('files')->getClientOriginalName();

                // Déplacez le fichier vers le dossier souhaité
                $filePath = $request->file('files')->move(public_path('build/assets/files'), $filename);

                // Assurez-vous que le fichier a bien été déplacé et enregistrez le chemin dans $validatedData
                if ($filePath) {
                    $validated['files'] = 'build/assets/files/' . $filename;
                } else {
                    return back()->with('error', 'Échec de l\'enregistrement du fichier.');
                }
            }

            // Créer un nouvel enregistrement dans la base de données
            Marketplacedepot::create($validated);
            return redirect()->route('marketplacebusiness')->with('success', 'Détails du projet enregistrés avec succès. Vous pouvez retourner sur la <a href="' . url('/welcome') . '">page d\'accueil</a> en cliquant ici.');
        } catch (Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            return redirect()->route('marketplacebusiness')->with('error', 'Erreur : ' . $e->getMessage());
        }
    }

    public function showpolitique()
    {
        if (Auth::check()) {
            return view('client.politique');
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
