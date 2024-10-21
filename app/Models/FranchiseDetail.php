<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FranchiseDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'business_name',
        'character_comparison',
        'activity_description',
        'business_age',
        'sector',
        'key_products',
        'proudest_achievement',
        'customer_count',
        'current_revenue',
        'scalability_score',
        'franchise_motivation',
        'current_locations',
        'franchise_target',
        'franchise_reproducibility',
        'key_resources',
        'sector_growth',
        'market_study',
        'company_values',
        'franchisee_requirements',
        'competitors',
        'location_data',
        'franchisee_training',
        'tools',
        'business_song',
        'success_plan',
        'status',
    ];
}
