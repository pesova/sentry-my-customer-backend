<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; 
use Validator;
use App\User; 

class UserController extends Controller 
{

    public $successStatus = 200;
    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('HNG-Token')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

   
}