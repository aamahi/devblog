@extends('layouts.app')
@section('page_title')
    Category
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <section class="card">
                        <header class="card-header head-border text-center">
                           Write a Post
                        </header>
                        <div class="card-body">
                            <form class="{{route('write_post')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label"> Title </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="title" type="text" placeholder="Post Title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label"> Author </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" disabled name="author" type="text" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label"> Category </label>
                                    <div class="col-sm-10">
                                        <select name="category_id" class="form-control">
                                            <option disabled selected> Select Category </option>
                                            @foreach($categories as $category)
                                                @if(($category->status)==1)
                                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Post Details</label>
                                    <div class="col-sm-10">
{{--                                        <div class="">Write your Post Details</div>--}}
                                        <textarea class="summernote col-sm-10" name="post_details" id="" cols="30" rows="10">
                                            Write Your Post Details
                                        </textarea>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label"> Post Image </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="image" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label"></label>
                                    <div class="col-sm-4">
                                        <input class="btn btn-primary btn-lg" id="focusedInput" type="submit" >
                                    </div>
                                    <label class="col-sm-6 col-sm-6 control-label"></label>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
