@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add New Artist</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add New Artist</li>
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
                        <div class="card-body" style="z-index: 111!important;">
                            @if ($errors->any())
                                <div class="alert alert-danger" style="z-index: 10000">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <form class="forms-sample" action="{{ route('admin.artists.store') }}" method="POST">
                                @csrf
                                <div class="form-group">

                                    <label for="first_name">Last Name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" required value="{{ old('first_name') }}" name="first_name" id="first_name" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" required value="{{ old('last_name') }}" name="last_name" id="last_name" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email<span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" required value="{{ old('email') }}" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="city">City<span style="color: red">*</span> </label>
                                    <input type="text" class="form-control"  value="{{ old('city') }}" name="city" id="city" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone<span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" required value="{{ old('phone') }}" name="phone" id="phone" placeholder="Phone">
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
