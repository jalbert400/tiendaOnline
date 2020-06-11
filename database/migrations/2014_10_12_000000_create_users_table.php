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
      $table->bigIncrements('id');
      $table->bigInteger('role_id')->unsigned();
      $table->string('nombre', 100);
      $table->string('apellidos', 100);
      $table->string('dni', 8);
      $table->string('telefono', 9);
      $table->string('email')->unique();
      $table->string('username')->unique();
      $table->string('password');
      $table->char('estado', 1);
      $table->rememberToken();
      $table->text('session_id')->nullable()->default(null)->comment('Almacena el id de la sesión del usuario');
      $table->timestamps();
      $table->softDeletes();
      $table->foreign('role_id')->references('id')->on('roles');
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
