@extends('layouts.app')
@section('page_title')
    Category
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
            <section class="card">
                <header class="card-header text-center">
                   Add Categoty
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$error}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif

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
                    <form action="{{route('category')}}" method="post">
                        @csrf
                        <div class="form-row align-items-center">
                            <div class="col-auto col-sm-8">
                                <label class="sr-only" for="category_name">Category Name</label>
                                <input type="text" class="form-control mb-6" name="category_name" id="category_name" placeholder="Categoy Name">
                            </div>

                            <div class="col-auto col-sm-4">
                                <button type="submit" class="btn btn-primary mb-2">Add Category</button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>

        </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header text-center">
                            All Category
                            <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                        </header>
                        <div class="card-body">
                            <div class="adv-table">
                                <table class="display table table-bordered" id="hidden-table-info">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_category as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->category_name}}</td>
                                            <td >
                                                @if($category->status !=0)
                                                    <a href="" class="btn btn-success">Active</a>
                                                @else
                                                    <a href="" class="btn btn-warning">Deactive</a>
                                                @endif
                                            </td>
                                            <td>{{$category->id}}</td>
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
