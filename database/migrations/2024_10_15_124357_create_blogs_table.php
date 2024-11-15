<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('topic'); // Heading
            $table->string('heading', 255); // Heading
            $table->text('content'); // Content
            $table->string('image')->nullable(); // Image path
            $table->string('video')->nullable(); // Video path
            $table->string('pdf')->nullable(); // PDF path
            $table->enum('status', ['save', 'publish'])->nullable(); // Status
            $table->string('created_by', 255); // created_by
            $table->timestamps(); // Created at & Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
