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
       Schema::create('nfts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('creator');
        $table->decimal('price_eth', 12, 4);
        $table->string('image');
        $table->string('collection');
        $table->text('description');
        $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfts');
    }
};
