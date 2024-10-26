<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;

class MarketplacebusinessModel extends Model
{
    //
   protected $fillable = [
        'user_id',
        'business_name',
        'business_description',
        'attraction_reason',
        'representative_animal',
        'animal_reason',
        'conviction_level',
        'entrepreneurial_approach',
        'success_factors',
        'has_financing_plan',
        'financing_access_plan',
        'max_budget',
        'interested_in_zeroinvestment',
        'first_action',
        'marketing_strategy',
        'main_goal_12_months',
        'initial_ad_budget',
        'boost_area',
        'needs_training',
        'preferred_training_mode',
        'desired_skills',
        'expected_follow_up',
        'weekly_time_commitment',
        'profitability_timeline',
        'has_growth_plan',
        'mentor_question',
        'superpower',
        'book_title',
        'first_success_action',
        'financial_report_path',
    ];

    /**
     * Définition de la relation avec le modèle User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
