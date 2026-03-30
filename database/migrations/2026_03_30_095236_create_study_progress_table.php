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
        Schema::create('study_progress', function (Blueprint $table) {
            $table->id();
            $table->decimal('propedeuse_ec', 5, 2)->default(0);
            $table->decimal('bachelor_ec_earned', 5, 2)->default(0);
            $table->decimal('bachelor_ec_total', 5, 2)->default(180);
            $table->decimal('total_ec', 5, 2)->default(0);
            $table->integer('courses_completed')->default(0);
            $table->integer('courses_total')->default(0);
            $table->decimal('average_grade', 3, 2)->nullable();
            $table->timestamp('last_updated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_progress');
    }
};
