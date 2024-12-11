<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
    <script>
        var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages-->
                    <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1"
                            href="{{ url('admin/dashboard') }}">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon">
                                </div><span class="nav-link-icon"><span data-feather="pie-chart"></span></span>
                                <span
                                    class="nav-link-text">Home</span>
                            </div>
                        </a>
                        
                    </span>
                </li>

            @if(Auth::user()->role_as == '1')

            </span><!-- parent pages--><span class="nav-item-wrapper"><a
                class="nav-link dropdown-indicator label-1" href="#users" role="button"
                data-bs-toggle="collapse" aria-expanded="false" aria-controls="users">
                <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                        class="nav-link-icon"><span data-feather="users"></span></span><span
                        class="nav-link-text">User Management</span>
                </div>
            </a>
            <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="users">
                    <p class="collapsed-nav-item-title d-none">User Management</p>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Users</span>
                            </div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/roles') }}"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Roles</span></div>
                        </a><!-- more inner pages-->
                    </li>
                </ul>
            </div>
            @endif

            </span><!-- parent pages--><span class="nav-item-wrapper"><a
                class="nav-link dropdown-indicator label-1" href="#bookings" role="button"
                data-bs-toggle="collapse" aria-expanded="false" aria-controls="bookings">
                <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                        class="nav-link-icon"><span data-feather="columns"></span></span><span
                        class="nav-link-text">Bookings</span>
                </div>
            </a>
            <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="bookings">
                    <p class="collapsed-nav-item-title d-none">Room</p>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/bookings') }}" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Offline Bookings</span>
                            </div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/online-bookings') }}"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Online Bookings</span></div>
                        </a><!-- more inner pages-->
                    </li>
                </ul>
            </div>

                <li class="nav-item">
                    <!-- parent pages-->
                    <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1"
                            href="{{ url('admin/orders') }}">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon">
                                </div><span class="nav-link-icon"><span data-feather="layout"></span></span>
                                <span
                                    class="nav-link-text">Orders</span>
                            </div>
                        </a>
                        
                    </span>
                </li>

                <li class="nav-item">
                    <!-- parent pages-->
                    <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1"
                            href="{{ url('admin/customers') }}">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon">
                                </div><span class="nav-link-icon"><span data-feather="user-plus"></span></span>
                                <span
                                    class="nav-link-text">Customers</span>
                            </div>
                        </a>
                        
                    </span>
                </li>

                <li class="nav-item">
                    <!-- parent pages-->
                    <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1"
                            href="{{ url('admin/employees') }}">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon">
                                </div><span class="nav-link-icon"><span data-feather="user-check"></span></span>
                                <span
                                    class="nav-link-text">Employee</span>
                            </div>
                        </a>
                        
                    </span>
                </li>

            </span><!-- parent pages--><span class="nav-item-wrapper"><a
                class="nav-link dropdown-indicator label-1" href="#payments" role="button"
                data-bs-toggle="collapse" aria-expanded="false" aria-controls="payments">
                <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                        class="nav-link-icon"><span data-feather="credit-card"></span></span><span
                        class="nav-link-text">Payments</span>
                </div>
            </a>
            <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="payments">
                    <p class="collapsed-nav-item-title d-none">Payments</p>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/banks') }}" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Banks</span>
                            </div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/payment-options') }}"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Payments Options</span></div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/online-bookings') }}"
                        data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Online Payments History</span></div>
                    </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/payments/create') }}"
                        data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Add Payment</span></div>
                    </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/payments') }}"
                        data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Offline Payments History</span></div>
                    </a><!-- more inner pages-->
                </li>
                </ul>
            </div>

                <li class="nav-item">
                    <!-- parent pages-->
                    <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1"
                            href="{{ url('admin/expenses') }}">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon">
                                </div><span class="nav-link-icon"><span data-feather="hard-drive"></span></span>
                                <span
                                    class="nav-link-text">Expenses</span>
                            </div>
                        </a>
                        
                    </span>
                </li>


            </span><!-- parent pages--><span class="nav-item-wrapper"><a
                class="nav-link dropdown-indicator label-1" href="#rooms" role="button"
                data-bs-toggle="collapse" aria-expanded="false" aria-controls="rooms">
                <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                        class="nav-link-icon"><span data-feather="layers"></span></span><span
                        class="nav-link-text">Room</span>
                </div>
            </a>
            <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="rooms">
                    <p class="collapsed-nav-item-title d-none">Room</p>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/room-types') }}" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Room Types</span>
                            </div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/rooms') }}"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Rooms</span></div>
                        </a><!-- more inner pages-->
                    </li>
                </ul>
            </div>


            <li class="nav-item">
                <!-- parent pages-->
                <span class="nav-item-wrapper">
                    <a class="nav-link dropdown-indicator label-1"
                        href="{{ url('admin/items') }}">
                        <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon">
                            </div><span class="nav-link-icon"><span data-feather="book"></span></span>
                            <span
                                class="nav-link-text">Items</span>
                        </div>
                    </a>
                    
                </span>
            </li>

            @if(Auth::user()->role_as == '1')
            </span><!-- parent pages--><span class="nav-item-wrapper"><a
                class="nav-link dropdown-indicator label-1" href="#settings" role="button"
                data-bs-toggle="collapse" aria-expanded="false" aria-controls="settings">
                <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                        class="nav-link-icon"><span data-feather="credit-card"></span></span><span
                        class="nav-link-text">Settings</span>
                </div>
            </a>
            <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="settings">
                    <p class="collapsed-nav-item-title d-none">Settings</p>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/settings') }}" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">General Settings</span>
                            </div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/brandings') }}"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Brandings</span></div>
                        </a><!-- more inner pages-->
                    </li>
                    
                </ul>
            </div>
            @endif

            <li class="nav-item">
                <!-- parent pages-->
                <span class="nav-item-wrapper">
                    
                    <a class="nav-link dropdown-indicator label-1"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"
                        >
                        <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon">
                            </div><span class="nav-link-icon"><span data-feather="log-out"></span></span>
                            <span
                                class="nav-link-text">Logout</span>
                        </div>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    
                </span>
            </li>
                
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer"><button
            class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span
                class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span
                class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>