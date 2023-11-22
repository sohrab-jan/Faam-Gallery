@extends('admin.layout.layout')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">New Exhibition</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">New Exhibition</li>
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
                                <form class="forms-sample" action="{{ route('store-exhibition') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Upcoming Exhibition Title</label>
                                        <input type="text" name="upcoming_title" class="form-control" id="upcoming_title" placeholder="Upcoming Exhibition Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Exhibition Name</label>
                                        <input type="text" name="exhibition_name" class="form-control" id="name" placeholder="Exhibition Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1"> Artist Name</label>
                                        <input type="text" name="artist" class="form-control" id="artist" placeholder="Artist">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Date</label>
                                        <input type="text" class="form-control" id="date" name="date" placeholder="Date">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Exhibition Description</label>
                                        <textarea class="form-control" id="exhibition_short_des" name="exhibition_short_des" rows="4" placeholder=" Exhibition Short Description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Exhibition Long Description</label>
                                        <textarea class="form-control" id="exhibition_long_des" name="exhibition_long_des" cols="30" rows="10" placeholder="Exhibition Long Description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Upload Exhibition Image</label>
                                        <input type="file" name="image_exhibition" class="file-upload-default">
                                        <div class="input-group col-xs-12">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Exhibition Image</label>
                                        <input type="file" name="image_artist" class="file-upload-default">
                                        <div class="input-group col-xs-12">

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Add Exhibition</button>
                                    <button class="btn btn-dark">Cancel</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection

