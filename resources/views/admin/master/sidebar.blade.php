<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar">
            <a href="index.php" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><img src="{{asset('dashboard/img/logo.png')}}" width="60px" alt="">E-BOOKS</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="{{asset('dashboard/img/quicksquarenew_202151615520338.jpg')}}" alt=""
                        style="width: 40px; height: 40px;">
                    <div
                        class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                    </div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">umer wahiid</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="index.php" class="nav-item nav-link dash"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link cat dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-laptop me-2"></i>Category</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="index.php?addcat" class="dropdown-item">Add Category</a>
                        <a href="index.php?viewcat" class="dropdown-item">View Categories</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link pro dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-book me-2"></i>Brand</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="index.php?addproduct" class="dropdown-item">Add Brand</a>
                        <a href="index.php?viewproduct" class="dropdown-item">View Brand</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link pro dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-book me-2"></i>Car</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="index.php?addproduct" class="dropdown-item">Add Car</a>
                        <a href="index.php?viewproduct" class="dropdown-item">View Car</a>
                    </div>
                </div>
                <a href="index.php?contact" class="nav-item nav-link cont"><i class="fa fa-phone me-2"></i>Queries</a>
                <a href="index.php?reviews" class="nav-item nav-link revi"><i
                        class="fa fa-comments me-2"></i>Feedbacks</a>
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
                <input class="form-control bg-dark border-0" style="margin-top: 15px;" type="search"
                    placeholder="Search">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="{{asset('dashboard/img/quicksquarenew_202151615520338.jpg')}}" alt=""
                            style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">Umer Wahiid</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="../../E-Books/apis/user_apis/logout_user.php" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->