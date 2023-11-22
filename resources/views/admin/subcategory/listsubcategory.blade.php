@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Sub Category List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sub Category List</li>
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
                           aria-expanded="false" href="{{ route('addsubcategory') }}">+ Create New Sub Category</a>

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
                            <th scope="col">Sub Category Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Product</th>
                            <th scope="col">Actions</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allsubcategories as $subcategory)

                            <tr>
                                <th scope="row">{{ $subcategory->id }}</th>
                                <td>{{ $subcategory->subcategory_name }}</td>
                                <td>{{ $subcategory->name }}</td>
                                <td>{{ $subcategory->product_count }}</td>
                                <td>
                                    <a href="{{ route('editsubcat',$subcategory->id) }}" class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('deletesubcat',$subcategory->id), $subcategory->category_id }}" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
