<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('franchises', function (Blueprint $table) {
            // Vérifier si les colonnes existent déjà avant de les ajouter
            if (!Schema::hasColumn('franchises', 'name_reason')) {
                $table->text('name_reason')->nullable()->after('business_name');
            }
            if (!Schema::hasColumn('franchises', 'movie_character')) {
                $table->string('movie_character')->nullable()->after('character_comparison');
            }
            if (!Schema::hasColumn('franchises', 'simple_description')) {
                $table->text('simple_description')->nullable()->after('activity_description');
            }
            if (!Schema::hasColumn('franchises', 'key_products_list')) {
                $table->text('key_products_list')->nullable()->after('sector');
            }
            if (!Schema::hasColumn('franchises', 'franchise_why')) {
                $table->text('franchise_why')->nullable()->after('scalability_score');
            }
            if (!Schema::hasColumn('franchises', 'excitement_reason')) {
                $table->text('excitement_reason')->nullable()->after('franchise_why');
            }
            if (!Schema::hasColumn('franchises', 'multi_location')) {
                $table->string('multi_location')->nullable()->after('excitement_reason');
            }
            if (!Schema::hasColumn('franchises', 'franchise_count_3years')) {
                $table->string('franchise_count_3years')->nullable()->after('multi_location');
            }
            if (!Schema::hasColumn('franchises', 'company_motto')) {
                $table->string('company_motto')->nullable()->after('company_values');
            }
            if (!Schema::hasColumn('franchises', 'values_importance')) {
                $table->text('values_importance')->nullable()->after('company_motto');
            }
            if (!Schema::hasColumn('franchises', 'competitors_identified')) {
                $table->string('competitors_identified')->nullable()->after('franchisee_requirements');
            }
            if (!Schema::hasColumn('franchises', 'location_analysis')) {
                $table->text('location_analysis')->nullable()->after('competitors_identified');
            }
            if (!Schema::hasColumn('franchises', 'need_help_analysis')) {
                $table->string('need_help_analysis')->nullable()->after('location_analysis');
            }
            if (!Schema::hasColumn('franchises', 'management_role')) {
                $table->string('management_role')->nullable()->after('need_help_analysis');
            }
            if (!Schema::hasColumn('franchises', 'franchisee_tools')) {
                $table->text('franchisee_tools')->nullable()->after('franchisee_training');
            }
            if (!Schema::hasColumn('franchises', 'famous_franchise_lunch')) {
                $table->text('famous_franchise_lunch')->nullable()->after('success_plan');
            }
        });
    }

    public function down(): void
    {
        Schema::table('franchises', function (Blueprint $table) {
            $columns = [
                'name_reason', 'movie_character', 'simple_description', 'key_products_list',
                'franchise_why', 'excitement_reason', 'multi_location', 'franchise_count_3years',
                'company_motto', 'values_importance', 'competitors_identified', 'location_analysis',
                'need_help_analysis', 'management_role', 'franchisee_tools', 'famous_franchise_lunch'
            ];
            
            foreach ($columns as $column) {
                if (Schema::hasColumn('franchises', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
