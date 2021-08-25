<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
class UserController extends Controller
{
    public function registerUser(Request $r ){
        $user= new Users();
        $user->username=$r->input('username');
        $user->password=Hash::make($r->input('password'));
        $user->gender=$r->input('gender');
        $user->type=$r->input('type');
        $user->cnic=$r->input('cnic');
        $user->contact=$r->input('contact');
        $user->country=$r->input('country');
        $user->city=$r->input('city');
        $user->address=$r->input('address');
        $user->email=$r->input('email');
        $user->save();

        return response()->json( $user);
    }
    public function updateUser(Request $r ){
        $user= new Users();
        $user->username=$r->input('username');
        $user->password=Hash::make($r->input('password'));
        $user->gender=$r->input('gender');
        $user->type=$r->input('type');
        $user->cnic=$r->input('cnic');
        $user->contact=$r->input('contact');
        $user->country=$r->input('country');
        $user->city=$r->input('city');
        $user->address=$r->input('address');
        $user->email=$r->input('email');
        $user->user_id=$r->input('user_id');
        $user->update();

        return response()->json( $user);
    }
}
