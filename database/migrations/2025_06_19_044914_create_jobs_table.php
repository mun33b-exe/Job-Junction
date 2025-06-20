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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->text('job_type');
            $table->text('salary_range');
            $table->text('location');
            $table->text('job_description');
            $table->text('requirements');
            $table->text('experience_level');
            $table->text('application_deadline');
            $table->string('job_image')->nullable();
            $table->unSignedBigInteger('employer_id')->nullable();
            $table->foreign('employer_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
