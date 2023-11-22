@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">New Artwork</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">New Artwork</li>
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
                   <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">New Artwork</h3>
                            </div>


                            <form class="forms-sample" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Title">
                        @error('title')

                        <p>
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="number" class="form-control" name="price" id="exampleInputEmail3" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="file" class="file-upload-default">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="des" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
                </div>
            </div>
        </section>


@endsection



{{--    <h1 class="mb-0">Add Book</h1>--}}
{{--    <hr />--}}
{{--    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        <div class="row mb-3">--}}
{{--            <div class="col">--}}

{{--                <input type="text" name="title" class="form-control"  placeholder="Title">--}}
{{--                @error('title')--}}

{{--                <p>--}}
{{--                    {{ $message }}--}}
{{--                </p>--}}

{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <input type="text" name="price" class="form-control" placeholder="Price">--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row mb-3">--}}
{{--            <div class="col">--}}
{{--                <input type="text" name="product_code" class="form-control" placeholder="Product Code">--}}
{{--            </div>--}}
{{--            <div class="row mb-3">--}}
{{--                <div class="col">--}}
{{--                    <img src="" alt="" class="img-product" />--}}
{{--                    <input type="file" name="image" accept="image/*" class="form-control">--}}
{{--                </div>--}}
{{--            <div class="col">--}}
{{--                <textarea type="text" name="description" class="form-control" placeholder="Description"></textarea>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="d-grid">--}}
{{--                <button class="btn btn-primary">Submit</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--@endsection--}}
