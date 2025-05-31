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
        Schema::create('ThuocTinh', function ($table) {
            $table->increments('id_ThuocTinh');
            $table->integer('id_SP')->unsigned();
            $table->foreign('id_SP')->references('id_SP')->on('SanPham'); 
            $table->string('KichThuoc')->nullable();
            $table->integer('SoLuong')->nullable();
            $table->string('MauSac')->nullable();
            $table->string('list_img')->nullable();   
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ThuocTinh');
    }
};
