<?php

use App\Enums\LocationType;
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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->longText('address');
            $table->unsignedBigInteger('address_subdistrict_id');
            $table->foreign('address_subdistrict_id')->references('id')->on('subdistricts');
            $table->string('address_zipcode');
            $table->enum('job_title', array_map(fn($e) => $e->value, LocationType::cases()));
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
        Schema::dropIfExists('locations');
    }
};
