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
        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('des')->nullable();

            $table->string('Rimg')->nullable();
            $table->string('Rimg_alttext')->nullable();

            $table->string('RForm')->nullable();

            $table->string('G_img')->nullable();
            $table->string('G_img_alttext')->nullable();

            $table->string('T_img_alttext')->nullable();

            $table->string('T_img')->nullable();
            $table->string('btn_one')->nullable();
            $table->string('btn_two')->nullable();
            $table->unsignedBigInteger('home_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('home_id')->references('id')->on('home_pages')->onDelete('set null');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sections');
    }
};
