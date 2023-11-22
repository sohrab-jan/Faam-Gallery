@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Framing List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Framing List</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="row">


            <table class="table">
                <thead>
                <tr class="" style="background-color: black">
                    <th scope="col">ID</th>
                    <th scope="col">FRAME ID</th>
                    <th scope="col">WIDTH</th>
                    <th scope="col">HEIGHT</th>
                    <th scope="col">MOUNT BOARD</th>
                    <th scope="col">MOUNT COLOR</th>
                    <th scope="col">GLASS</th>
                    <th scope="col">SCALE</th>
                    <th scope="col">IMG</th>
                    <th scope="col">PRINTING ID</th>
                    <th scope="col">price</th>


                </tr>
                </thead>
                <tbody>
                @foreach($framing_list as $framing)
                    <tr>
                        <th scope="row">{{ $framing->id }}</th>

                        <td>{{ $framing->frame_id }}</td>
                        <td>{{ $framing->width }}</td>
                        <td>{{ $framing->height }}</td>
                        <td>{{ $framing->mount_board }} cm</td>
                        <td>{{ $framing->mount_color }}</td>
                        <td>{{ $framing->glass }}mm</td>
                        <td>{{ $framing->scale }}</td>
                        <td>
                            <img style="height: 100px;" src="{{asset($framing->image)}}">
                        </td>
                        <td>{{ $framing->printing_id }}</td>

                        <td>{{ $framing->price }}</td>

                        <td>

                            <a href="{{ route('deleteframing',$framing->id) }}" class="btn btn-danger">Delete</a>
                        </td>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
