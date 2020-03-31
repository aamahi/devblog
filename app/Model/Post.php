<?php

namespace App\Model;

use App\Events\PostCreated;
use App\Events\PostDeleted;
use App\Events\PostUpdated;
use App\Http\Controllers\Frontend\home;
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
    protected $dispatchesEvents =[
        'created'=>  PostCreated::class,
        'deleted'=>  PostDeleted::class,
        'updated'=>  PostUpdated::class,
    ];
}
