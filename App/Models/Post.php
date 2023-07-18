<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public $timestamps = false;
  protected $fillable = [
    'title',
    'excerpt',
    'content',
    'featured_image',
    'published_on'
  ];
}