<?php
namespace App\Controllers;
use App\Controllers\PostController;
class HomeController
{

  public function show()
  {
    return view('index', [
      'title' => 'SOBCMS',
      'posts' => PostController::getAllPosts(),
      'component' => 'list-posts'
    ]);
  }

  public function showPost($post_id)
  {
    $post = PostController::getOnePost($post_id);
    return view('index', [
      'title' => $post->title,
      'post' => $post,
      'component' => 'post'
    ]);
  }
}