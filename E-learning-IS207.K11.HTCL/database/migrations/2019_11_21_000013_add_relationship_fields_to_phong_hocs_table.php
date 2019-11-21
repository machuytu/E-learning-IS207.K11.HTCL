<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPhongHocsTable extends Migration
{
    public function up()
    {
        Schema::table('phong_hocs', function (Blueprint $table) {
            $table->unsignedInteger('co_so_id')->nullable();

            $table->foreign('co_so_id', 'co_so_fk_624790')->references('id')->on('co_sos');
        });
    }
}
