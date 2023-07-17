<?php
namespace App\Controllers;
use Core\Auth;
class LoginController
{
  protected $dir = 'auth';
  public function showLogin()
  {
    return view('index', [
      'title' => 'Login',
      'dir' => $this->dir,
      'component' => 'login'
    ]);
  }
  public function showSignin()
  {
    return view('index', [
      'title' => 'Sign In',
      'dir' => $this->dir,
      'component' => 'signin'
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