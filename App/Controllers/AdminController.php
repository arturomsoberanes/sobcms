<?php
namespace App\Controllers;

use App\Controllers\PostController;
use App\Controllers\HomeController;
use App\Controllers\UserController;

class AdminController
{
  public function showAdmin()
  {
    return view('index', [
      'title' => 'Admin',
      'posts' => PostController::getAllPosts(),
      'users' => UserController::getAllUsers(),
      'dir' => 'admin',
      'component' => 'admin'
    ]);
  }
  public function showWritePost($post = false)
  {
    if ($post) {
      $post = HomeController::checkIfPostExist($post);
    }
    return view('index', [
      'title' => 'Write Post',
      'dir' => 'posts',
      'component' => 'write-post',
      'post' => $post ? $post : false
    ]);
  }
  public function showUser($user = false)
  {
    if ($user) {
      $user = UserController::getOneUser($user);
    }

    return view('index', [
      'title' => $user ? 'Update User' : 'New User',
      'dir' => 'auth',
      'component' => 'user',
      'user' => $user ? $user : false
    ]);
  }
}