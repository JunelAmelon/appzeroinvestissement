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
    Schema::create('marketplacebusinesses', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id');
    $table->string('business_name');
    $table->text('attraction_reason');
    $table->string('business_animal');
    $table->integer('conviction_score');
    $table->text('business_motivation');
    $table->text('entrepreneurial_approach');
    $table->text('personal_strengths');
    $table->text('financing_plan');
    $table->boolean('financing_help');
    $table->decimal('budget', 10, 2);
    $table->text('post_acquisition_action');
    $table->text('business_strategy');
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
