<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;

class home extends Controller
{
    public function index(){
//        dd(cache('all_post'));
        $all_post = cache('all_post',function (){
                return Post::with('category')->select('id','category_id','title','post_details','image','status','author','created_at')->ORDERBY('id','DESC')->take(5)->get();
        });

//        $all_post = Post::with('category')->select('id','category_id','title','post_details','image','status','author','created_at')->ORDERBY('id','DESC')->paginate(5);

        return view('frontend.index',compact('all_post'));
    }



    public function frontend_post_details($id){
        $single_post = Post::find($id);
        return view('frontend.frontend_post_details',compact('single_post'));
    }
}
