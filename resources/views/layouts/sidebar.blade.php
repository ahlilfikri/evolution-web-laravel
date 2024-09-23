<link rel="stylesheet" href="css/sidebar.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="sidebar">
    <div class="menu-btn">
        <i class="icon bx bx-chevron-left"></i>
    </div>
    <div class="sidebar-header">
        <img src="img/evolution-logo.png" alt=""> 
        <p>Evolution</p>
    </div>
    <div class="nav">
        <div class="menu">
            <p class="title">Main</p>
            <ul>
                <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="icon bx bx-home-alt-2"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('team') }}">
                        <i class='icon bx bx-group'></i>
                        <span class="text">Team</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i class="icon bx bx-book-content"></i>
                        <span class="text">Document</span>
                        <i class='arrow bx bx-chevron-down'></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <span class="text">Administrative</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="text">Competitions</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="menu">
            <p class="title">Settings</p>
            <ul>
                <li>
                    <a href="#">
                        <i class="icon bx bx-cog"></i>
                        <span class="text">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
        <div class="menu">
            <p class="title">Account</p>
            <ul>
                <li>
                    <a href="{{ route('profile.edit') }}">
                        <i class="icon bx bx-user"></i>
                        <span class="text"> {{ __('Profile') }} </span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf  

                        <a href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        
                            <i class="icon log-out bx bx-log-out"></i>
                            <span class="text log-out">{{ __('Logout') }}</span>
                        </a>
                    </form>
                    
                </li>
            </ul>
        </div>
</div>

<script src="js/sidebar.js"></script>

