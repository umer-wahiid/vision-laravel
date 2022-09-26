@php

$message = DB::table('contacts')->get();

@endphp

<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{url('admin')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><img src="{{asset('website/images/icon.png')}}" width="30px" height="30px" alt="">
                Vision<span style="color:white;">Motors</span></h3>
            <!-- <i class="fa fa-user-edit me-2"></i> -->
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{Auth::user()->image}}" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{url('admin')}}" class="nav-item nav-link {{ request()->is('admin') ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{url('admin/contact/show')}}"
                class="nav-item nav-link {{ request()->is('admin/contact/*') ? 'active' : '' }}"><i
                    class="fa fa-envelope me-2"></i>Messages</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->is('admin/category/*') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Category</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('admin/category/create')}}" class="dropdown-item">Add Category</a>
                    <a href="{{url('admin/category/show')}}" class="dropdown-item">View Category</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->is('admin/brand/*') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-list me-2"></i>Brand</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('admin/brand/create')}}" class="dropdown-item">Add Brand</a>
                    <a href="{{url('admin/brand/show')}}" class="dropdown-item">View Brand</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->is('admin/car/*') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-car me-2"></i>Cars</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('admin/car/create')}}" class="dropdown-item">Add Car</a>
                    <a href="{{url('admin/car/show')}}" class="dropdown-item">View Car</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->


<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-envelope me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Message</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    @foreach($message as $item)
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">{{$item->name}}</h6>
                                <small>{{$item->created_at}}</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    @endforeach
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-bell me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Notificatin</span>
                </a>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="{{Auth::user()->image}}" alt=""
                        style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">My Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="{{url('/logout')}}" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->