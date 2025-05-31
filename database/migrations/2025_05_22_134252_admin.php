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
        Schema::create('Admin', function ($table) {
            $table->increments('id_Ad');
            $table->string('HoTen');
            $table->string('Username');
            $table->string('Password');
            $table->date('NgaySinh')->nullable(); 
            $table->string('EmailKH')->nullable(); 
            $table->string('DienThoai')->nullable() ;
            $table->string('DiaChi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Admin');
    }
};
