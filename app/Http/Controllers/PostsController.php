<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;
use App\Models\User ;

use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
     
     public function create()
     {
     	return view('posts.create');
     }


     public function store()
     {
       
    $data = request()->validate([
              'title' => 'required',
              'tags' => 'required',
              'category'=>'required',
              'image' => ['required', 'image'],

        ]);
        $imagePath = request('image')->store('uploads/posts', 'public');
        $image = Image::make(public_path("storage/{$imagePath}")) ;
        $image->save();
        $imagePath = '/storage/'.$imagePath;
        auth()->user()->posts()->create([
            'title' => $data['title'],
            'tags'=>$data['tags'] ,
            'category'=>$data['category'],
             'image' => $imagePath,
        ]);
        //dd(request()->all()) ;
        return redirect('/profile/' . auth()->user()->id);
     }
     public function show(\App\Post $post)
     {  
         $currentPost = $post ;
         $userId =$currentPost->user_id ;
         $postUser=User::findOrFail($userId); 
         $allPosts =Post::all()->where( 'user_id',$userId) ;
        if(count($allPosts)>1)
        $allPosts=$allPosts->random(2) ;
         return view('posts.show' )
         ->with ('currentPost',$currentPost)
         ->with('allPosts',$allPosts) 
         ->with('postUser',$postUser);
     }
}
