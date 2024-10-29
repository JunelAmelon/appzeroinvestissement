<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marketplacebusiness extends Model
{
    use HasFactory;

    protected $fillable = [
'user_id',
        'business_name',
        'animal_comparison',
        'conviction_level',
        'enthusiasm_reason',
        'entrepreneur_reason',
        'specific_motivation',
        'approach_keywords',
        'success_factors',
        'financing_planned',
        'financing_method',
        'max_budget',
        'interest_in_financing_option',
        'first_action',
        'marketing_strategy',
        'main_objective',
        'initial_ad_budget',
        'business_boost_area',
        'training_needed',
        'preferred_training_method',
        'skills_to_develop',
        'expected_support',
        'weekly_hours',
        'profit_timeline',
        'growth_plan',
        'mentor_questions',
        'superpower',
        'book_title',
        'five_year_action',
        'status',
        'files',
    ];
}
