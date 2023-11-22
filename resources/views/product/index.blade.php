@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Artworks</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Artworks</li>
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
            <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown"
               aria-expanded="false" href="{{ route('product.create') }}">+ Create New Product</a>

        </div>

        <hr/>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>
    <div class="row">


        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
                <th scope="col">photo</th>
                <th scope="col">manage</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $key => $val)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{ $val->title }}</td>
                    <td>{{ $val->price }}</td>
                    <td>{{ $val->description }}</td>
                    <td>{{ $val->image }}</td>
                    <td>
                        <a href="{{ route('product.edit',$val->id) }}" class="btn btn-secondary">Edit</a>
                        <a href="{{ route('product.show',$val->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                    @endforeach
                </tr>

            </tbody>
        </table>
    </div>
    </div>

@endsection
