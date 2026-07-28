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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');              // Nama produk / varian rasa
        $table->string('category')->nullable(); // Kategori (misal: Es Krim / Es Puter)
        $table->text('description')->nullable(); // Deskripsi singkat
        $table->string('image')->nullable(); // Nama file foto produk
        $table->enum('status', ['available', 'sold_out'])->default('available'); // Status stok
        $table->timestamps();
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
