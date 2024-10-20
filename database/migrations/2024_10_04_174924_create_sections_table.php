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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('bg_color')->nullable();

            // top sec
            $table->string('subtitle')->nullable();
            $table->string('title')->nullable();
            $table->text('shotdesc')->nullable();
            // section type
            $table->string('section_type')->nullable();

            // Left Area 
            $table->longText('Left_content')->nullable();
            $table->string('Left_img')->nullable();
            $table->string('Left_img_alttext')->nullable();

            // Right Area
            $table->string('Form')->nullable();
            $table->string('Right_img')->nullable();
            $table->string('Right_img_alttext')->nullable();
            $table->longText('Right_content')->nullable();
            
            // Center section 
            $table->longText('content')->nullable();
            $table->json('left_points')->nullable();
            $table->json('right_points')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
