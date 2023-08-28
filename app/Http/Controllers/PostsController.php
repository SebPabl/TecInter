<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\View\View;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostsController extends Controller
{
    public function getPosts()
    {
        $posts = Posts::all()->take(10);
        return Response()->json($posts);
    }

    public function insertPost()
    {
        DB::table('posts')->insert([
            'name' => mt_rand(1,15)
        ]);
    }

}
