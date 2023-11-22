@extends('admin.layout.layout')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Frame Assets List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Frame Assets List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <hr />
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
                            <th scope="col">name</th>
                            <th scope="col">picture</th>
                            <th scope="col">side</th>
                            <th scope="col">face</th>
                            <th scope="col">wide</th>
                            <th scope="col">deep</th>
                            <th scope="col">pm</th>
                            <th scope="col">alt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($frame_assets as $f_obj)
                        <tr>
                            <td>{{ $f_obj->id }}</td>
                            <td>{{ $f_obj->name }}</td>
                            <td>{{ $f_obj->picture }}</td>
                            <td><img src="{{asset( $f_obj->side) }}" width="50px" height="50px" /></td>
                            <td><img src="{{asset( $f_obj->face) }}" width="50px" height="50px" /></td>
                            <td>{{ $f_obj->wide }}mm</td>
                            <td>{{ $f_obj->deep }}mm</td>
                            <td>€{{ $f_obj->pm }}</td>
                            <td>{{ $f_obj->alt }}</td>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @endsection
