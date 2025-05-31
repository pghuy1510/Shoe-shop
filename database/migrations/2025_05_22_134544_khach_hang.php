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
        Schema::create('KhachHang', function ($table) {
            $table->increments('id_KH'); 
            $table->string('HoTenKH');
            $table->string('TenTK');
            $table->string('MatKhau');
            $table->date('NgaySinhKH')->nullable(); 
            $table->string('EmailKH')->nullable(); 
            $table->string('DienThoaiKH')->nullable() ;
            $table->string('DiaChiKH')->nullable();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KhachHang');
    }
};
