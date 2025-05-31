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
        Schema::create('ChiTietDonHang', function ($table) {
            $table->increments('id_CTDH');
            $table->integer('id_Bill')->unsigned();
            $table->foreign('id_Bill')->references('id_Bill')->on('DonDatHang');
            $table->integer('id_SP')->unsigned();
            $table->foreign('id_SP')->references('id_SP')->on('SanPham');
            $table->integer('SoLuong'); 
            $table->timestamps();
            
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ChiTietDonHang');
    }
};
