<?php

namespace App\Http\Controllers;
use Wink\WinkPost;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //method to paginate the posts so that only 10 posts show up on each page
    public function index(){
          $posts = WinkPost::with('tags')
          ->live()
          ->orderBy('publish_date', 'DESC')
          ->paginate(10);
          return view('posts.index', [
          'posts' => $posts,
          ]);
    }

    //method for the single blog post page
      public function single($slug)
   {
       $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

       return view('posts.single', compact('post'));
   }

}
