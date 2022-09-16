<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Zoo;
use App\Models\Animal_family;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class PostController extends Controller
{
    public function archive(Post $post)
    {
        $post = \Auth::user()->posts;
        return view('posts/archive')->with(['post' => $post]);
    }

 
    public function show(Post $post)
    {
        return view('posts/show')
        ->with([
            'post' => $post, 
            ]);
    }
    
    public function create(Post $post, Zoo $czoo, Animal_family $canimal) 
    {
        return view('posts/create')->with(['post'=>$post, 'zoos' => $czoo->get(), 'animals' => $canimal->get()]);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        
        $input = $request['post'];
        
        //画像があったら以下の保存処理準備を行う
        if($request->img){
            $path = Storage::disk('s3')->put('/', $request->file('img'));
            $post->img = Storage::disk('s3')->url($path);
        }
        
        $post->fill($input)->save();
        return redirect('/myposts/' . $post->id);
    }
    
    public function edit(Post $post, Zoo $czoo, Animal_family $canimal) 
    {
        return view('posts/edit')->with(['post'=>$post, 'zoos' => $czoo->get(), 'animals' => $canimal->get()]);
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/myposts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/myposts');
    }

}