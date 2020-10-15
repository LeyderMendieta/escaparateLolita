<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();

        if($user)
        {
            if(hash::check($request->password,$user->password))
            {
                $user->generateToken();
                Auth::login($user,true);
            }
        }        

        return response()->json(Auth::user());
    }

    public function register(Request $request)
    {
        $user = User::create([
            "name" => $request->name,
            "password" => Hash::make($request->password),
            "email" => $request->email
        ]);

        return response()->json($user);
    }

    public function userLogged(Request $request)
    {
        $user = User::where(['api_token' => $request->token])->whereNotNull("api_token")->first();

        if($user)
        {            
            Auth::login($user,true);
        } 
        
        return response()->json(Auth::user());
    }
}
