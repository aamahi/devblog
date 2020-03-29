<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;

class home extends Controller
{
    public function index(){
        $all_post = Post::with('category')->select('id','category_id','title','post_details','image','status','author','created_at')->simplePaginate(3);
        return view('frontend.index',compact('all_post'));
    }
}
