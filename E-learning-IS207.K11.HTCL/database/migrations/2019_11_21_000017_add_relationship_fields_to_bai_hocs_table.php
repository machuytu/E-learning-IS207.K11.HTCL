<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBaiHocsTable extends Migration
{
    public function up()
    {
        Schema::table('bai_hocs', function (Blueprint $table) {
            $table->unsignedInteger('lop_id');

            $table->foreign('lop_id', 'lop_fk_632834')->references('id')->on('lops');
        });
    }
}
