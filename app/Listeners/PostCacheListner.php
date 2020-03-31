<?php

namespace App\Listeners;

use App\Model\Post;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PostCacheListner
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {

        cache()->forget('all_post');
        $all_post = Post::with('category')->select('id','category_id','title','post_details','image','status','author','created_at')->ORDERBY('id','DESC')->take(5)->get();
        cache()->forever('all_post',$all_post);

    }
}
