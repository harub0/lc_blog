<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        // check SQL code
        // $test = $post->orderBy('updated_at', 'DESC')->limit(2)->toSql();
        // dd($test);
        
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
}
