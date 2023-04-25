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
        Schema::create('stuffs', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable()->index();
            $table->string('title')->nullable()->index();
            $table->longText('level1')->nullable();
            $table->longText('level2')->nullable();
            $table->longText('level3')->nullable();
            $table->longText('price')->nullable();
            $table->longText('price_sp')->nullable();
            $table->longText('fields_properties')->nullable();
            $table->longText('mutual_purchases')->nullable();
            $table->longText('unit_of_measure')->nullable();
            $table->longText('image_path')->nullable();
            $table->longText('show_on_main')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stuffs');
    }
};
