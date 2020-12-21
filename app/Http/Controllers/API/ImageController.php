<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image ;
use Illuminate\Support\Facades\Hash;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Image::latest()->paginate(10) ;
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

   $data = request()->validate([
           'title' => 'required',
            'tags' => 'required',
           'category'=>'required',
            'image' => ['required', 'image'],

       ]);

       $imagePath = request('image')->store('uploads', 'public');

       $image = Image::make(public_path("storage/{$imagePath}"))->fit(1280, 720);

       $image->save();

       auth()->user()->posts()->create([
           'title' => $data['title'],
            'tags'=>$data['tags'] ,
           'category'=>$data['category'],
            'image' => $imagePath,
       ]);

       return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $user=User::findOrFail($id);
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' =>  'sometimes|string|min:8',
        ]);
        
  
        $user->update($request->all());
        return  ['User Deleted Successfully!'] ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete the User
        $user=User::findOrFail($id) ;
        $user->delete();

        return  ['User Deleted Successfully!'] ;
    }
}
