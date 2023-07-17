<?php
namespace App\Controllers;

use App\Controllers\PostController;
use App\Controllers\HomeController;

class AdminController
{
  public function showAdmin()
  {
    return view('index', [
      'title' => 'Admin',
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
}