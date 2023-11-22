@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Services List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Services List</li>
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
                           aria-expanded="false" href="{{ route('admin.services.add') }}">+ Create New Service</a>

                    </div>

                    <hr/>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="table-responsive row">
                    <table class="table table-striped">
                        <thead>
                        <tr class="" style="background-color: black">
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Active</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <th scope="row">{{ $service->id }}</th>
                                <td>{{ $service->title }}</td>
                                <td>
                                    <a href="{{$service->image}}" data-lightbox="image-group" data-title="{{$service->title}}">
                                        <img src="{{asset($service->image)}}" alt="{{$service->title}}" class="img-fluid" style="max-width: 20%;">
                                    </a>
                                </td>
                                <td>{{ $service->is_active ? 'Active' : 'Disable'}}</td>
                                <td>
                                    <a href="{{ route('admin.services.edit',$service->id) }}" class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('admin.services.delete',$service->id) }}" class="btn btn-danger">Delete</a>
                                </td>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
