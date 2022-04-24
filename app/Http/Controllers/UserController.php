<?php

namespace App\Http\Controllers;

use App\Models\User;

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

    $total = User::count();
    $users = [];
    if (isset($orderBy)) {
      if (count($fields) > 0) {
        $users = User::orderBy($orderBy, $sort)->skip($skip)->limit($limit)->get($fields);
      } else {
        $users = User::orderBy($orderBy, $sort)->skip($skip)->limit($limit)->get();
      }
    } else {
      if (count($fields) > 0) {
        $users = User::all()->skip($skip)->limit($limit)->get($fields);
      } else {
        $users = User::all()->skip($skip)->limit($limit)->get();
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

  public function dtTable(Request $request) {
    $data = User::all();
    return datatables()->of($data)
      ->addIndexColumn()
      ->addColumn('action', function($row){
        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
        return $btn;
      })
      ->rawColumns(['action'])
      ->make(true);
  }

  public function obtain($id) {
    $user = User::find($id);
    return $user;
  }
}
