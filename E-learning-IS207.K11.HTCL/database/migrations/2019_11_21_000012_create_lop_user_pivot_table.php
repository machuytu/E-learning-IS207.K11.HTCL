<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('lop_user', function (Blueprint $table) {
            $table->unsignedInteger('lop_id');

            $table->foreign('lop_id', 'lop_id_fk_624829')->references('id')->on('lops')->onDelete('cascade');

            $table->unsignedInteger('user_id');

            $table->foreign('user_id', 'user_id_fk_624829')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
