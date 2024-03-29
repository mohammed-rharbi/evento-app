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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organizer_id')->constrained('users');
            $table->foreignId('categories_id')->constrained();
            $table->string('title');
            $table->text('description');
            $table->dateTime('start_time'); // Changed to dateTime
            $table->dateTime('end_time');
            $table->string('location');
            $table->integer('numberOfPlacesAvailable');
            $table->boolean('validated')->default(0);
            $table->boolean('autoaccept')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
