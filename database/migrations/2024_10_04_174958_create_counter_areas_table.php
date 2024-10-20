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
        Schema::create('counter_areas', function (Blueprint $table) {
            $table->id();
            $table->string('sub_title')->nullable();
            $table->string('title')->nullable();
            $table->string('content')->nullable();
            $table->string('btn_Name')->nullable();
            $table->string('btn_Value')->nullable();
            // four points 
            $table->string('pone')->nullable();
            $table->string('ptwo')->nullable();
            $table->string('pthree')->nullable();
            $table->string('pfour')->nullable();

            $table->string('bg_color')->nullable();
            $table->unsignedBigInteger('home_id')->nullable();
            $table->foreign('home_id')->references('id')->on('home_pages')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counter_areas');
    }
};
