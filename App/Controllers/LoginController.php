<?php
namespace App\Controllers;
use Core\Auth;
class LoginController
{
  public function showLogin()
  {
    return view('index', [
      'title' => 'Login',
      'dir' => 'auth',
      'component' => 'login'
    ]);
  }

  public function login()
  {
    Auth::tryLogin($_POST['email_username'], $_POST['password']);
    if (Auth::check()) {
      return redirect('/');
    }
    return redirect('/login');
  }

  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }
}