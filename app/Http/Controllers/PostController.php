<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;
use Image;
use App\Category;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('posts.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()){
            return view('posts.create')->with([
                'categories' => Category::all()
            ]);
        }
        else{
            return redirect('/');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:4',
            'post' => 'required|min:75',
        ]);

        //If Slug Exists Then Adds Number
        $slug = str_slug($request->title);
        $slugExist = Post::where('slug', '=', $slug)->count();
        $i = 0;
        while($slugExist != 0){
            $i++;
            $slug = str_slug($request->title) . '-' .  strval($i);
            $slugExist = Post::where('slug', '=', $slug)->count();
        };

        //Featured Image
        if($request->file('feature')){
        $file = $request->file('feature'); //Grabs file from form
        $feature = Image::make($file); //Uses Image intervention
        $feature->resize(1110, 463); //Resizes File With Image Intervention
        $jpg = (string) $feature->encode('jpg'); //Converts file to jpg with image intervention
        $filename = uniqid(Auth::user()->id."_").".jpg"; //Unique File name
        Storage::disk('featured')->put(Auth::user()->id.'/featured/' .$filename, $jpg, 'public');
        $url = Storage::disk('featured')->url(Auth::user()->id.'/featured/'.$filename);

        //Thumb Image
        $file2 = $request->file('feature'); //Grabs file from form
        $feature2 = Image::make($file2); //Uses Image intervention
        $feature2->resize(231, 130); //Resizes File With Image Intervention
        $jpg2 = (string) $feature2->encode('jpg'); //Converts file to jpg with image intervention
        $filename2 = uniqid(Auth::user()->id."_").".jpg"; //Unique File name
        Storage::disk('featured')->put(Auth::user()->id.'/thumb/' .$filename2, $jpg2, 'public');
        $url2 = Storage::disk('featured')->url(Auth::user()->id.'/thumb/'.$filename2);

        }




        //Save Post
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->body = $request->post;
        $post->user_id = Auth::user()->id;
        if($request->file('feature')){
            $post->feature = $url;
            $post->thumb = $url2;
        }else{
            $post->feature = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXzYpB6_9edQEpGzU56HHIE1r2RST7FR1O8W5aSER-qoOrYfn9";
            $post->thumb = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXzYpB6_9edQEpGzU56HHIE1r2RST7FR1O8W5aSER-qoOrYfn9";
        }
        $post->save();
        $post->categories()->sync($request->get('categories_id'));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit')->with([
            'post' => $post,
            'categories' => Category::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $post = Post::where('slug', $post->slug)->first();
        $post->title = $request->title;
        $post->body = $request->post;
        $post->slug = str_slug($request->title);

         //Featured Image
        if($request->file('feature')){
            $file = $request->file('feature'); //Grabs file from form
            $feature = Image::make($file); //Uses Image intervention
            $feature->resize(1110, 463); //Resizes File With Image Intervention
            $jpg = (string) $feature->encode('jpg'); //Converts file to jpg with image intervention
            $filename = uniqid(Auth::user()->id."_").".jpg"; //Unique File name
            Storage::disk('featured')->put(Auth::user()->id.'/featured/' .$filename, $jpg, 'public');
            $url = Storage::disk('featured')->url(Auth::user()->id.'/featured/'.$filename);

            //Thumb Image
            $file2 = $request->file('feature'); //Grabs file from form
            $feature2 = Image::make($file2); //Uses Image intervention
            $feature2->resize(231, 130); //Resizes File With Image Intervention
            $jpg2 = (string) $feature2->encode('jpg'); //Converts file to jpg with image intervention
            $filename2 = uniqid(Auth::user()->id."_").".jpg"; //Unique File name
            Storage::disk('featured')->put(Auth::user()->id.'/thumb/' .$filename2, $jpg2, 'public');
            $url2 = Storage::disk('featured')->url(Auth::user()->id.'/thumb/'.$filename2);

            $post->feature = $url;
            $post->thumb = $url2;
        }
        $post->save();
        $post->categories()->sync($request->get('categories_id'));
        return redirect()->route('posts.show', $post->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
