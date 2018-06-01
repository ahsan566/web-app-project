<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class AppController extends Controller{

  public function getAdminPage()
  {
      $users = User::all();
      return view('admin', ['users' => $users]);
  }

  public function postAdminAssignRoles(Request $request)
      {
          $user = User::where('email', $request['email'])->first();
          $user->roles()->detach();
          if ($request['role_user']) {
              $user->roles()->attach(Role::where('name', 'User')->first());
          }
          if ($request['role_admin']) {
              $user->roles()->attach(Role::where('name', 'Admin')->first());
          }
          return redirect()->back();
      }

}
