<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IncubateurZero extends Model
{
    use HasFactory;

    protected $table = 'incubateur_zero';

    protected $fillable = [
        'user_id',
        'project_name',
        'name_reason',
        'project_description',
        'project_stage',
        'movie_title',
        'movie_reason',
        'main_mission',
        'idea_origin',
        'passion_reason',
        'project_strength',
        'biggest_obstacle',
        'main_objective_5years',
        'profitability_timeline',
        'strategy',
        'funding_target',
        'growth_vision_12months',
        'scalability_reason',
        'project_sector',
        'sector_innovation',
        'target_market',
        'unique_characteristics',
        'growth_limitations',
        'market_analysis_done',
        'main_competitors',
        'has_customers',
        'market_conquest_strategy',
        'funds_raised',
        'initial_budget',
        'unlimited_funding_use',
        'growth_needs',
        'strategic_support_needed',
        'co_management_open',
        'desired_connections',
        'positive_impact',
        'core_values',
        'values_in_practice',
        'global_impact_vision',
        'cartoon_character',
        'tv_series_synopsis',
        'netflix_doc_title',
        'success_party',
        'project_slogan',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
