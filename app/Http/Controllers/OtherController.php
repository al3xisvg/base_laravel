<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class OtherController extends Controller {
  public function __invoke() {
    $isLogged = Session::has('loginId');
    if (!$isLogged) {
      return redirect('/');
    }
    return view('pages.other');
  }
}
