<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventory_movements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from');
            $table->foreign('from')->references('id')->on('locations');
            $table->unsignedBigInteger('to');
            $table->foreign('to')->references('id')->on('locations');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('shipper_id');
            $table->foreign('shipper_id')->references('id')->on('shippers');
            $table->decimal('unit', 18, 5);
            $table->decimal('fee', 19, 5);
            $table->decimal('taxes', 19, 5);
            $table->string('attachment_format', 5);
            $table->longText('notes');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_movements');
    }
};
