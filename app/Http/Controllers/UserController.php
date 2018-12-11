<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getUsers(){
        $users = User::all();
    }

    public function getUser($id){
        $user = User::find($id);
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update();
    }

    public function create(Request $request){
        $user = new User();
        $user->save();
    }
}
