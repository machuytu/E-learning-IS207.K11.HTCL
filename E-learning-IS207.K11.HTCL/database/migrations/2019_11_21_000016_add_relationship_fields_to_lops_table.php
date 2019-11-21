<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLopsTable extends Migration
{
    public function up()
    {
        Schema::table('lops', function (Blueprint $table) {
            $table->unsignedInteger('mo_hoc_id');

            $table->foreign('mo_hoc_id', 'mo_hoc_fk_624826')->references('id')->on('mon_hocs');

            $table->unsignedInteger('the_loai_id');

            $table->foreign('the_loai_id', 'the_loai_fk_624827')->references('id')->on('the_loais');

            $table->unsignedInteger('phong_hoc_id');

            $table->foreign('phong_hoc_id', 'phong_hoc_fk_624828')->references('id')->on('phong_hocs');

            $table->unsignedInteger('giao_vien_id');

            $table->foreign('giao_vien_id', 'giao_vien_fk_624838')->references('id')->on('users');
        });
    }
}
