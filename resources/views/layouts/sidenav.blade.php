<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/dashboard"> <i class=" mdi mdi-chart-arc"></i> Inventory</a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                alt="logo" /></a>
    </div>
    <ul class="nav">
        {{-- <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle "
                            src="https://images.unsplash.com/photo-1673363006135-b298da87a3de?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        </h5>
                        <span>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="/profile" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">
                                Account settings
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>

                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li> --}}
        <li class="nav-item nav-category">
            <span class="nav-link">Main</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/dashboard">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer text-primary"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/items">
                <span class="menu-icon">
                    <i class="mdi mdi-mdi mdi-format-list-bulleted text-primary"></i>
                </span>
                <span class="menu-title">Product List</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/category">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play text-primary"></i>
                </span>
                <span class="menu-title">Category List</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/supplier">
                <span class="menu-icon">
                    <i class="mdi mdi-shopping text-primary"></i>
                </span>
                <span class="menu-title">Supplier List</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
                <span class="menu-icon">
                    <i class="mdi mdi-thermometer  text-primary"></i>
                </span>
                <span class="menu-title">Manage Unit</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/sale">
                <span class="menu-icon">
                    <i class="mdi mdi-shopping text-primary"></i>
                </span>
                <span class="menu-title">Sales</span>
            </a>
        </li>
        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Charts</span>
            </a>
        </li> --}}
        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Icons</span>
            </a>
        </li> --}}
        <li class="nav-item nav-category">
            <span class="nav-link">Preferences</span>
        </li>
        <div class="dropdown-divider"></div>

        {{-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                </ul>
            </div>
        </li> --}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="/plans">
                <span class="menu-icon">
                    <i class=" mdi mdi-square-inc-cash text-primary"></i>
                </span>
                <span class="menu-title">Pricing</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
                <span class="menu-icon">
                    <i class="  mdi mdi-information  text-primary"></i>
                </span>
                <span class="menu-title">About</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
                <span class="menu-icon">
                    <i class=" mdi mdi-book-open-page-variant   text-primary"></i>
                </span>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
