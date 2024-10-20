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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('topimg')->nullable();
            $table->string('centerImg')->nullable();
            $table->longText('content')->nullable();
            $table->string('vision')->nullable();
            $table->string('visionbtn')->nullable();
            $table->string('mission')->nullable();
            $table->string('missionbtn')->nullable();

            // top leads 
            $table->string('FImg')->nullable();
            $table->string('FImg_alttext')->nullable();
            $table->string('Fl_name')->nullable();
            $table->string('Fdesignation')->nullable();
            $table->string('Flinkdin')->nullable();
            $table->text('Fcontent')->nullable();

            $table->string('SImg')->nullable();
            $table->string('SImg_alttext')->nullable();

            $table->string('Sl_name')->nullable();
            $table->string('Sdesignation')->nullable();
            $table->string('Slinkdin')->nullable();
            $table->text('Scontent')->nullable();

            // view info 
            $table->string('bgImg')->nullable();
            $table->string('videocontent')->nullable();
            $table->string('youtlink')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
