@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category List</li>
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
                           aria-expanded="false" href="{{ route('categories.add') }}">+ Create New Category</a>

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
                            <th scope="col">ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Sub Category</th>
                            <th scope="col">Product</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)

                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->subcategory_count }}</td>
                                <td>{{ $category->slug }}</td>

                                <td>
                                    <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('categories.delete',$category->id) }}" class="btn btn-danger">Delete</a>
                                </td>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
