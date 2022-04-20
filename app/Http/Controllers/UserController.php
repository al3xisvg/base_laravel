<?php

namespace App\Http\Controllers;

use App\Models\Wp_user;

use Illuminate\Http\Request;

class UserController extends Controller {
  public function list() {
    $users = Wp_user::orderBy('display_name', 'asc')->skip(1)->limit(2)->get(['ID', 'display_name']);
    return $users;
  }

  public function obtain($id) {
    $user = Wp_user::find($id);
    return $user;
  }
}
