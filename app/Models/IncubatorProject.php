<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncubatorProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'project_name',
        'project_description',
        'project_stage',
        'project_mission',
        'project_movie',
        'origin_motivation',
        'passion_aspect',
        'strength',
        'obstacle',
        'objective',
        'time_to_profit',
        'strategy',
        'target_amount',
        'growth_vision',
        'why',
        'sector',
        'market_target',
        'unique_features',
        'growth_limitations',
        'market_analysis',
        'competitors',
        'clients',
        'market_strategy',
        'funds_raised',
        'initial_budget',
        'first_step_with_unlimited_funds',
        'growth_needs',
        'strategic_support',
        'co_management',
        'desired_connections',
        'impact',
        'core_values',
        'value_translation',
        'global_impact',
        'cartoon_character',
        'tv_synopsis',
        'documentary_title',
        'celebration_details',
        'client_slogan',
        'status',
         'files',
    ];
}
