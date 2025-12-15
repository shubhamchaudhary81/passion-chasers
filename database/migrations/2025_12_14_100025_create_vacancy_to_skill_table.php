<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vacancy_to_skill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacancy_id');
            $table->unsignedBigInteger('skill_id');
            $table->timestamps();

            $table->foreign('vacancy_id')->references('id')->on('vacancies')->cascadeOnDelete();
            $table->foreign('skill_id')->references('id')->on('vacancy_skills')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancy_to_skill');
    }
};
