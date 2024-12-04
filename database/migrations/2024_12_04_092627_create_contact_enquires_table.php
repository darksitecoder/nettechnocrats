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
        Schema::create('contact_enquires', function (Blueprint $table) {
            $table->id(); // Primary key
        
            $table->string('name', 255); // Heading
            $table->string('email', 255); // Heading
            $table->text('subject'); // Content
            $table->text('message'); // Content
            $table->timestamps(); // Created at & Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_enquires');
    }
};
