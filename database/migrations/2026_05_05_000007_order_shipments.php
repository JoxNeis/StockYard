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
    {        Schema::create('order_shipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchase_id');
            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->text('to_address');
            $table->unsignedBigInteger('to_subdistrict_id');
            $table->foreign('to_subdistrict_id')->references('id')->on('subdistricts');
            $table->unsignedBigInteger('from');
            $table->foreign('from')->references('id')->on('locations');
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
        Schema::dropIfExists('order_shipments');
    }
};
