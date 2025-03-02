<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;


Class UserController extends Controller
{
    private $request;
    public function __construct(Request $request){
        $this->request = $request;
    }


    public function getUsers(){
        $users = User::all();
        return response()->json($users, 200);
    }
}