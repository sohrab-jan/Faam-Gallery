@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Blog List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blog List</li>
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
                    <div class="col-lg-3 m-4 col-md-4">
                        <a class="nav-link btn btn-success create-new-button" style="background-color: #2A00FF" id="createbuttonDropdown" data-bs-toggle="dropdown"
                           aria-expanded="false" href="{{ route('add_blogs') }}">+ Create New Blog</a>

                    </div>

                    <hr/>
                    @if(Session::has('message'))
                        <div class="alert alert-success " style="background-color: gray" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                </div>
                <div class="row">


                    <table class="table">
                        <thead>
                        <tr class="" style="background-color: black">
                            <th scope="col" class="col-1">ID</th>
                            <th scope="col" class="col-1">Name</th>
                            <th scope="col" class="col-2">Blog Image</th>
                            <th scope="col" class="col-2">Blog Title</th>
                            <th scope="col" class="col-2">Description</th>
                            <th scope="col" class="col-2">Email</th>
                            <th scope="col" class="col-2">ACTIONS</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_blogs as $all_blog)
                            <tr>
                                <th scope="row">{{ $all_blog->id }}</th>
                                <td>{{ $all_blog->name }}</td>
                                <td>
                                    <img style="height: 80px;" src="{{asset($all_blog->image_blog)}}">
                                    <a href="{{route('edit_blog_img',$all_blog->id)}}" class="btn btn-primary">Update Image</a>
                                </td>
                                <td>{{ $all_blog->title }}</td>
                                <td class="col-3">{{ $all_blog->description }}</td>
                                <td>{{ $all_blog->email }}</td>
                                <td>
                                    <a href="{{ route('edit_blog',$all_blog->id) }}" class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('delete_blog',$all_blog->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
