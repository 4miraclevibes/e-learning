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
        Schema::create('questionnaire_result_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('result_id')
                ->constrained('questionnaire_results')
                ->onDelete('cascade');
            $table->foreignId('category_questionnairy_id')
                ->constrained('learning_category_questionnairies')
                ->onDelete('cascade');
            $table->foreignId('questionnairy_id')
                ->constrained('questionnairies')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionnaire_result_details');
    }
};
