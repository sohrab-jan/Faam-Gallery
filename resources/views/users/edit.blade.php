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
        @if (session('success'))
            <div class="alert alert-success">{{session('success') }}</div>
        @endif
        <div class="card bg-black mt-5">
            <div class="card-group">
                <div class="card-header text-bold text-white-50 m-2">
                   <h2> Edit User</h2>
                </div>
            </div>
            <div class="card-group text-white border-width-2 bg-dark">
                <form action="{{ route('user.update',$data->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="card-body col-12">
                        <label>Name</label>
                        <input type="text" name="name" class="form-group text-info bg-transparent" value="{{ $data->name }}">
                        @error('name')<p class="text-danger">Call me by your name</p> @enderror
                    </div>
                    <div class="card-body  col-12">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-group text-info bg-transparent"  value="{{ $data->email }}">
                        @error('email')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="card-body col-12">
                        <label>Password</label>
                        <input type="password" name="password" class="form-group text-info bg-transparent">
                        @error('password')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="card-group col-12">
                        <div class="card-footer">
                            <div></div>
                            <div class="card-group">
                                <button type="submit" class="btn btn-primary py-2  px-5">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
