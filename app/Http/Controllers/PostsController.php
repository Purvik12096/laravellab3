<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
   public function logout (Auth $Auth) {
    //logout user
    auth()->logout();
    // redirect to homepage
    return view('posts/welcome');
   }

}
