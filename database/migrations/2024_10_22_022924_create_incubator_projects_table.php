<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('incubator_projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->text('project_description');
            $table->string('project_stage');
            $table->string('project_mission');
            $table->text('origin_motivation');
            $table->text('passion_aspect');
            $table->text('strength');
            $table->text('obstacle');
            $table->text('objective');
            $table->integer('time_to_profit');
            $table->text('strategy');
            $table->decimal('target_amount', 15, 2)->nullable();
            $table->text('growth_vision');
            $table->text('sector');
            $table->text('market_target');
            $table->text('unique_features');
            $table->text('growth_limitations');
            $table->boolean('market_analysis')->default(false);
            $table->text('competitors');
            $table->boolean('clients')->default(false);
            $table->text('market_strategy');
            $table->boolean('funds_raised')->default(false);
            $table->decimal('initial_budget', 15, 2)->nullable();
            $table->text('first_step_with_unlimited_funds');
            $table->text('growth_needs');
            $table->text('strategic_support');
            $table->boolean('co_management')->default(false);
            $table->text('desired_connections');
            $table->text('impact');
            $table->text('core_values');
            $table->text('value_translation');
            $table->text('global_impact');
            $table->text('cartoon_character');
            $table->text('tv_synopsis');
            $table->text('documentary_title');
            $table->text('celebration_details');
            $table->text('client_slogan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incubator_projects');
    }
};
