<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function index()
    {
        // CREATION DU SLUG ET INSERTION DANS LA BASE DE DONNEES
        $post = Post::create([
            "name" => "je suis content",
            "slug" => "laravel-generate-multi-slug-on-load",
            "description" => "This is just the laravel slug example"
        ]);
        dd($post);
    }
}
