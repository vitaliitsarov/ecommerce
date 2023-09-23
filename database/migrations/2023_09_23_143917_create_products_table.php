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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('body')->nullable();
            $table->longText('raw_body')->nullable();
            $table->decimal('price_netto')->default(0);
            $table->decimal('price_brutto')->default(0);
            $table->float('vat')->default(0);
            $table->json('categories')->nullable();
            $table->json('images')->nullable();
            $table->boolean('is_instagram')->default(false);
            $table->string('status')->default('inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
