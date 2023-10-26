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
        Schema::create('features', function (Blueprint $table) {
            $table->id('feature_id');
            $table->string('feature_name');
            $table->unsignedBigInteger('spec_id');
            $table->unsignedBigInteger('feature_option_id');
            $table->timestamps();
            $table->foreign('spec_id')->references('spec_id')->on('specifications');
            $table->foreign('feature_option_id')->references('feature_option_id')->on('feature_options');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
