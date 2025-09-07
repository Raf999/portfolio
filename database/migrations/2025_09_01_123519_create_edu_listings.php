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
        Schema::create('edu_listings', function (Blueprint $table) {
            $table->id();
            $table->string('institution');
            $table->string('degree');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('icon_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edu_listings');
    }
};
