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
        'character_comparison',
        'activity_description',
        'business_age',
        'sector',
        'sucess_product',
        'proudest_achievement',
        'customer_count',
        'current_revenue',
        'scalability_score',
        'franchise_motivation',
        'excitement',
        'current_locations',
        'franchise_target',
        'franchise_reproducibility',
        'key_resources',
        'sector_growth',
        'market_study',
        'company_values',
        'business_currency',
        'franchisee_requirements',
        'franchisee_search',
        'competitors',
        'location_data',
        'analyse',
        'role',
        'franchisee_training',
        'tools',
        'business_song',
        'imaginary',
        'success_plan',
        'status',
        'files',
    ];

  // Relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
