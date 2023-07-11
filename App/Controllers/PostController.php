<?php
namespace App\Controllers;
use App\Models\Post;
class PostController
{
  public static function getAllPosts()
  {
    try {
      $posts = Post::all();
      return $posts;
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
  public static function getOnePost($post_id)
  {
    try {
      $post = Post::find($post_id);
      return $post;
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
}