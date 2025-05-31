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
        Schema::create('ThuongHieu', function ($table) {
            $table->increments('id_TH'); 
            $table->string('TenTH');
            $table->text('Description')->nullable();
            $table->string('ImgTH')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ThuongHieu');
    }
};
