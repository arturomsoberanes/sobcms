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
  
  public function saveImage($post_image)
  {
    $featured_image = $post_image;
    $filename = $featured_image['name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file_path = 'media_upload/' . uniqid() . '.' . $extension;

    move_uploaded_file($featured_image['tmp_name'], $file_path);

    return $file_path;
  }

  public function savePost()
  {
    try {

      $post = new Post;
      $post->title = $this->transformContent($_POST['title']);
      $post->excerpt = $this->transformContent($_POST['excerpt']);
      $post->content = $this->transformContent($_POST['content']);
      $post->published_on = date('Y-m-d H:i:s');

      if(isset($_FILES['featured_image'])) {
        $post->featured_image = $this->saveImage($_FILES['featured_image']);
      }

      $post->save();

      return redirect('/');
    } catch (QueryException $e) {
      // Handle the exception here
      echo $e->getMessage();
    }
  }
  public function deletePost($post_id)
  {
    try {

      $post = Post::find($post_id);
      $post->delete();

      return redirect('/admin');
    } catch (QueryException $e) {
      // Handle the exception here
      echo $e->getMessage();
    }
  }

}