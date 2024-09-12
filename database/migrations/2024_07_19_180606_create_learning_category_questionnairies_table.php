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
        Schema::create('learning_category_questionnairies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('learning_category_id')->constrained('learning_categories');
            $table->foreignId('questionnairy_id')->constrained('questionnairies')->onDelete('cascade');
            $table->string('status')->default('active');
            $table->text('description')->nullable();
            $table->integer('score')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_category_questionnairies');
    }
};
