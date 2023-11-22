@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Blog Image</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Blog Image </li>
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
                    <div class="col-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                @if(Session::has('message'))
                                    <div class="alert alert-success " style="background-color: gray" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form class="forms-sample" action="{{ route('update_img_blog') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $blog_info->id }}" name="id">
                                    <div class="form-group">
                                        <label>Previous Image</label>
                                        <div class="col-sm-8">
                                            <img src="{{ asset($blog_info->image_blog) }}" class="container-fluid">

                                            <div class="input-group col-xs-8">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-form-label">Upload New Image</label>


                                            <input type="file" name="image_blog" class="file-upload-default">
                                            <div class="input-group col-xs-12">

                                            </div>



                                            <button type="submit" class="btn btn-primary me-2">Update Blog Image</button>
                                            <button class="btn btn-dark">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
