<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiHocsTable extends Migration
{
    public function up()
    {
        Schema::create('bai_hocs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ten_bai_hoc');

            $table->string('lien_quan')->nullable();

            $table->string('loi_ngan')->nullable();

            $table->longText('noi_dung')->nullable();

            $table->integer('vi_tri_bai_hoc')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
