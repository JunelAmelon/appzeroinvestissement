<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siteapp extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'animal',
        'problem',
        'main_feature',
        'why_good',
        'idea_origin',
        'competition',
        'excitement',
        'fallback_plan',
        'revenue_model',
        'target_customers',
        'target_incomes',
        'target_customers_ideal',
        'motivation',
        'social_platform',
        'availability',
        'funding_status',
        'project_pitch',
        'dominant_color',
        'design_style',
        'example_style',
        'graphic_elements',
        'support_type',
        'platforms',
        'tech_requirements',
        'contractor_power',
        'leisure',
        'famous_entrepreneur',
        'worldwide_success',
        'status',
         'files',
    ];
}
