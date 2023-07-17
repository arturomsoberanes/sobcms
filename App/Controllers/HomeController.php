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
      'dir' => 'posts',
      'component' => 'list-posts'
    ]);
  }

  public static function checkIfPostExist($post_id) {
    $post = PostController::getOnePost($post_id);
    if (!$post) {
      return static::showNotFound();
    }
    return $post;
  }

  public function showPost($post_id)
  {
    $post = static::checkIfPostExist($post_id);
    return view('index', [
      'title' => $post->title,
      'post' => $post,
      'dir' => 'posts',
      'component' => 'post'
    ]);
  }
  public static function showNotFound()
  {
    return view('index', [
      'title' => '404 Not Found',
      'dir' => 'components',
      'component' => 'not-found'
    ]);
  }
}