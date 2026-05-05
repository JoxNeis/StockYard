<?php

use App\enums\PaymentType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('employees');
            $table->enum('payment_type', array_map(fn($e) => $e->value, PaymentType::cases()));
            $table->date('payment_date')->nullable();
            $table->decimal('subtotal',19,5);
            $table->decimal('discount',19,5)->nullable();
            $table->decimal('discount_rate',3,2)->nullable();
            $table->decimal('tax',19,5);
            $table->string('attachments_format',5);
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
        Schema::dropIfExists('orders');
    }
};
