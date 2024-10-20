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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            // client logos 
            $table->string('client_sub')->nullable();
            $table->string('client_title')->nullable();
            $table->string('client_content')->nullable();
            // testimonial section
            $table->string('test_sub')->nullable();
            $table->string('test_title')->nullable();
            $table->string('test_content')->nullable();
            // Service section 
            $table->string('Serv_sub')->nullable();
            $table->string('Serv_title')->nullable();
            $table->string('Serv_content')->nullable();

            // what We Do Section
            $table->string('WhatDO_subtitle')->nullable();
            $table->string('WhatDo_title')->nullable();
            // One
            $table->string('WDO_bOne_icon')->nullable();
            $table->string('WDO_bOne_icon_alttext')->nullable();
            $table->string('WDo_bone_title')->nullable();
            $table->string('WDo_bone_content')->nullable();
            // two
            $table->string('WDo_bTwo_icon')->nullable();
            $table->string('WDo_bTwo_icon_alttext')->nullable();
            $table->string('WDo_bTwo_title')->nullable();
            $table->string('WDo_bTwo_content')->nullable();
            // three
            $table->string('WDo_bThree_Icon')->nullable();
            $table->string('WDo_bThree_Icon_alttext')->nullable();
            $table->string('WDo_bThree_title')->nullable();
            $table->string('WDo_bThree_content')->nullable();
            // four
            $table->string('Wdo_bFour_icon')->nullable();
            $table->string('Wdo_bFour_icon_alttext')->nullable();
            $table->string('WDo_bFour_title')->nullable();
            $table->string('WDo_bFour_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
