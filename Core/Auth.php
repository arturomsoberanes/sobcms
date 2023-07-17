<?php

namespace Core;

use App\Models\User;

class Auth
{
  public static function ensureSessionStarted()
  {
    if (empty(session_id())) {
      session_start();
    }
  }
  public static function check()
  {
    static::ensureSessionStarted();
    if (empty($_SESSION['id'])) {
      return false;
    }
    return true;
  }
  public static function tryLogin($email_or_username, $password)
  {
    $user = User::where('email', $email_or_username)
      ->orWhere('username', $email_or_username)
      ->first();
    if (!empty($user) and password_verify($password, $user->password)) {
      static::ensureSessionStarted();
      $_SESSION['name'] = $user->name;
      $_SESSION['email'] = $user->email;
      $_SESSION['password'] = $user->password;
      $_SESSION['id'] = $user->id;

      return true;
    }
    return false;
  }
  public static function logout()
  {
    session_destroy();
  }
}