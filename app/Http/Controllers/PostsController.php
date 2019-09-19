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

   public function store(Request $request)
	{
      // You can view all records in $request by simply displaying using: echo $request;
      //Create a new post using request data
      $post=new \App\Post;
      $post->title = $request->get('ptitle');
      $post->body = $request->get('pbody');
      //Save it to the database
      $post->save();
      //Redirect to viewallposts page with success message
      $msg_success='Successfully added new post!';
      return redirect('posts/viewallposts')->with('status', $msg_success);
  }


}
