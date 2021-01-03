<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Post;
use Validator;
 use Illuminate\Support\Facades\Auth;
class PostsController extends BaseController
{
/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userPosts($id)
    {        
       return  $this->sendResponse(Post::with('user')->get() , 'Posts retrieved successfully.');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  $this->sendResponse( Post::with('user')->get() , 'Posts retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'tags' => 'required',
            'title' => 'required',
            'image' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $Post = Post::create($input);
   
        return $this->sendResponse($Post, 'Post created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Post = Post::find($id);
  
        if (is_null($Post)) {
            return $this->sendError('Post not found.');
        }
   
        return $this->sendResponse( $Post , 'Post retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $Post)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $Post->name = $input['name'];
        $Post->detail = $input['detail'];
        $Post->save();
   
        return $this->sendResponse(new PostResource($Post), 'Post updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
    
    Post::all()->delete();
   
        return $this->sendResponse([], 'Post deleted successfully.');
    }
    public function authUser()
    {
       return Auth::user();
   
        
    }
}