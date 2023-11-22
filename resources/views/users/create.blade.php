<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="section">
    <div class="container">
@if (session('success'))
            <div class="alert alert-success">{{session('success') }}</div>
        @endif
        <div class="card bg-black mt-5">
            <div class="card-group">
                <div class="card-header text-bold  text-bold text-white-50 m-2">
                    <h2> Create User</h2>
                </div>
            </div>
            <div class="card-group text-white border-width-2 bg-dark">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="card-body col-12">
                        <label>Name</label>
                        <input type="text" name="name" class="form-group">
                    @error('name')<p class="text-danger">Call me by your name</p> @enderror
                    </div>
                        <div class="card-body col-12">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-group">
                            @error('email')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="card-body col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-group">
                            @error('password')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                    <div class="card-group col-12">
                    <div class="card-footer">
                        <div></div>
                        <div class="card-group">
                            <button type="submit" class="btn btn-primary py-2  px-5">Register</button>
                        </div>
                        <div class="text-center">
                            <a type="submit" class="small"  class="btn btn-primary py-2  px-5">login</a>
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
