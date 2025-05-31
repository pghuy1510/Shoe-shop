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
        Schema::create('SanPham', function ($table) {
            $table->increments('id_SP');
            $table->integer('id_CD')->unsigned();
            $table->foreign('id_CD')->references('id_CD')->on('ChuDe');
            $table->integer('id_TH')->unsigned();
            $table->foreign('id_TH')->references('id_TH')->on('ThuongHieu');
            $table->string('TenSP');
            $table->text('MoTaSP')->nullable();
            $table->string('ImgSP')->nullable();
            $table->float('GiaSP');
            $table->float('GiaSale')->nullable();
            $table->timestamps();
            
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SanPham');
    }
};
