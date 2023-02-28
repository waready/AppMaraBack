<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function hasPermission(Request $request)
  {
    $user = User::find(auth()->id());
    // retornos los permisos para acceder, caso contrario un abort(401)
    // foreach ($request->input('permissions') as $permission) {
    //   if (!$user->hasPermissionTo($permission)) {
    //     abort(401);
    //   }
    // }
    return $user;
  }

  public function getUser(Request $request)
  {
    return $user = $request->user();
    //obtener permisos desde Model User
    //return $user->append('variables')->append('permission-names')->append('id_caja');
  }
}