<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post extends Controller
{
    public function write_post(){
        return view('admin.write_post');
    }
}
