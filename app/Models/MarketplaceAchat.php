<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarketplaceAchat extends Model
{
    use HasFactory;

    protected $table = 'marketplace_achat';

    protected $fillable = [
        'user_id',
        'chosen_business',
        'business_description',
        'attraction_reason',
        'business_animal',
        'animal_reason',
        'conviction_score',
        'enthusiasm_reason',
        'entrepreneurship_reason',
        'business_motivation',
        'entrepreneurial_approach_3words',
        'success_factors',
        'financing_planned',
        'financing_access',
        'max_budget',
        'zero_financing_interest',
        'first_action',
        'marketing_strategy',
        'main_objective',
        'advertising_budget',
        'priority_boost',
        'training_needed',
        'preferred_training_method',
        'skills_to_develop',
        'expected_support',
        'weekly_time_commitment',
        'profitability_timeline',
        'growth_plan',
        'mentor_question',
        'business_superpower',
        'book_title',
        'success_celebration',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
