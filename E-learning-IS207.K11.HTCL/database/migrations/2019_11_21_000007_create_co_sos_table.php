<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoSosTable extends Migration
{
    public function up()
    {
        Schema::create('co_sos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ten_cs');

            $table->string('dia_chi')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
