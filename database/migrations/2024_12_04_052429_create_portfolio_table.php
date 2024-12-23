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
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('portfolio_no', 255);
        
            $table->string('category_1');
            $table->string('category_2');
    
            $table->text('heading')->nullable();
            $table->text('company_name')->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable(); // Image path

            $table->text('POS')->nullable();
            $table->text('Keywords')->nullable();
            $table->text('RatingBefore')->nullable();
            $table->text('RatingAfter')->nullable();


            $table->enum('status', ['save', 'publish'])->nullable(); // Status
            $table->string('created_by', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio');
    }
};
