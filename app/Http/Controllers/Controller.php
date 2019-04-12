<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Post;
use App\Category;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $mainPosts = Post::paginate(7);
        return view('index')->with([
            'posts' => Post::latest()->take(5)->get(),
            'topPosts' => Post::all()->random()->take(6)->get(),
            'mainPosts' => $mainPosts,
            'categories' => Category::all(),

        ] );
    }
}
