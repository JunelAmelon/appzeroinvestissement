<?php

namespace App\Http\Controllers;

use app;
use Exception;
use App\Models\Siteapp;
use App\Models\Franchise;
use Illuminate\Http\Request;
use App\Models\FranchiseDetail;
use App\Models\Marketplacebusiness;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Projectdetailsmarketplacebusiness;

class ClientController extends Controller
{
    //
     public function showWelcome()
    {
        // Retourner la vue située dans resources/views/client/welcome.blade.php
        return view('client.welcome');
    }

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
            Siteapp::create($validatedData);
            return redirect()->route('siteapp')->with('success', 'Détails du projet enregistrés avec succès.');
        }catch(Exception $e){
            return redirect()->route('siteapp')->with('error', 'Erreur. '.$e);
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
            'character_comparison' => 'required|string|max:255',
            'activity_description' => 'required|string',
            'business_age' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'key_products' => 'required|string',
            'proudest_achievement' => 'required|string',
            'customer_count' => 'required|string|max:255',
            'current_revenue' => 'required|string|max:255',
            'scalability_score' => 'required|integer',
            'franchise_motivation' => 'required|string',
            'current_locations' => 'required|string',
            'franchise_target' => 'required|integer',
            'franchise_reproducibility' => 'required|string',
            'key_resources' => 'required|string',
            'sector_growth' => 'required|string',
            'market_study' => 'required|string',
            'company_values' => 'required|string',
            'franchisee_requirements' => 'required|string',
            'competitors' => 'required|string',
            'location_data' => 'required|string',
            'franchisee_training' => 'required|string',
            'tools' => 'required|string',
            'business_song' => 'required|string|max:255',
            'success_plan' => 'required|string',
            'status' => 'required|string|max:255',
        ]);

        $validatedData['user_id'] = Auth::id();

        try{
            Franchise::create($validatedData);
            return redirect()->route('franchise')->with('success', 'Détails de la franchise enregistrés avec succès.');
        }catch(Exception $e){
            return redirect()->route('franchise')->with('error', 'Erreur. '.$e);
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
            Marketplacebusiness::create($validatedData);
            return redirect()->route('marketplace')->with('success', 'Détails du projet enregistrés avec succès.');
        }catch(Exception $e){
            return redirect()->route('marketplace')->with('error', 'Erreur. '.$e);
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
    // Récupérer tous les projets de chaque modèle
    $franchises = Franchise::select('id', 'business_name as nom', 'activity_description as description', 'status')->get()->map(function($item) {
        $item->type = 'Franchise';
        return $item;
    });

    $marketplaces = Marketplacebusiness::select('id', 'business_name as nom', 'business_motivation as description', 'status')->get()->map(function($item) {
        $item->type = 'Marketplace';
        return $item;
    });

    $siteapps = Siteapp::select('id', 'name as nom', 'description', 'status')->get()->map(function($item) {
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
}

}
