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
            $table->string('portfolio_no', 255); // Heading
        
            $table->text('heading'); // Heading
            $table->text('company_name'); // Heading
            $table->text('content'); // Content
            $table->string('image')->nullable(); // Image path

            $table->text('POS')->nullable(); // Heading
            $table->text('Keywords')->nullable(); // Heading
            $table->text('RatingBefore')->nullable(); // Heading
            $table->text('RatingAfter')->nullable(); // Heading


            $table->enum('status', ['save', 'publish'])->nullable(); // Status
            $table->string('created_by', 255); // created_by
            $table->timestamps(); // Created at & Updated at
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
