<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;

Class UserController extends Controller {

    use ApiResponser;

    private $request;

    public funtion index()
    {
       $users = User::all();
       return $this->successResponse($users); 
    }

    public function add(Request $request){
        $rules = [
            'username' => 'required|max:20',
            'password' => 'required|max20',
            'gender' => 'required|in:Male,Female',
        ];
    }

    $this->validate($request,$rules);

    $user = User::create($request->all());
    
    return $this->successResponse($user, Response::HTTP_CREATED);

}