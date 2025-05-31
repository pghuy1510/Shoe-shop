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
        Schema::create('DonDatHang', function ($table) {
            $table->increments('id_Bill');
            $table->integer('id_KH')->unsigned();
            $table->foreign('id_KH')->references('id_KH')->on('KhachHang');
            $table->double('TongTien');
            $table->string('Payment');
            $table->text('TinNhanKH')->nullable();
            $table->boolean('TrangThai');
            $table->timestamps();
            
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DonDatHang');
    }
};
