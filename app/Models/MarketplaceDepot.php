<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarketplaceDepot extends Model
{
    use HasFactory;

    protected $table = 'marketplace_depot';

    protected $fillable = [
        'user_id',
        'business_name',
        'name_reason',
        'elevator_pitch',
        'business_dish',
        'dish_reason',
        'business_mission',
        'activity_sector',
        'sector_choice_reason',
        'success_factors',
        'scalability_score',
        'current_customers',
        'annual_revenue',
        'unique_characteristic',
        'key_features',
        'required_skills',
        'tools_in_place',
        'team_status',
        'unique_value',
        'selling_price',
        'included_in_purchase',
        'tv_slogan',
        'buyer_support',
        'partners_available',
        'business_in_3_words',
        'elon_musk_pitch',
        'next_project',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
