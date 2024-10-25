<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('franchises', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id');
    $table->string('business_name');
    $table->string('character_comparison');
    $table->text('activity_description');
    $table->string('business_age');
    $table->string('sector');
    $table->string('sucess_product');
    $table->text('key_products');
    $table->text('proudest_achievement');
    $table->string('customer_count');
    $table->string('current_revenue');
    $table->integer('scalability_score');
    $table->text('franchise_motivation');
    $table->text('excitement');
    $table->text('current_locations');
    $table->string('franchise_target');
    $table->text('franchise_reproducibility');
    $table->text('key_resources');
    $table->text('sector_growth');
    $table->text('market_study');
    $table->text('company_values');
    $table->string('business_currency');
    $table->text('franchisee_requirements');
    $table->text('franchisee_search');
    $table->text('competitors');
    $table->text('location_data');
    $table->text('analyse');
    $table->text('role');
    $table->text('franchisee_training');
    $table->text('tools');
    $table->string('business_song');
    $table->string('imaginary');
    $table->text('success_plan');
    $table->string('status')->default('en attente');
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
