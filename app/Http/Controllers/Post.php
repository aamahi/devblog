<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post extends Controller
{
    public function write_post(){
        $categories = \App\Model\Category::select('id','category_name','status')->get();
        return view('admin.write_post',compact('categories'));
    }
    public function submit_post(Request $request){
        return $request->all();
    }
}
