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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 200)->unique();
            $table->string('phone_number', 25)->unique();
            $table->string('fax_number', 25)->unique()->nullable();
            $table->longText('address');
            $table->unsignedBigInteger('address_subdistrict_id');
            $table->foreign('address_subdistrict_id')->references('id')->on('subdistricts');
            $table->string('address_zipcode');
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
        Schema::dropIfExists('suppliers');
    }
};
