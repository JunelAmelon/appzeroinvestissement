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
}
