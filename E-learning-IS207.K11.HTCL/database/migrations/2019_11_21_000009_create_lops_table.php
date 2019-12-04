<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopsTable extends Migration
{
    public function up()
    {
        Schema::create('lops', function (Blueprint $table) {
            $table->string('id')->primary();

            $table->string('ten_lop_hoc');

            $table->string('ten_link');

            $table->date('thgian_bd')->nullable();

            $table->date('thgian_kt')->nullable();

            $table->decimal('gia', 15, 2)->nullable();

            $table->longText('mo_ta')->nullable();

            $table->boolean('published')->default(0)->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
