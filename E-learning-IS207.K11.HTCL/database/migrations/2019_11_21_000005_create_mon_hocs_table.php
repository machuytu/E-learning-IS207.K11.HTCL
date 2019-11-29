<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonHocsTable extends Migration
{
    public function up()
    {
        Schema::create('mon_hocs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ma_mh');

            $table->string('ten_mh');

            $table->string('mo_ta_mh')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
