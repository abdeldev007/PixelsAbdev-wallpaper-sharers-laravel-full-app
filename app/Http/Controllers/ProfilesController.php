<?php

namespace App\Http\Controllers;
use App\Models\User ;
use App\Models\Post;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($id)
    {
        $user =User::findOrFail($id) ;
        $posts=Post::latest()->where('user_id',$id) ;
        $cover=Post::find(1) ;

        return view('profile.index',['user'=>$user,
            'posts'=>$posts , 'cover'=>$cover->image  ]);
    }
    
}
