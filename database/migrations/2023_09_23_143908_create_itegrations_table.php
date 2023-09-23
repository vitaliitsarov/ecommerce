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
        Schema::create('itegrations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->string('type')->default('xml');
            $table->string('status')->default('inactive');
            $table->json('columns')->nullable();
            $table->json('schema')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itegrations');
    }
};
