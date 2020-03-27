<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    public function  index(){
        $all_category = \App\Model\Category::all();
       return view('admin.category',compact('all_category'));
    }
    public function add_category(Request $request){
        $this->validate($request,[
            'category_name'=>'required | unique:categories,category_name'
        ]);
        \App\Model\Category::create([
            'category_name'=>$request->category_name,
        ]);
        session()->flash('success','Category Add Sucessfully ');
        return redirect()->back();
    }

}
