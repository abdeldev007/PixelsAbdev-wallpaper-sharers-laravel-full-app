<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
     public function login(Request $data  )
     {
         try {
           $login=$data->validate([
            'email'=>'required|string',
            'password'=>'required|string'
        ]);
      
        $accessToken="Auth::user()->createToken('authToken')->accessToken ;";
        return response(['user'=>"Auth::user()" ]);    
         } catch (\Throwable $th) {
            return response(['message'=>'Invalide Login Cridential!']);

         }
       
     }
}
