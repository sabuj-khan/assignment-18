<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{

    use SoftDeletes;
    protected $fillable = [
        'title',
        'content',
        'category_id',
    ];


    // getting all posts that have been soft deleted
    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }








    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function posts(){
        // Retrieving all posts with categories

    $posts = Post::with('category')->get();

    foreach ($posts as $post) {
        echo $post->title . $post->category->name;
    }



     function get_posts_count_by_category_id(int $category_id): int
    {
        return $this->where('category_id', $category_id)->count();
    }


    }


}

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }



    



}