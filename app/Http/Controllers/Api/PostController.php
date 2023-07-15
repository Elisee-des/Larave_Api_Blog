<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        try
        {
            return response()->json([
                'status' => 200,
                'message' => "Post récuperer avec success",
                'data' => Post::all()
            ]);
        }catch(Exception $e)
        {
            return response()->json($e);
        }
    }

    public function store(CreatePostRequest $request)
    {
        try
        {
            $post = new Post();
            $post->titre = $request->titre;
            $post->description = $request->description;
            $post->save();

            return response()->json([
                'status' => 200,
                'message' => "Post ajouté avec success",
                'data' => $post
            ]);
        }catch(Exception $e)
        {
            return response()->json($e);
        }
    }

    public function update(EditPostRequest $request, Post $post)
    {
        try
        {
            $post->titre = $request->titre;
            $post->description = $request->description;
            $post->save();

            return response()->json([
                'status' => 200,
                'message' => "Post edité avec success",
                'data' => $post
            ]);
        }catch(Exception $e)
        {
            return response()->json($e);
        }
    }

    public function delete(Post $post)
    {
        try
        {
            $post->delete();

            return response()->json([
                'status' => 200,
                'message' => "Post supprimé avec success",
                'data' => $post
            ]);
        }catch(Exception $e)
        {
            return response()->json($e);
        }
    }
}
