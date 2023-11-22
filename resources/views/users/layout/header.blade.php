<nav class="main-header justify-content-end navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

        <li class="nav-item d-none d-sm-inline-block">
            @auth
            <a href="" class="nav-link">Welcome Dear {{auth()->user()->name}}@endauth</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">

            <a href="" class="nav-link">{{config('app.name')}}</a>

        </li>
    </ul>

</nav>
<!-- /.navbar -->
