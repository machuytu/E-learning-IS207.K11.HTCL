<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongBaosTable extends Migration
{
    public function up()
    {
        Schema::create('thong_baos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ten_tb')->nullable();

            $table->longText('noi_dung')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
