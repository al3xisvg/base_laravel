<?php

namespace App\Http\Controllers;

use App\Models\Wp_user;

use Illuminate\Http\Request;

class UserController extends Controller {
  public function list(Request $request) {
    $page = isset($request->page) ? $request->page : 1;
    $perPage = isset($request->perPage) ? $request->perPage : 10;

    $skip = ($page - 1) * $perPage;
    $limit = $perPage;
    $orderBy = $request->orderBy;
    $sort = isset($request->sort) ? $request->sort : 'asc';
    $fields = isset($request->fields)
      ? is_array($request->fields)
        ? $request->fields
        : []
      : [];

    $total = Wp_user::count();
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

    $response = array(
      "total" => $total,
      "page" => $page,
      "perPage" => $perPage,
      "hasPreviousPage" => $page > 1,
      "hasNextPage" => $total > $page * $perPage,
      "data" => $users
    );
    return $response;
  }

  public function obtain($id) {
    $user = Wp_user::find($id);
    return $user;
  }
}
