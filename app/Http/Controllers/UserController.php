<?php

namespace App\Http\Controllers;

use App\Models\Wp_user;

use Illuminate\Http\Request;

class UserController extends Controller {
  public function list(Request $request) {
    $skip = isset($request->skip) ? $request->skip : 0;
    $limit = isset($request->limit) ? $request->limit : 10;
    $orderBy = $request->orderBy;
    $sort = isset($request->sort) ? $request->sort : 'asc';
    $fields = isset($request->fields)
      ? is_array($request->fields)
        ? $request->fields
        : []
      : [];

    $users = [];
    if (isset($orderBy)) {
      if (count($fields) > 0) {
        $users = Wp_user::orderBy($orderBy, $sort)->skip($skip)->limit($limit)->get($fields);
      } else {
        $users = Wp_user::orderBy($orderBy, $sort)->skip($skip)->limit($limit)->get();
      }
    } else {
      if (count($fields) > 0) {
        $users = Wp_user::all()->skip($skip)->limit($limit)->get($fields);
      } else {
        $users = Wp_user::all()->skip($skip)->limit($limit)->get();
      }
    }
    return $users;
  }

  public function obtain($id) {
    $user = Wp_user::find($id);
    return $user;
  }
}
