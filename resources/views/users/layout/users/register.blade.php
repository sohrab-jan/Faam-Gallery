<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            font-family: Calibri, Helvetica, sans-serif;
            background-color: whitesmoke;
            width: 100%;
            height: auto;
        }
        .container {

            padding: 78px;
            background-color: whitesmoke;
        }

        input[type=text], input[type=password], textarea, input[type=email] {

            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
           background: transparent;

        }
        input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
            background-color: orange;
            outline: none;
        }
        div {
            padding: 10px 0;
        }
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        .registerbtn {
            background-color: #330101;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;

            opacity: 0.9;
        }
        .registerbtn:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
<section class="px-6 py-8 text-center">
    <main class="container">
        <h1 class="text-center font-bold mb-5 text-xl">Sing up</h1>

        <form method="POST" action="{{route('register ')}}" class="mt-10">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="username"
                >
                    Username *
                </label>

                <input class="border border-gray-400 p-2 col-lg-3"
                       type="text"
                       value="{{ old('name') }}"
                       name="name"
                       id="username"
                       required
                >
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="email"
                >
                    Email *
                </label>

                <input class="border border-gray-400 p-2 col-lg-3"
                       type="email"
                       name="email"
                       id="email"
                       required
                >
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="password"
                >
                    Password *
                </label>

                <input class="border border-gray-400 p-2 col-lg-3"
                       type="password"
                       name="password"
                       id="password"
                       required
                >
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 ">

                <button type="submit"
                        class="registerbtn col-5"
                >
                    Submit
                </button>

            </div>
        </form>
    </main>
</section>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
