@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Sub Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product Image </li>
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

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form class="forms-sample" action="{{ route('products.image.update',$product)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
{{--                                    @method('PUT')--}}
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <div class="form-group">
                                        <label>Previous Image</label>
                                        <div class="col-sm-10">
                                            <img src="{{ asset($product->image) }}">
                                            <div class="input-group col-xs-12"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-form-label">Upload New Image</label>
                                            <input type="file" name="image" class="file-upload-default">
                                            <div class="input-group col-xs-12"></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Update Product Image</button>
                                    <button class="btn btn-dark">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
