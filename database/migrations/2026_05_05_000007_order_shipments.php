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
        Schema::create('order_shipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->text('to_address');
            $table->unsignedBigInteger('to_subdistrict_id');
            $table->foreign('to_subdistrict_id')->references('id')->on('subdistricts');
            $table->unsignedBigInteger('from');
            $table->foreign('from')->references('id')->on('locations');
            $table->unsignedBigInteger('shipper_id');
            $table->foreign('shipper_id')->references('id')->on('shippers');
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
