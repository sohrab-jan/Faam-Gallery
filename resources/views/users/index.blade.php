@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users List</li>
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
    <div class="container mt-5">
        @if (session('message'))
            <div class="alert alert-success">{{session('message') }}</div>
        @endif
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $key => $val)
                <tr>
                    <th scope="row">{{++$key}}1</th>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->email }}</td>
                    <td>
                        <a href="{{ route('user.edit',$val->id) }}" class="btn btn-secondary">Edit</a>
                        <a href="{{ route('user.show',$val->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                    @endforeach
                </tr>

                </tbody>
            </table>

    </div></div>
</section>>

@endsection
