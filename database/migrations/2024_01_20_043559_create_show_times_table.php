<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('show_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained('movies','id')->cascadeOnDelete();
            $table->foreignId('event_day_id')->constrained('event_days','id')->cascadeOnDelete();
            $table->foreignId('time_slot_id')->constrained('time_slots','id')->cascadeOnDelete();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('show_times');
    }
};
