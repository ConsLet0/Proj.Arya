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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthdate');
            $table->unsignedBigInteger('education_qualification');
            $table->unsignedBigInteger('major');
            $table->unsignedBigInteger('year_experience')->nullable();
            $table->unsignedBigInteger('languages');
            $table->unsignedBigInteger('primary_language');
            $table->unsignedBigInteger('specialization_1');
            $table->unsignedBigInteger('specialization_2');
            $table->unsignedBigInteger('specialization_3');
            $table->unsignedBigInteger('specialization_4');
            $table->unsignedBigInteger('preferred_working_hours');
            $table->unsignedBigInteger('desired_field');
            $table->foreign('education_qualification')->references('id')->on('education_qualifications')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('major')->references('id')->on('majors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('year_experience')->references('id')->on('year_experiences')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('languages')->references('id')->on('languages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('primary_language')->references('id')->on('languages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('specialization_1')->references('id')->on('specializations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('specialization_2')->references('id')->on('specializations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('specialization_3')->references('id')->on('specializations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('specialization_4')->references('id')->on('specializations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('preferred_working_hours')->references('id')->on('working_hours')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('desired_field')->references('id')->on('fields')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
