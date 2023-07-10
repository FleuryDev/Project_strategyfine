<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts_comments', function (Blueprint $table) {
            $table->id();
            $table->text('content')->nullable()->default('Aucun contenu !')->onDelete('cascade');
            $table->string('author')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->integer('commentable_id');
            $table->string('commentable_type');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts_comments');
    }
};