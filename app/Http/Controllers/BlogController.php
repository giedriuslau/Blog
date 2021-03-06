<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {

      $posts = Post::with('author')->latestFirst()->paginate(3);
      return view('blog.index', compact('posts'));
    }
}
