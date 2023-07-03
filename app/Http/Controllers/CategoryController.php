<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function postsByCategory(Request $request){
        $category = Category::findOrFail($request->id);
        $posts = $category->posts;

        return view('pages.posts', compact('posts'));
      
    }


    
    // Latest posts display on latestpost blade template and it has a route on web page

    public function latestPost()
{
    $categories = Category::with('latestPost')->get();

    return view('posts.latestpost', ['categories' => $categories]);
}


}
