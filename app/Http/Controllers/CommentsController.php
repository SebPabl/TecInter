<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsController extends Controller
{
    public function getComments()
    {
        $comments = Comments::all()->take(10);
        return Response()->json($comments);
    }
}
