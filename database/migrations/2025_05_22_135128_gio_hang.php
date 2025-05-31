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
        Schema::create('GioHang', function ($table) {
            $table->increments('id_GH');
            $table->integer('id_SP')->unsigned();
            $table->integer('id_KH')->unsigned();
            $table->integer('SoLuong')->nullable();
            $table->double('Gia')->nullable();   
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('GioHang');
    }
};
