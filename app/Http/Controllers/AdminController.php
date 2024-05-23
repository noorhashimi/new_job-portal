<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function LogOut(){
        Auth::logout();
        return Redirect()->route('login')->with('success','user logout ');
    }
}
