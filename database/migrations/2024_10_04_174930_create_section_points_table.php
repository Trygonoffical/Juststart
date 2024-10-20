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
        Schema::create('section_points', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('icon_alt')->nullable();
            $table->string('icon_bg_color')->nullable();

            $table->string('title')->nullable();
            $table->text('content')->nullable();

            $table->string('section_bg')->nullable();

            $table->unsignedBigInteger('sections_id')->nullable();
            $table->foreign('sections_id')->references('id')->on('sections')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_points');
    }
};
