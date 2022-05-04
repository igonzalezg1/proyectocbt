<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
			$table->string('ap_paterno',180);
			$table->string('ap_meterno',180);
			$table->string('nombres',180);
			$table->unsignedBigInteger('id_tipo_user');
			$table->string('correo',180);
			$table->string('username',180);
			$table->string('password',180);
			$table->integer('status');
			$table->timestamps();
			$table->foreign('id_tipo_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
