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
        Schema::create('Comment', function ($table) {
            $table->increments('id_Cmt');
            $table->integer('id_KH')->unsigned();
            $table->foreign('id_KH')->references('id_KH')->on('KhachHang');
            $table->integer('id_SP')->unsigned();
            $table->foreign('id_SP')->references('id_SP')->on('SanPham');
            $table->text('NoiDung');
            $table->timestamps();
            
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Comment');
    }
};
