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
        'attraction_reason',
        'business_animal',
        'conviction_score',
        'business_motivation',
        'entrepreneurial_approach',
        'personal_strengths',
        'financing_plan',
        'financing_help',
        'budget',
        'post_acquisition_action',
        'business_strategy',
        'status',
    ];
}
