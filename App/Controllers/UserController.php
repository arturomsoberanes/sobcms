<?php
namespace App\Controllers;
use App\Models\User;
use App\Controllers\HomeController;
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
  public static function getOneUser($user_id)
  {
    try {
      $user = User::find($user_id);
      if (!$user) {
        HomeController::showNotFound();
        die();
      }
      return $user;
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
  public function updateUser($user_id)
  {
    try {
      $user = User::find($user_id);
      foreach ($_POST as $key => $value) {
        if ($value !== '') {
          $user->$key = $value;
          if ($key === 'password') {
            $user->password = password_hash($user->password, PASSWORD_DEFAULT);
          }
        }
      }

      $user->save();
      return redirect('/admin');
    } catch (QueryException $e) {
      // Handle the exception here
      echo $e->getMessage();
    }
  }
  public function deleteUser($user_id)
  {
    try {
      $user = User::find($user_id);
      $user->delete();
      return redirect('/admin');
    } catch (QueryException $e) {
      // Handle the exception here
      echo $e->getMessage();
    }
  }
}