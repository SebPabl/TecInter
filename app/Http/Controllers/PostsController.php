<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\View\View;


class PostsController extends Controller
{
    public function getPosts()
    {
        $posts = Posts::all()->take(10);
        return Response()->json($posts);
    }
}
