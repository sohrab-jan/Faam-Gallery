@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Contact List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact List</li>
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

                        @if (session('message'))
                            <div class="alert alert-success">{{session('message') }}</div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr class="" style="background-color: #0a0a0a;">
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Company Name</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">City</th>
                                <th scope="col">Artist</th>
                                <th scope="col">Collector</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allcontacts as $contact => $val)
                                <tr>
                                    <th scope="row">{{++$contact}}</th>
                                    <td>{{ $val->fname }}</td>
                                    <td>{{ $val->lname }}</td>
                                    <td>{{ $val->email }}</td>
                                    <td>{{ $val->phone }}</td>
                                    <td>{{ $val->company_name }}</td>
                                    <td>{{ $val->service_name }}</td>
                                    <td>{{ $val->city }}</td>
                                    <td>{{ $val->artist }}</td>
                                    <td>{{ $val->collector }}</td>
                                    <td>{{ $val->message }}</td>
                                    <td>
                                        <a href="{{ route('deletecontact',$val->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>

                    </div>
            </div>
        </section>

@endsection
