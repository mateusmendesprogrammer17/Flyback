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
        Schema::create('fly_votes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('fly_id');
                $table->enum('type_vote', ['like', 'unlike']);
                $table->foreignId('user_id')->constrained()->onDelete('cascade');

                // impede voto duplicado
                $table->unique(['fly_id', 'user_id']);

                $table->foreign('fly_id')
                    ->references('id')->on('flies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fly_votes');
    }
};
