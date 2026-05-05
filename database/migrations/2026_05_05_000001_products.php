<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\StockUnit;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("code",25);
            $table->string("name",100);
            $table->decimal("standard_cost",19,5,true);
            $table->decimal("moq",18,5,true);
            $table->longText("description");
            $table->unsignedBigInteger("category_id");
            $table->foreign('category_id')->references('id')->on('categories');
            $table->enum('stock_unit', array_map(fn($e) => $e->value, StockUnit::cases()));
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
