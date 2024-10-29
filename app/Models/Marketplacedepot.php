<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Marketplacedepot extends Model
{
    //
    protected $fillable = [
        'user_id',
        'project_name',
        'elevator_pitch',
        'dish_comparison',
        'mission',
        'industry_sector',
        'success_factors',
        'scalability_score',
        'current_or_target_customers',
        'annual_revenue',
        'unicorn_magic',
        'key_features',
        'requires_specific_skills',
        'tools_in_place',
        'has_existing_team',
        'unique_selling_points',
        'selling_price',
        'purchase_includes',
        'advertising_slogan',
        'provides_training',
        'partners_and_suppliers',
        'business_summary',
        'elon_pitch',
        'next_project',
        'status',
        'files',
    ];

    /**
     * Définition de la relation avec le modèle User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
