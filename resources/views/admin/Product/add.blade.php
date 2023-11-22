@extends('admin.layout.layout')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">New Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">New Product</li>
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
                                <form class="forms-sample" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1"> Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1"> Artist</label>
                                        <select class="form-control" id="artist_id" name="artist_id">
                                            @foreach($artists as $artist)
                                                <option value="{{ $artist->id }}">{{ $artist->full_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1"> Width</label>
                                        <input type="text" name="width" class="form-control" id="width" placeholder="Width">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1"> Height</label>
                                        <input type="text" name="height" class="form-control" id="height" placeholder="Height">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1"> Size</label>
                                        <input type="text" name="size" class="form-control" id="size" placeholder="S">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Price</label>
                                        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Product Quantity</label>
                                        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Product Short Description</label>
                                        <textarea class="form-control" id="product_short_des" name="product_short_des" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Product Long Description</label>
                                        <textarea class="form-control" id="product_long_des" name="product_long_des" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Select Category</label>
                                        <select class="form-control" id="category_id" name="category_id">
                                            <option selected>Select Product Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Product Image</label>
                                        <input type="file" name="image" class="file-upload-default">
                                        <div class="input-group col-xs-12"></div>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Add Product</button>
                                    <button class="btn btn-dark">Cancel</button>

                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection

