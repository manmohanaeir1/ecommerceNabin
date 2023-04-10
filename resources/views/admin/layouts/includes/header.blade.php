	<!-- Header -->
    <div class="header">
			
        <!-- Logo -->
        <div class="header-left">
            <a href="{{route('dashboard.index')}}" class="logo">
                <img src="/back-end/img/logo.png" width="40" height="40" alt="">
            </a>
        </div>
        <!-- /Logo -->
        
        <a id="toggle_btn" href="javascript:void(0);">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>
        
        <!-- Header Title -->
        <div class="page-title-box">
            <h3>Ecommerce</h3>
        </div>
        <!-- /Header Title -->
        
        <a id="mobile_btn" class="mobile_btn" href="index.html#sidebar"><i class="fa fa-bars"></i></a>
        
        <!-- Header Menu -->
        <ul class="nav user-menu">
        
            <!-- Search -->
            <li class="nav-item">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                   </a>
                    <form action="search.html">
                        <input class="form-control" type="text" placeholder="Search here">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </li>
            <!-- /Search -->
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="index.html#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
                    <span class="status online"></span></span>
                    <span>Admin</span>
                </a>
                <div class="dropdown-menu">
                   <!-- Responsive Settings Options -->
        <div class="pt-3 pb-1 border-t border-gray-200">
            <div class="px-3">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
            </li>
        </ul>
        <!-- /Header Menu -->
        
        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="index.html#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a>
                <a class="dropdown-item" href="login.html">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->
        
    </div>
    <!-- /Header -->