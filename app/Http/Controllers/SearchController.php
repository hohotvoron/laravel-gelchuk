<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    public function index(Request $request){
        $request->validate([
            's'=>'required'
        ]);
        $s = $request->s;
        $posts = Post::where('title', 'LIKE', "%$s%")->orWhere('content', 'LIKE', "%$s%")->with('category')->paginate(2);
        return view('user.posts.search', compact('posts', 's'));
    }
}
