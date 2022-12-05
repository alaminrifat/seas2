<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;

class APIController extends Controller
{
    
    public function APILogin(Request $req){
        // $pass = Hash::check($request->password,$userInfo->password);
        // $user = Teacher::where('email',$req->username)->where('password',$req->password)->first();
        $user = Teacher::where('email',$req->email)->first();
        // return $user;
        if(!$user || !Hash::check($req->password,$user->password)){
            return "No user found";
        }
        else{
            return $user;
                // $api_token = Str::random(64);
                // $token = new Token();
                // $token->userid = $user->id;
                // $token->token = $api_token;
                // $token->created_at = new DateTime();
                // $token->save();
                // return $token;

        }
        

    }
    public function  logout(Request $req){

        $token = Token::where('token',$req->token)->first();
        if($token){
            $token->expired_at =new DateTime();
            $token->save();
            return $token;
        }
    }
}
