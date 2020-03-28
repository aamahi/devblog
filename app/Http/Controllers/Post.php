<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        return redirect()->route('all_post');
    }
    public function all_post(){
        $all_post = \App\Model\Post::with('category')->select('id','category_id','title','post_details','image','status','author','created_at')->get();
        return view('admin.post',compact('all_post'));
    }

    public function deactive_post($id){
        $deactive_post =  \App\Model\Post::find($id);
        $deactive_post->status = '0';
        $deactive_post->save();
        return redirect()->back();
    }

    public function active_post($id){
        $active_post = \App\Model\Post::find($id);
        $active_post->status = '1';
        $active_post->save();
        return redirect()->back();
    }
    public function post_details($id){
        $post_details = \App\Model\Post::find($id);
        return view('admin.post_details',compact('post_details'));
    }
}
