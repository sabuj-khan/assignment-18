<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{


    // all posts display
    public function allPostDisplay(Request $request)
        {
            $posts = Post::with('category')->get();

            return view('pages.allposts', ['posts' => $posts]);
        }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // Optionally, you can redirect or return a response
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
