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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice', 20)->unique();
            $table->unsignedBigInteger('customer_id');
            $table->integer('total_amount');

            // Define custom timestamp columns
            $table->timestamp('transaction_date')->nullable();
            $table->timestamp('updated_on')->nullable();

            $table->enum('status', ['Pending', 'Completed', 'Cancelled'])->default('Pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
