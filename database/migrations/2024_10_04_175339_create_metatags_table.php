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
        Schema::create('metatags', function (Blueprint $table) {
            $table->id();
            $table->text('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->unsignedBigInteger('home_id')->nullable();
            $table->unsignedBigInteger('page_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('blogs_id')->nullable();
            $table->unsignedBigInteger('about_id')->nullable();
            $table->unsignedBigInteger('contact_id')->nullable();

            // Foreign key constraints (nullable)
            $table->foreign('home_id')->references('id')->on('home_pages')->onDelete('set null');
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('set null');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('set null');
            $table->foreign('blogs_id')->references('id')->on('blogs')->onDelete('set null');
            $table->foreign('about_id')->references('id')->on('abouts')->onDelete('set null');
            $table->foreign('contact_id')->references('id')->on('contactpages')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metatags');
    }
};
