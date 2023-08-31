<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>

    </form>
    <ul class="navbar-nav navbar-right">
        @php
            $notifications = \App\Models\OrderPlacedNotification::where('seen', 0)->latest()->take(10)->get();
            $unseenMessages = \App\Models\Chat::where(['receiver_id' => auth()->user()->id, 'seen' => 0])->count();
        @endphp

        <li class="dropdown dropdown-list-toggle">
            <a href="{{ route('admin.chat.index') }}" data-toggle="dropdown"
                class="nav-link nav-link-lg message-envelope {{ $unseenMessages > 0 ? 'beep' : '' }}"><i class="far fa-envelope"></i></a>
        </li>

        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                class="nav-link notification-toggle nav-link-lg notification_beep {{ count($notifications) > 0 ? 'beep' : '' }}"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <div class="float-right">
                        <a href="{{ route('admin.clear-notification') }}">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons rt_notification">
                    @foreach ($notifications as $notification)
                    <a href="{{ route('admin.orders.show', $notification->order_id) }}" class="dropdown-item">
                        <div class="dropdown-item-icon bg-info text-white">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            {{ $notification->message }}
                            <div class="time">{{ date('h:i A | d-F-Y', strtotime($notification->created_at)) }}</div>
                        </div>
                    </a>
                    @endforeach

                </div>
                <div class="dropdown-footer text-center">
                    <a href="{{ route('admin.orders.index') }}">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>

        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset(auth()->user()->avatar) }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="{{ route('admin.profile') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html" class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="#"
                        onclick="event.preventDefault();
                    this.closest('form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>

            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class=active><a class="nav-link" href="index-0.html"><i class="fas fa-fire"></i> General
                    Dashboard</a>
            </li>

            <li class="menu-header">Starter</li>

            <li><a class="nav-link" href="{{ route('admin.slider.index') }}"><i class="far fa-square"></i>
                    <span>Slider</span></a></li>

            <li><a class="nav-link" href="{{ route('admin.why-choose-us.index') }}"><i class="far fa-square"></i>
                    <span>Why choose us</span></a></li>


            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-columns"></i>
                    <span>Orders </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.orders.index') }}">All Orders</a></li>
                    <li><a class="nav-link" href="{{ route('admin.pending-orders') }}">Pending Orders</a></li>
                    <li><a class="nav-link" href="{{ route('admin.inprocess-orders') }}">In Process Orders</a></li>
                    <li><a class="nav-link" href="{{ route('admin.delivered-orders') }}">Delivered Orders</a></li>
                    <li><a class="nav-link" href="{{ route('admin.declined-orders') }}">Decliend Orders</a></li>


                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-columns"></i>
                    <span>Manage Restaurant </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.category.index') }}">Product Categories</a></li>
                    <li><a class="nav-link" href="{{ route('admin.product.index') }}">Products</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-columns"></i>
                    <span> Manage Ecommerce </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.coupon.index') }}">Coupon</a></li>
                    <li><a class="nav-link" href="{{ route('admin.delivery-area.index') }}">Delivery Areas</a></li>
                    <li><a class="nav-link" href="{{ route('admin.payment-setting.index') }}">Payment Gateways</a>
                    </li>

                </ul>
            </li>

            <li><a class="nav-link" href="{{ route('admin.chat.index') }}"><i class="far fa-square"></i>
                <span>Messages</span></a></li>

            <li><a class="nav-link" href="{{ route('admin.setting.index') }}"><i class="far fa-square"></i>
                    <span>Settings</span></a></li>

            {{-- <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
          </ul>
        </li> --}}
            {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> --}}

        </ul>

    </aside>
</div>
