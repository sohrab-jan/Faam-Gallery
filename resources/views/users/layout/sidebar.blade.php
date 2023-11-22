<aside class="main-sidebar sidebar-dark-primary elevation-4 w3-sidebar w3-bar-block py-2 w3-black w3-bar-block">
    <a href="index3.html" class="brand-link">
        <img src="{{asset('assets/img/FaamLogo.png')}}" alt="Faam Logo" class="brand-image">

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="admin-panel mt-1 pb-3 mb-3 d-flex">
            <a href="index.html" class="logo me-auto">
                <img src="" alt=""></a>

        </div>
        <nav class="mt-0">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <!-- If you want for same nav item in li class menu-open -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
            Profile

                        </p></a></li></ul>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <!-- If you want for same nav item in li class menu-open -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-shopping-bag"></i>
                            <p>Orders
                            </p></a></li></ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <!-- If you want for same nav item in li class menu-open -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-envelope"></i>
                                <p>Messages</i>
                                </p></a></li></ul>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                            <!-- If you want for same nav item in li class menu-open -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-phone"></i>
                                    <p>Contact</i>
                                    </p></a></li></ul>
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
                                     with font-awesome or any other icon font library -->
                                <!-- If you want for same nav item in li class menu-open -->
                                <li class="nav-item">
                                    @auth
                                    <a href="{{ route('logout') }}" class="nav-link">
                                        <i class="nav-icon fa fa-power-off"></i>
                                        <p>Logout</i>
                                         </p></a>

                                </li>
                                      @endauth
                            </ul>
                            </ul>
</aside>
