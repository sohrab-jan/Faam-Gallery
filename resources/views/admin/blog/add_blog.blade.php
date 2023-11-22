@extends('admin.layout.layout')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">New Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">New Blog</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">


                                <h4 class="card-title"> </h4>
                                <p class="card-description">  </p>
                                <form class="forms-sample" action="{{ route('blog_store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1"> Title</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Title Blog">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1"> Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1"> Email</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Comments</label>
                                        <input type="text" class="form-control" id="comment" name="comment" placeholder="Comments">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleTextarea1">Blog Description</label>
                                        <textarea class="form-control" id="description" name="description" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Upload Blog Image</label>
                                        <input type="file" name="image_blog" class="file-upload-default">
                                        <div class="input-group col-xs-12">

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Add Blog</button>
                                    <button class="btn btn-dark">Cancel</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection

