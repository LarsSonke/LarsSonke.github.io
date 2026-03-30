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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_code')->unique();
            $table->string('name');
            $table->string('phase')->default('Bachelor'); // Propedeuse or Bachelor
            $table->date('date')->nullable();
            $table->decimal('grade', 3, 1)->nullable(); // 6.0, 10.0, etc.
            $table->decimal('ec', 5, 2); // Study credits
            $table->string('status')->default('completed'); // completed, in_progress, not_started
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
