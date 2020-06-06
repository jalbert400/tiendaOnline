<?php

namespace App\Http\Controllers\Modulos\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
    return view('auth.login');
  }

  public function login(Request $request)
  {
    return redirect()->route('modulo.administrador.index');
  }

  public function logout()
  {

    return redirect('/web-admin');
  }
}
