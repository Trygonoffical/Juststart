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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('Menuname')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->nullable();

            $table->string('category')->nullable();

            $table->string('card_title')->nullable();
            $table->string('card_Img')->nullable();
            $table->string('card_tag')->nullable();
            $table->string('cart_content')->nullable();

            $table->json('sections_queue')->nullable();
            
            // faq sec
            $table->string('faq_sub')->nullable();
            $table->string('faq_title')->nullable();
            $table->json('faqs')->nullable();


            // package plan
            $table->string('Plan_title')->nullable();
            $table->string('Plan_desc')->nullable();
            $table->json('plans')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
