<?php
namespace App\Controllers;
use App\Models\Post;
use Illuminate\Database\QueryException;
class PostController
{
  public static function getAllPosts()
  {
    try {
      $posts = Post::all();
      return $posts;
    } catch (QueryException $e) {
      echo $e->getMessage();
    }
  }
  public static function getOnePost($post_id)
  {
    try {
      $post = Post::find($post_id);
      return $post;
    } catch (QueryException $e) {
      echo $e->getMessage();
    }
  }
  public function transformContent($string) {
      $allowedTags = '<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
      $allowedTags .= '<li><ol><ul><span><div><br><ins><del>';
      $string = strip_tags(stripslashes($string), $allowedTags);
      return $string;
  }
  public function savePost()
  {
    try {

      $post = new Post;
      $post->title = $this->transformContent($_POST['title']);
      $post->excerpt = $this->transformContent($_POST['excerpt']);
      $post->content = $this->transformContent($_POST['content']);
      $post->pubished_on = date('Y-m-d H:i:s');

      $post->save();

      return redirect('/');
    } catch (QueryException $e) {
      // Handle the exception here
      echo $e->getMessage();
    }
  }

}