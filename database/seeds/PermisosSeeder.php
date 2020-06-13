<?php

use Illuminate\Database\Seeder;
use App\Administrador\Permiso;

class PermisosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    #USUARIOS
    $permisoModulo = new Permiso;
    $permisoModulo->nombre = "Usuarios";
    $permisoModulo->slug = "modulo.usuario.index";
    $permisoModulo->ruta = "/administrador/usuario";
    $permisoModulo->tipo = "Modulo";
    $permisoModulo->imagen = "usuarios.png";
    $permisoModulo->referencia = null;
    $permisoModulo->descripcion = "Ver Modulo de Usuario";
    $permisoModulo->save();

    #ROLES
    $permisoModulo = new Permiso;
    $permisoModulo->nombre = "roles";
    $permisoModulo->slug = "modulo.rol.index";
    $permisoModulo->ruta = "/administrador/rol";
    $permisoModulo->tipo = "Modulo";
    $permisoModulo->imagen = "role.png";
    $permisoModulo->referencia = null;
    $permisoModulo->descripcion = "Ver Modulo de rol";
    $permisoModulo->save();
  }
}
