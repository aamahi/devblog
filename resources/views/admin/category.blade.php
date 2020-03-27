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
                </header>
                <div class="card-body">
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-auto col-sm-5">
                                <label class="sr-only" for="inlineFormInput">Category Name</label>
                                <input type="text" class="form-control mb-6" id="inlineFormInput" placeholder="Jane Doe">
                            </div>
                            <div class="col-auto col-sm-5">
                                <label class="sr-only" for="inlineFormInput">Category Name</label>
                                <input class="form-control mb-6" id="inlineFormInput" value="{{Auth::user()->name}}" disabled>
                            </div>

                            <div class="col-auto col-sm-2">
                                <button type="submit" class="btn btn-primary mb-2">Add Category</button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>

        </div>
    </div>
        </section>
    </section>
@endsection
