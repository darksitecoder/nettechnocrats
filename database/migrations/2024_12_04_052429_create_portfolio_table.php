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
        
            $table->string('heading', 255); // Heading
            $table->string('company_name', 255); // Heading
            $table->text('content'); // Content
            $table->string('image')->nullable(); // Image path
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
