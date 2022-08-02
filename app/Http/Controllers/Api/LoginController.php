<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $user = User::where('email', $request->email)->first();

        if(!Hash::check($request->password , $user->password)){
            return 'can not login';
        }

        $user_status = ['writer','admin'];
        if(!in_array($user->status,$user_status) ){
            Auth::logout();
            return 'can not login';
        }

        
        $token = $user->createToken($user->name);
            return response()->json(['token'=>$token->plainTextToken, 'user'=>$user]);
    }

    public function logout(Request $request)
    {
        $user = User::where('id' , $request->id)->first();
        $user->tokens()->delete();
        return $user;
    }
}