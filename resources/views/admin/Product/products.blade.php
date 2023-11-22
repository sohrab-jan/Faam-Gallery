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
                           aria-expanded="false" href="{{ route('products.add') }}">+ Create New Product</a>

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
                            <th scope="col">PRODUCT NAME</th>
                            <th scope="col">IMG</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">WIDTH</th>
                            <th scope="col">HEIGHT</th>
                            <th scope="col">SIZE</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)

                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>
                                    <img style="height: 100px;" src="{{asset($product->image)}}">
                                    <a href="{{route('products.image.edit',$product->id)}}" class="btn btn-primary">Update Image</a>
                                </td>
                                <td>£ {{ $product->price }}</td>
                                <td>{{ $product->width }}</td>
                                <td>{{ $product->height }}</td>
                                <td>{{ $product->size }}</td>

                                <td>
                                    <a href="{{ route('products.edit',$product->id) }}" class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('products.delete',$product->id) }}" class="btn btn-danger">Delete</a>
                                </td>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
