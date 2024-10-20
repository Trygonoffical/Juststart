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
        Schema::create('contactpages', function (Blueprint $table) {
            $table->id();
            $table->string('gmap')->nullable();
            $table->string('email')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('whatappno')->nullable();
            $table->string('address')->nullable();
            // social links
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('insta')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('youtube')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactpages');
    }
};
