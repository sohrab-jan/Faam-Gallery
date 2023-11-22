@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Artworks List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Artworks List</li>
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
                           aria-expanded="false" href="{{ route('addexhibition') }}">+ Create New Exhibition</a>

                    </div>

                    <hr/>
                    @if(Session::has('message'))
                        <div class="alert alert-success " style="background-color: gray" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                </div>
                <div class="row">


                    <table class="table">
                        <thead>
                        <tr class="" style="background-color: black">
                            <th scope="col">ID</th>
                            <th scope="col">EXHIBITION NAME</th>
                            <th scope="col">Upcoming Title</th>
                            <th scope="col">IMG</th>
                            <th scope="col">Artist Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Short Des</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($exhibitions as $exhibition)

                            <tr>
                                <th scope="row">{{ $exhibition->id }}</th>
                                <td>{{ $exhibition->exhibition_name }}</td>
                                <td>{{ $exhibition->upcoming_title }}</td>
                                <td>
                                    <img style="height: 100px;" src="{{asset($exhibition->image_exhibition)}}">
                                    <a href="{{route('editexhibitionimg',$exhibition->id)}}" class="btn btn-primary">Update Image</a>
                                </td>
                                <td>{{ $exhibition->artist }}</td>
                                <td>{{ $exhibition->date }}</td>
                                <td style="width: 300px;">{{ $exhibition->exhibition_short_des }}</td>
                                <td>
                                    <a href="{{ route('editexhibition',$exhibition->id) }}" class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('deleteexhibition',$exhibition->id) }}" class="btn btn-danger">Delete</a>
                                </td>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
