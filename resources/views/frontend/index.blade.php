@extends('frontend.main')
@section('content')
    <div class="main-wrapper">
        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center">
                <h2 class="heading">DevBlog - A Blog Template Made For Developers</h2>
                <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
                <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div><!--//container-->
        </section>
        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">
                @foreach($all_post as $post)
                <div class="item mb-5">
                    <div class="media">
                        <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{asset('Upload/post/'.$post->image)}}" alt="image">
                        <div class="media-body">
                            <h3 class="title mb-1"><a href="blog-post.html">{{$post->title}}</a></h3>
                            <div class="meta mb-1"> <i class="fa fa-clock-o"> </i> {{date("jS F, Y", strtotime($post->created_at))}} &nbsp  &nbsp  &nbsp   <i class="fa fa-user"> </i> {{$post->author}}  &nbsp  &nbsp  &nbsp<i class="fa fa-tasks"> </i> <a href="#">{{$post->category->category_name}}</a></span></div>
                            <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
                            <a class="more-link" href="blog-post.html">Read more &rarr; </a>
                        </div><!--//media-body-->
                    </div><!--//media-->
                </div>
                @endforeach
                {{$all_post->links()}}
                <nav class="blog-nav nav nav-justified my-5">
                    <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                    <a class="nav-link-next nav-item nav-link rounded" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                </nav>

            </div>
        </section>

        <footer class="footer text-center py-2 theme-bg-dark">

            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Develoaped <i class="fas fa-heart" style="color: #fb866a;"></i> by Abdullah al mahi</small>

        </footer>

    </div>
@endsection

