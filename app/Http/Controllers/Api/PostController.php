<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Ok ca marche';
    }

    public function store(CreatePostRequest $request)
    {
        $post = new Post();

        // $post->titre = "Comment s'auto formé ?";
        $post->description = "Biltong shank alcatra, pig chicken burgdoggen fatback.";
        $post->save();
    }
}
