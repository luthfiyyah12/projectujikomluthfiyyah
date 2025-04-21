<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('author_followers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
            $table->foreignId('follower_id')->constrained('authors')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['author_id', 'follower_id']); // Memastikan bahwa hubungan unik
        });
    }

    public function down(): void {
        Schema::dropIfExists('followers');
    }
};
