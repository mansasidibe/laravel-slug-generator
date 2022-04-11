<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function index()
    {
        $post = Post::create([
            "name" => "Back to future",
            "slug" => "laravel-generate-multi-slug-on-load",
            "description" => "This is just the laravel slug example"
        ]);
        dd($post);
    }
}
