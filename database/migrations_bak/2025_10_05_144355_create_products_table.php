<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint ) {
            ->id();
            ->string('name');
            ->text('description')->nullable();
            ->decimal('price', 10, 2);
            ->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
