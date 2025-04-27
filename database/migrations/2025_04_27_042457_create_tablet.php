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
        // Tabla projects
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->float('budget_min')->nullable();
            $table->float('budget_max')->nullable();
            $table->date('deadline')->nullable();
            $table->enum('status', ['activo', 'cerrado', 'contratado'])->default('activo');
            $table->timestamps();
        });

        // Tabla skills
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Tabla pivot project_skill
        Schema::create('project_skill', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->foreignId('skill_id')->constrained('skills')->onDelete('cascade');
            $table->primary(['project_id', 'skill_id']);
            $table->timestamps();
        });

        // Tabla proposals
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->foreignId('freelancer_id')->constrained('users')->onDelete('cascade');
            $table->float('price')->nullable();
            $table->integer('duration_days')->nullable();
            $table->text('message')->nullable();
            $table->enum('status', ['enviada', 'aceptada', 'rechazada'])->default('enviada');
            $table->timestamps();
        });

        // Tabla ratings
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->foreignId('freelancer_id')->constrained('users')->onDelete('cascade');
            $table->integer('rating');
            $table->text('comment')->nullable();
            $table->timestamps();
        });

        // Tabla verifications
        Schema::create('verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('document_path');
            $table->enum('status', ['pendiente', 'aprobado', 'rechazado'])->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifications');
        Schema::dropIfExists('ratings');
        Schema::dropIfExists('proposals');
        Schema::dropIfExists('project_skill');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('projects');
    }
};
