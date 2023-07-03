<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{


    // Displaying the latest post associated with the category.

    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }








    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}