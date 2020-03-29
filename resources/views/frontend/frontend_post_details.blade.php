@extends('frontend.main')
@section('content')
    <div class="main-wrapper">

        <article class="blog-post px-3 py-5 p-md-5">
            <div class="container">
                <header class="blog-post-header">
                    <h2 class="title mb-2">{{$single_post->title}}</h2>
                    <div class="meta mb-3">
                        <i class="fa fa-clock-o"> </i> {{date("jS F, Y", strtotime($single_post->created_at))}} &nbsp  &nbsp  &nbsp <i class="fa fa-user"> </i> {{$single_post->author}}  &nbsp  &nbsp  &nbsp<i class="fa fa-tasks"> </i> <a href="#">{{$single_post->category->category_name}}</a>
                    </div>
                </header>

                <div class="blog-post-body">
                    <figure class="blog-banner">
                        <a href="https://made4dev.com"><img class="img-fluid" src="{{asset('Upload/post/'.$single_post->image)}}" alt="image"></a>
                    </figure>
                    <p>{!! $single_post->post_details !!}</p>
                </div>

            </div><!--//container-->
        </article>
        <footer class="footer text-center py-2 theme-bg-dark">

            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Develoaped <i class="fas fa-heart" style="color: #fb866a;"></i> by Abdullah al mahi</small>

        </footer>
    </div>
@endsection

