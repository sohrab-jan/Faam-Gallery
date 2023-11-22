@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Exhibition</li>
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
                                <form class="forms-sample" action="{{ route('updateexhibition') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$exhibition_info->id}}" name="id">
                                    <div class="form-group">
                                        <label for="exampleInputName1"> Upcoming Exhibition Title</label>
                                        <input type="text" name="upcoming_title" class="form-control" id="upcoming_title" value="{{ $exhibition_info->upcoming_title }}" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Exhibition Name</label>
                                        <input type="text" name="exhibition_name" class="form-control" id="exhibition_name" value="{{ $exhibition_info->exhibition_name }}" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Artist Name</label>
                                        <input type="text" name="artist" class="form-control" id="name" value="{{ $exhibition_info->artist }}" placeholder="Artist">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $exhibition_info->title }}" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Date</label>
                                        <input type="text" name="date" class="form-control" id="heigth" value="{{ $exhibition_info->date }}" placeholder="Date">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Exhibition Short Description</label>
                                        <textarea class="form-control" id="product_short_des" name="exhibition_short_des" rows="4">
                                            {{ $exhibition_info->exhibition_short_des }}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Exhibition Long Description</label>
                                        <textarea class="form-control" id="product_long_des" name="exhibition_long_des" cols="30" rows="10">
                                            {{ $exhibition_info->exhibition_long_des }}
                                        </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Edit Product</button>
                                    <button class="btn btn-dark">Cancel</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection

