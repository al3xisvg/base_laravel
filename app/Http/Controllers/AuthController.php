<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;

use WpPassword;

use Session;

class AuthController extends Controller {
  public function login(Request $request) {
    // Fields Validations:
    $request->validate([
      'email' => 'required',
      'password' => 'required',
    ], [
      'email.required' => __('validation.required'),
      'password.required' => __('validation.required_password'),
    ]);

    // Data:
    $email = $request->email;
    $password = $request->password;

    // Validate if email exists:
    $admin = Admin::where('email', '=', $email)->first();
    if ($admin === null) {
      return back()->with('fail', '¡Este email no está registrado!');
    }
    $passwordDB = $admin->password;

    // Validate if password is correct:
    $isCorrect = WpPassword::check($password, $passwordDB);
    if (!$isCorrect) {
      return back()->with('fail', '¡Contraseña incorrecta!');
    }

    // Generate session:    
    $id = $admin->id;
    $request->session()->put('loginId', $id);

    // Response:
    return redirect('home');
  }

  public function logout() {
    if (Session::has('loginId')) {
      Session::pull('loginId');
      return redirect('/');
    }
  }
}