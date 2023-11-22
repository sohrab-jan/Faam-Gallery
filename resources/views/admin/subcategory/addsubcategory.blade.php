@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Sub Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Sub Category </li>
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
                    <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            @if(Session::has('message'))
                                <div class="alert alert-success " style="background-color: gray" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif

                            <form class="forms-sample" action="{{ route('storesubcategory') }}" method="POST" enctype="multipart/form-data">
                               @csrf
                                <div class="form-group">
                                    <label for="name">Sub Category Name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" name="subcategory_name" id="subcategory_name" placeholder="Subcategory Name">
                                </div>

                                <div class="form-group">
                                    <label for="status">Select Category <span style="color: red">*</span></label>
                                    <select class="form-control form-select" name="category_id" id="category_id" aria-label="Default select example" >
                                        <option selected>Open this select menu</option>
                                        @foreach($categories as $category)
                                        <option  value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <button type="submit" class="btn btn-primary me-2">Add Sub Category</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
