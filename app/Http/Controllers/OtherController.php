<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;

use Illuminate\Support\Arr;

use Session;

class OtherController extends Controller {
  public function __invoke() {
    $isLogged = Session::has('loginId');
    if (!$isLogged) {
      return redirect('/');
    }

    $admins = Admin::all();

    $admin = new Admin;
    $admin->id = 0;

    $admins[] = $admin;

    return view('pages.other', compact('admins'));
  }
}
