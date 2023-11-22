@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Printing List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Printing List</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="col-4">
        @if(Session::has('message'))
            <div class="alert alert-success " style="background-color: gray" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr class="" style="background-color: black">
                            <th scope="col">ID</th>
                            <th scope="col">FRAME ID</th>
                            <th scope="col">WIDTH</th>
                            <th scope="col">HEIGHT</th>
                            <th scope="col">PAPER</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">IMG</th>
                            <th scope="col">DELETE</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($printing_list as $printing)
                            <tr>
                                <th scope="row">{{ $printing->id }}</th>
                                <td>{{ $printing->frame_id }}</td>
                                <td>{{ $printing->width }} cm</td>
                                <td>{{ $printing->height }} cm</td>
                                <td>{{ $printing->paper }}</td>
                                <td>{{ $printing->price }}</td>
                                <td>
                                    <img style="height: 100px;" src="{{asset($printing->image)}}">
                                </td>
                                <td>
                                    <a href="{{ route('deleteprinting',$printing->id) }}" class="btn btn-danger">Delete</a>
                                </td>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

@endsection
