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
                            @if(session()->has('success'))

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                            @endif
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
                                            <td>
                                                @if($post->status == 1)
                                                     <a href="{{route('deactive_post',$post->id)}}" class="btn btn-warning"> Active </a>
                                                 @else
                                                    <a href="{{route('active_post',$post->id)}}" class="btn btn-secondary"> Deactive </a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-lg btn-success"> <i class="fa fa-eye"> </i> </a>
                                                <a href="" class="btn btn-lg btn-info"> <i class="fa fa-edit"> </i> </a>
                                                <a href="" class="btn btn-lg btn-danger"> <i class="fa fa-trash-o"> </i> </a>
                                            </td>
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
