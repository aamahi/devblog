<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class Post extends Controller
{
    public function write_post(){
        $categories = \App\Model\Category::select('id','category_name','status')->get();
        return view('admin.write_post',compact('categories'));
    }
    public function submit_post(PostRequest $request){
        $photo = $request->file('image');
        $data = date('DFYhis');
        $rand_number = rand(1,9);
        $image = strtolower($data.$rand_number).".".$photo->getClientOriginalExtension();
        if ($photo->isValid()){
            $photo->storeAs('post',$image);
        }
    }
}
