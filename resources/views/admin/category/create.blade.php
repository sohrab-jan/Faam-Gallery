@extends('admin.layout.layout')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">New Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">New Category</li>
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
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">New Category</h3>
                            </div>
                            <form class="forms-sample" action="" method="POST" enctype="multipart/form-data" id="categoryForm" name="categoryForm">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    @error('name')

                                    <p>
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="slug" class="form-control" name="slug" id="slug" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" name="status" id="status">
                                        <option value="1">Active</option>
                                        <option value="0">Block</option>
                                    </select>
                                </div>


                                <button type="submit" class="btn btn-primary me-2">Create</button>
                                <a href="#" ><button class="btn btn-dark">Cancel</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            $("#categoryForm").submit(function (event){
            event.preventDefault();
            var element = $(this);
         $.ajax({
    url: '{{ route("categories.store") }}',
    type: 'post',
    data: element.serializeArray(),
    dataType: 'json',
    success: function (response) {
        var errors = response['errors'];
        if (errors['name']) {
            $("#name").addClass('is-invalid')
                .siblings('p')
                .addClass('invalid-feedback').html(errors['name']);
        } else {

                $("#name").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback').html("");
            }


        if (errors['slug']) {
            $("#slug").addClass('is-invalid')
                .siblings('p')
                .addClass('invalid-feedback').html(errors['slug']);
        } else {

                $("#slug").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback').html("");
            }
        }


})

            });
        </script>
@endsection

