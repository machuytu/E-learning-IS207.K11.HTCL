<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhongHocsTable extends Migration
{
    public function up()
    {
        Schema::create('phong_hocs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ten_phong')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
