<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaoviens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giaoviens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('HoTen');
            $table->string('Loai');
            $table->string('NgaySinh');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giaoviens');
    }
}
