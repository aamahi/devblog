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
//        $author = Auth::user()->name;
        $photo = $request->file('image');
        $data = date('DFYhis');
        $rand_number = rand(1,9);
        $image = strtolower($data.$rand_number).".".$photo->getClientOriginalExtension();
        if ($photo->isValid()){
            $photo->storeAs('post',$image);
        }
        $post =[];
        $post['title'] =  $request->title;
        $post['category_id'] =  $request->category_id;
        $post['author'] =  $request->author;
        $post['post_details'] =  $request->post_details;
        $post['image'] =  $image;
//        print_r($post);
        \App\Model\Post::insert([$post]);

        session()->flash('success',"Post Added Sucessfully !");
        return redirect()->back();
    }
}
