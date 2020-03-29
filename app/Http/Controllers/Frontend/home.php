<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;

class home extends Controller
{
    public function index(){
        $all_post = Post::with('category')->select('id','category_id','title','post_details','image','status','author','created_at')->paginate(5);
        return view('frontend.index',compact('all_post'));
    }
    public function frontend_post_details($id){
        $single_post = Post::find($id);
        return view('frontend.frontend_post_details',compact('single_post'));
    }
}
