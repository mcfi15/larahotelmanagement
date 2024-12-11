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
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('room_type');
            $table->string('slug');
            $table->string('image');
            $table->longText('description')->nullable();
            $table->integer('price');
            $table->tinyInteger('tv')->default('0')->comment('1=available, 0=unavailable');
            $table->tinyInteger('bed')->default('0')->comment('1=available, 0=unavailable');
            $table->tinyInteger('balcony')->default('0')->comment('1=available, 0=unavailable');
            $table->tinyInteger('pet')->default('0')->comment('1=available, 0=unavailable');
            $table->tinyInteger('box')->default('0')->comment('1=available, 0=unavailable');
            $table->tinyInteger('wifi')->default('0')->comment('1=available, 0=unavailable');
            $table->tinyInteger('netflix')->default('0')->comment('1=available, 0=unavailable');
            $table->tinyInteger('air_condition')->default('0')->comment('1=available, 0=unavailable');
            $table->tinyInteger('loundry')->default('0')->comment('1=available, 0=unavailable');

            $table->tinyInteger('status')->default('0')->comment('1=hidden, 0=visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_types');
    }
};
