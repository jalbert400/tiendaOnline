<?php

use Illuminate\Database\Seeder;
use App\Administrador\Role;

class RolesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //ADMIN
    $permisoModulo = new Role;
    $permisoModulo->nombre = "ADMIN";
    $permisoModulo->estado = "1";
    $permisoModulo->save();

    //USER
    $permisoModulo = new Role;
    $permisoModulo->nombre = "USER";
    $permisoModulo->estado = "1";
    $permisoModulo->save();
  }
}
