<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'title',
        'category_id',
        'author',
        'post_details',
        'image',
    ];

//    protected $dates = [
//        'created_at',
//        'updated_at',
//        // your other new column
//    ];
    public function category(){
        return $this->hasOne('App\Model\Category','id','category_id');
    }

}
