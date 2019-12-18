<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->string('email')->nullable()->unique();

            $table->datetime('email_verified_at')->nullable();

            $table->string('sex')->nullable();

            $table->string('address')->nullable();

            $table->string('phone_number')->nullable();

            $table->double('store')->default(0)->nullable();

            $table->string('password')->nullable();

            $table->string('remember_token')->nullable();

            $table->boolean('approved')->default(0)->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
