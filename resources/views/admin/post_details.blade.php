@extends('layouts.app')
@section('page_title')
    post
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="mail-box">
                <aside class="sm-side">
                    <div class="user-head">
                        <a href="javascript:;" class="inbox-avatar">
                            <img src="{{asset('admin/img/mail-avatar.jpg')}}" alt="">
                        </a>
                        <div class="user-name">
                            <h5><a href="#">{{$post_details->author}}</a></h5>
                        </div>
                    </div>
                    <div class="inbox-body">
                        <a class="btn btn-compose text-light">
                           {{$post_details->category->category_name}}
                        </a>
                    </div>
                    <ul class="inbox-nav inbox-divider">
{{--                        <img src="{{asset('Upload/post/'.$post_details->image)}}" width="100%">--}}
                        <li class="active">
                            <a href="#"><i class="fa fa-clock-o"></i> {{$post_details->created_at}} </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope-o"></i> Comment </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                        </li>
                        <li>
                            <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="badge badge-info float-right mt-3">30</span></a>
                        </li>
                        <li>
                            <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                        </li>
                    </ul>

                    <div class="inbox-body text-center">
                        <div class="btn-group">
                            <a class="btn btn-sm btn-primary" href="{{route('all_post')}}"><i class="fa fa-reply"></i> Back </a>
                        </div>
                    </div>

                </aside>
                <aside class="lg-side">
                    <div class="inbox-head">
                        <h3 class="text-center"> Post Details </h3>
                    </div>
                    <div class="inbox-body">
                        <div class="heading-inbox row">
                            <div class="col-md-12">
                                <h2> {{$post_details->title}}</h2>
                            </div>
                        </div>

                        <div class="view-mail">
                            <p>{{$post_details->post_details}}</p>
                        </div>
                        <div class="heading-inbox row">
                            <div class="col-md-12">
                                <img src="{{asset('Upload/post/'.$post_details->image)}}" width="100%">
                            </div>
                        </div>
                        <div class="compose-btn pull-left">
                            <a class="btn btn-sm btn-primary" href="{{route('all_post')}}"><i class="fa fa-reply"></i> Back </a>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </section>
@endsection
