@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Artist List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Artist List</li>
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
                           aria-expanded="false" href="{{ route('admin.artists.add') }}">+ Create New Artist</a>

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
                <div class="row">


                    <table class="table">
                        <thead>
                        <tr class="" style="background-color: black">
                            <th scope="col">ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">City</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($artists as $artist)

                            <tr>
                                <th scope="row">{{ $artist->id }}</th>
                                <td>{{ $artist->full_name }}</td>
                                <td>{{ $artist->email }}</td>
                                <td>{{ $artist->city }}</td>
                                <td>{{ $artist->phone }}</td>

                                <td>
                                    <a href="{{ route('admin.artists.edit',$artist->id) }}" class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('admin.artists.delete',$artist->id) }}" class="btn btn-danger">Delete</a>
                                </td>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
