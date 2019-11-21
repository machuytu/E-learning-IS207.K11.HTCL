<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheLoaisTable extends Migration
{
    public function up()
    {
        Schema::create('the_loais', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ten_tl');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
