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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->integer('slots')->default(1);
            $table->string('positions')->nullable();
            $table->text('job_desc')->nullable();
            $table->date('expires_at')->nullable();
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('vacancy_types')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
