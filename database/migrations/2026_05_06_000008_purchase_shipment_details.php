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
        Schema::create('purchase_shipment_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchase_shipment_id');
            $table->foreign('purchase_shipment_id')->references('id')->on('purchase_shipments');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->decimal('unit', 19, 5);
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
        Schema::dropIfExists('purchase_shipment_details');
    }
};
