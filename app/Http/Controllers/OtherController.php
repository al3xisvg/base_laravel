<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;

use Session;

class OtherController extends Controller {
  public function __invoke() {
    $isLogged = Session::has('loginId');
    if (!$isLogged) {
      return redirect('/');
    }

    $admins = Admin::all();

    return view('pages.other', compact('admins'));
  }
}
