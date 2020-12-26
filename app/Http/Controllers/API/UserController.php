<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return User::latest()->paginate(10) ;
    }
    public function profile()
    {
        return Auth::user() ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {

      $this->validate($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required'],

        ]);
        if($data['image']==null) {
            $data['image']='profile.png' ;
        }
         return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'about' => $data['about'],
            'image' => $data['image'],
             
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return User::findOrFail($id) ;
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
