<?php
namespace App\Controllers;
use App\Models\User;
use Illuminate\Database\QueryException;
class UserController
{
  public static function getAllUsers() {
    try {
      $users = User::all();
      return $users;
    } catch (QueryException $e) {
      echo $e->getMessage();
    }
  }
  public function addUser()
  {
    try {
      $user = new User();
      $user->name = $_POST['name'];
      $user->email = $_POST['email'];
      $user->username = $_POST['username'];
      $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $user->save();

      return redirect('/');
    } catch (QueryException $e) {
      // Handle the exception here
      echo $e->getMessage();
    }
  }
}