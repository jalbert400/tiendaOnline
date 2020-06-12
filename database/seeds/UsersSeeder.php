<?php

use Illuminate\Database\Seeder;
use App\Administrador\User;

class UsersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $usuario = new User;
    $usuario->role_id = 1;
    $usuario->nombre = 'admin';
    $usuario->apellidos = 'master';
    $usuario->dni = '42213219';
    $usuario->telefono = '964785622';
    $usuario->email = 'admin@gmail.com';
    $usuario->username = 'aMaster';
    $usuario->password = bcrypt('123456789');
    $usuario->estado = 'A';
    $usuario->save();
  }
}
