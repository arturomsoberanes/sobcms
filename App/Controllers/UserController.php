<?php

use App\Models\User;
class UserConroller
{
  public function addUser($data_user)
  {
    extract($data_user);
    try {
    $user = new User();
    $user->name = $name;
    $user->email = $email;
    $user->username = $username;
    $user->password = password_hash($password, PASSWORD_DEFAULT);

    $user->save();

    return $user;
  } catch (Exception $e) {
    // Handle the exception here
    echo $e->getMessage();
  }
  }
}