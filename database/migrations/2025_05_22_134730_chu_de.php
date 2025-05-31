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
        Schema::create('ChuDe', function ($table) {
            $table->increments('id_CD'); 
            $table->integer('id_TH')->unsigned();
            $table->foreign('id_TH')->references('id_TH')->on('ThuongHieu');
            $table->string('TenCD');
            
        });   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ChuDe');
    }
};
