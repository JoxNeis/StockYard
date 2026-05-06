<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\JobTitle;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('first_name',50);
            $table->string('middle_name',50)->nullable();
            $table->string('last_name',50);
            $table->string('email',200)->unique();
            $table->string('phone_number',25)->unique();
            $table->string('fax_number',25)->unique()->nullable();
            $table->unsignedBigInteger('division_id');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->unsignedBigInteger('head_id')->nullable();
            $table->foreign('head_id')->references('id')->on('employees');
            $table->enum('job_title', array_map(fn($e) => $e->value, JobTitle::cases()));
            $table->longText('address');
            $table->unsignedBigInteger('address_subdistrict_id');
            $table->foreign('address_subdistrict_id')->references('id')->on('subdistricts');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->decimal('salary',19,5);
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
        Schema::dropIfExists('employees');
    }
};
