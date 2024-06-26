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
        Schema::create('wartas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('user_id');
            $table->string('file')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        // Schema::create('beritas', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->foreignId('user_id');
        //     $table->string('slug')->unique();
        //     $table->text('excerpt');
        //     $table->text('body');
        //     $table->timestamp('published_at')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wartas');
    }
};
