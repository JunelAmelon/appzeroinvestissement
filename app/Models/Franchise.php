<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Franchise extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'business_name',
        'name_reason',
        'character_comparison',
        'movie_character',
        'activity_description',
        'simple_description',
        'business_age',
        'sector',
        'key_products',
        'key_products_list',
        'proudest_achievement',
        'customer_count',
        'current_revenue',
        'scalability_score',
        'franchise_motivation',
        'franchise_why',
        'excitement_reason',
        'current_locations',
        'multi_location',
        'franchise_target',
        'franchise_count_3years',
        'franchise_reproducibility',
        'key_resources',
        'sector_growth',
        'market_study',
        'company_values',
        'company_motto',
        'values_importance',
        'franchisee_requirements',
        'competitors',
        'competitors_identified',
        'location_data',
        'location_analysis',
        'need_help_analysis',
        'management_role',
        'franchisee_training',
        'tools',
        'franchisee_tools',
        'business_song',
        'success_plan',
        'famous_franchise_lunch',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
