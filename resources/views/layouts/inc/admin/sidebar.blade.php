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
                    <!-- label-->
                    <p class="navbar-vertical-label">Apps</p>
                    <hr class="navbar-vertical-line" /><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#e-commerce" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                </div><span class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span
                                    class="nav-link-text">E commerce</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="e-commerce">
                                <p class="collapsed-nav-item-title d-none">E commerce</p>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#admin"
                                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="e-commerce">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Admin</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#e-commerce" id="admin">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/admin/add-product.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Add product</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/admin/products.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Products</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/admin/customers.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Customers</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/admin/customer-details.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Customer details</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/admin/orders.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Orders</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/admin/order-details.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Order details</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/admin/refund.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Refund</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#landing"
                                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="e-commerce">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Landing</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#e-commerce" id="landing">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/homepage.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Homepage</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/product-details.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Product details</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/products-filter.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Products filter</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/cart.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Cart</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/checkout.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Checkout</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/shipping-info.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Shipping info</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/profile.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Profile</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/favourite-stores.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Favourite stores</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/wishlist.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Wishlist</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/order-tracking.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Order tracking</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/landing/invoice.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Invoice</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#project-management" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="project-management">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="clipboard"></span></span><span
                                    class="nav-link-text">Project management</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                id="project-management">
                                <p class="collapsed-nav-item-title d-none">Project management</p>
                                <li class="nav-item"><a class="nav-link" href="apps/project-management/create-new.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Create
                                                new</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="apps/project-management/project-list-view.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Project list
                                                view</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="apps/project-management/project-card-view.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Project card
                                                view</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="apps/project-management/project-board-view.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Project board
                                                view</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="apps/project-management/todo-list.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Todo
                                                list</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="apps/project-management/project-details.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Project
                                                details</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#email" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="mail"></span></span><span
                                    class="nav-link-text">Email</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="email">
                                <p class="collapsed-nav-item-title d-none">Email</p>
                                <li class="nav-item"><a class="nav-link" href="apps/email/inbox.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Inbox</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="apps/email/email-detail.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Email
                                                detail</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="apps/email/compose.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Compose</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#events" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="clipboard"></span></span><span
                                    class="nav-link-text">Events</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="events">
                                <p class="collapsed-nav-item-title d-none">Events</p>
                                <li class="nav-item"><a class="nav-link" href="apps/events/create-an-event.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Create an
                                                event</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="apps/events/event-detail.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Event
                                                detail</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#social" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="share-2"></span></span><span
                                    class="nav-link-text">Social</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="social">
                                <p class="collapsed-nav-item-title d-none">Social</p>
                                <li class="nav-item"><a class="nav-link" href="apps/social/profile.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Profile</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="apps/social/settings.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Settings</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Pages</p>
                    <hr class="navbar-vertical-line" /><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link label-1" href="pages/starter.html" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="compass"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Starter</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="pages/pages/faq.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="help-circle"></span></span><span
                                    class="nav-link-text-wrapper"><span class="nav-link-text">Faq</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#pricing" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="tag"></span></span><span
                                    class="nav-link-text">Pricing</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="pricing">
                                <p class="collapsed-nav-item-title d-none">Pricing</p>
                                <li class="nav-item"><a class="nav-link" href="pages/pages/pricing/pricing-column.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Pricing
                                                column</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/pages/pricing/pricing-grid.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Pricing
                                                grid</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="pages/pages/notifications.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="bell"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Notifications</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="pages/pages/members.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="users"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Members</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#errors" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="alert-triangle"></span></span><span
                                    class="nav-link-text">Errors</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="errors">
                                <p class="collapsed-nav-item-title d-none">Errors</p>
                                <li class="nav-item"><a class="nav-link" href="pages/errors/404.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">404</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/errors/500.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">500</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#authentication" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="lock"></span></span><span
                                    class="nav-link-text">Authentication</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                id="authentication">
                                <p class="collapsed-nav-item-title d-none">Authentication</p>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple"
                                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="authentication">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Simple</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#authentication"
                                            id="simple">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/simple/sign-in.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign in</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/simple/sign-up.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign up</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/simple/sign-out.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign out</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/simple/forgot-password.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Forgot password</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/simple/reset-password.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Reset password</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/simple/lock-screen.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Lock screen</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split"
                                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="authentication">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Split</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#authentication"
                                            id="split">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/split/sign-in.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign in</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/split/sign-up.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign up</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/split/sign-out.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign out</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/split/forgot-password.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Forgot password</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/split/reset-password.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Reset password</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/authentication/split/lock-screen.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Lock screen</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#layouts" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="layouts">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="layout"></span></span><span
                                    class="nav-link-text">Layouts</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="layouts">
                                <p class="collapsed-nav-item-title d-none">Layouts</p>
                                <li class="nav-item"><a class="nav-link" href="demo/vertical-sidenav.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Vertical
                                                sidenav</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/dark-mode.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Dark
                                                mode</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/sidenav-collapse.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Sidenav
                                                collapse</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/darknav.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Darknav</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/topnav-slim.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Topnav
                                                slim</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/navbar-top-slim.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Navbar top
                                                slim</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demo/navbar-top.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Navbar
                                                top</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Modules</p>
                    <hr class="navbar-vertical-line" /><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#forms" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="file-text"></span></span><span
                                    class="nav-link-text">Forms</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="forms">
                                <p class="collapsed-nav-item-title d-none">Forms</p>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Basic</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#forms" id="basic">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/basic/form-control.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Form control</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/basic/input-group.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Input group</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/basic/select.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Select</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/basic/checks.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Checks</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/basic/range.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Range</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/basic/floating-labels.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Floating labels</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/basic/layout.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Layout</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Advance</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#forms" id="advance">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/advance/advance-select.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Advance select</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/advance/date-picker.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Date picker</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/advance/editor.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Editor</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/advance/file-uploader.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">File uploader</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/advance/rating.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Rating</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/forms/wizard.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Wizard</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#icons" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="grid"></span></span><span
                                    class="nav-link-text">Icons</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="icons">
                                <p class="collapsed-nav-item-title d-none">Icons</p>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/feather.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Feather</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/font-awesome.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Font
                                                awesome</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/icons/unicons.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Unicons</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#tables" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="columns"></span></span><span
                                    class="nav-link-text">Tables</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="tables">
                                <p class="collapsed-nav-item-title d-none">Tables</p>
                                <li class="nav-item"><a class="nav-link" href="modules/tables/basic-tables.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Basic
                                                tables</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/tables/advance-tables.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Advance
                                                tables</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#components" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="package"></span></span><span
                                    class="nav-link-text">Components</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="components">
                                <p class="collapsed-nav-item-title d-none">Components</p>
                                <li class="nav-item"><a class="nav-link" href="modules/components/accordion.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Accordion</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/avatar.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Avatar</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/alerts.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Alerts</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/badge.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Badge</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/breadcrumb.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Breadcrumb</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/button.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Buttons</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/card.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Card</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Carousel</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#components" id="carousel">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/carousel/bootstrap.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Bootstrap</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/carousel/swiper.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Swiper</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/collapse.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Collapse</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/dropdown.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Dropdown</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/list-group.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">List
                                                group</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/modal.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Modals</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Navs &amp; Tabs</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#components"
                                            id="navs-_and_-Tabs">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/navs-and-tabs/navs.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Navs</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/navs-and-tabs/navbar.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Navbar</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/navs-and-tabs/tabs.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Tabs</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/offcanvas.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Offcanvas</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/progress-bar.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Progress
                                                bar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/placeholder.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Placeholder</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/pagination.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Pagination</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/popovers.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Popovers</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/scrollspy.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Scrollspy</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/spinners.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Spinners</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/toast.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Toast</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/components/tooltips.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Tooltips</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#utilities" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="tool"></span></span><span
                                    class="nav-link-text">Utilities</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="utilities">
                                <p class="collapsed-nav-item-title d-none">Utilities</p>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/background.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Background</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/borders.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Borders</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/colors.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Colors</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/display.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Display</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/flex.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Flex</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/float.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Float</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/interactions.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Interactions</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/opacity.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Opacity</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/overflow.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Overflow</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/position.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Position</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/shadows.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Shadows</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/sizing.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Sizing</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/spacing.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Spacing</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/typography.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Typography</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/vertical-align.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Vertical
                                                align</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="modules/utilities/visibility.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Visibility</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#multi-level" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="layers"></span></span><span
                                    class="nav-link-text">Multi level</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="multi-level">
                                <p class="collapsed-nav-item-title d-none">Multi level</p>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Level two</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#multi-level" id="level-two">
                                            <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Item 1</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Item 2</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Level three</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#multi-level" id="level-three">
                                            <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Item 3</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4"
                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                    aria-controls="level-three">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Item 4</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#level-three"
                                                        id="item-4">
                                                        <li class="nav-item"><a class="nav-link" href="#!.html"
                                                                data-bs-toggle="" aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Item 5</span></div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link" href="#!.html"
                                                                data-bs-toggle="" aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Item 6</span></div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Level four</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#multi-level" id="level-four">
                                            <li class="nav-item"><a class="nav-link" href="#!.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Item 6</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7"
                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                    aria-controls="level-four">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Item 7</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#level-four"
                                                        id="item-7">
                                                        <li class="nav-item"><a class="nav-link" href="#!.html"
                                                                data-bs-toggle="" aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Item 8</span></div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                                href="#item-9" data-bs-toggle="collapse"
                                                                aria-expanded="false" aria-controls="item-7">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="dropdown-indicator-icon"><span
                                                                            class="fas fa-caret-right"></span></div>
                                                                    <span class="nav-link-text">Item 9</span>
                                                                </div>
                                                            </a><!-- more inner pages-->
                                                            <div class="parent-wrapper">
                                                                <ul class="nav collapse parent" data-bs-parent="#item-7"
                                                                    id="item-9">
                                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="#!.html" data-bs-toggle=""
                                                                            aria-expanded="false">
                                                                            <div class="d-flex align-items-center"><span
                                                                                    class="nav-link-text">Item 10</span>
                                                                            </div>
                                                                        </a><!-- more inner pages-->
                                                                    </li>
                                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="#!.html" data-bs-toggle=""
                                                                            aria-expanded="false">
                                                                            <div class="d-flex align-items-center"><span
                                                                                    class="nav-link-text">Item 11</span>
                                                                            </div>
                                                                        </a><!-- more inner pages-->
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </span>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Documentation</p>
                    <hr class="navbar-vertical-line" /><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link label-1" href="documentation/getting-started.html" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="life-buoy"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Getting started</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#customization" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="settings"></span></span><span
                                    class="nav-link-text">Customization</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="customization">
                                <p class="collapsed-nav-item-title d-none">Customization</p>
                                <li class="nav-item"><a class="nav-link" href="documentation/customization/styling.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Styling</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="documentation/customization/plugin.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Plugin</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#layouts-doc" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="layouts-doc">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="table"></span></span><span
                                    class="nav-link-text">Layouts doc</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="layouts-doc">
                                <p class="collapsed-nav-item-title d-none">Layouts doc</p>
                                <li class="nav-item"><a class="nav-link"
                                        href="documentation/layouts/vertical-navbar.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Vertical
                                                navbar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="documentation/layouts/horizontal-navbar.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Horizontal
                                                navbar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="documentation/gulp.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon font-awesome"><span
                                        class="fa-brands fa-gulp fs-0 ms-1"></span></span><span
                                    class="nav-link-text-wrapper"><span class="nav-link-text">Gulp</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="documentation/design-file.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="figma"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Design file</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="changelog.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="git-merge"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Changelog</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="showcase.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="monitor"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Showcase</span></span></div>
                        </a></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer"><button
            class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span
                class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span
                class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>