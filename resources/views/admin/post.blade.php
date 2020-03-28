@extends('layouts.app')
@section('page_title')
    post
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header text-center">
                                All Post
                        </header>
                        <div class="card-body">
                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>Image </th>
                                        <th>Name</th>
                                        <th>Category </th>
                                        <th>Author </th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_post as $post)
                                        <tr>
                                            <td><img src="{{asset('Upload/post/'.$post->image)}}" width="90"></td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->category->category_name}}</td>
                                            <td>{{$post->author}}</td>
                                            <td>{{$post->author}}</td>
                                            <td>{{$post->created_at}}</td>
                                        </tr>
                                     @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
