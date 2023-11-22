@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category Add</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category Add</li>
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


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="forms-sample" action="{{ route(('categories.store')) }}" method="POST" enctype="multipart/form-data">
                               @csrf
                                <div class="form-group">
                                    <label for="name">Category Name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" required value="{{ old('name') }}" name="name" id="name" placeholder="Name">
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label for="slug">Slug <span style="color: red">*</span></label>--}}
{{--                                    <input type="slug" class="form-control" required value="{{ old('slug') }}" name="slug" id="slug" placeholder="Slug Ex. url">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="status">Status <span style="color: red">*</span></label>--}}
{{--                                    <select name="status" class="form-control" name="status" id="status" required>--}}
{{--                                        <option {{ (old('status') == 0) ? 'selected' : '' }} value="1">Active</option>--}}
{{--                                        <option  {{ (old('status') == 1) ? 'selected' : '' }} value="0">Block</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="slug">Meta Title <span style="color: red">*</span> </label>--}}
{{--                                    <input type="text" class="form-control" required value="{{ old('meta_title') }}" name="meta_title" id="meta" placeholder="Meta Title">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleTextarea1">Meta Description</label>--}}
{{--                                    <textarea class="form-control" id="exampleTextarea1" name="meta_description" value="{{ old('meta_description') }}" rows="4"></textarea>--}}
{{--                                </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="slug">Meta Keywords </label>--}}
{{--                                        <input type="text" class="form-control" required value="{{ old('meta_keywords') }}" name="meta_keywords" id="meta" placeholder="Meta Keywords">--}}
{{--                                    </div>--}}
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
