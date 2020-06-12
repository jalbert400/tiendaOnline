<?php

use App\Administrador\Role;
use App\Administrador\User;
use App\Administrador\Permiso;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // $this->call(UserSeeder::class);
    $this->call(PermisosSeeder::class);
    $this->call(RolesSeeder::class);
    $this->call(UsersSeeder::class);
  }
}
