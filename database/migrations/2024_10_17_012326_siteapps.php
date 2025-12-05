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
        Schema::create('siteapps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->text('description');
            $table->string('animal');
            $table->text('problem');
            $table->string('main_feature');
            $table->string('secondary_feature')->nullable();
            $table->text('why_good');
            $table->text('idea_origin');
            $table->text('competition');
            $table->text('excitement');
            $table->text('fallback_plan');
            $table->text('revenue_model');
            $table->text('target_customers');
            $table->string('social_platform');
            $table->string('availability');
            $table->string('funding_status');
            $table->text('project_pitch');
            $table->string('dominant_color');
            $table->text('design_style');
            $table->boolean('graphic_elements');
            $table->string('support_type');
            $table->string('platforms');
            $table->text('tech_requirements');
            $table->string('status')->default('En attente');
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
