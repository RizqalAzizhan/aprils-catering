   <!-- Navbar & Hero Start -->
   <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-light m-0"><i class="fa fa-utensils me-3"></i><?= $title; ?></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?= base_url('Dashboard/index') ?>" class="nav-item nav-link active">Home</a>
                        <a href="#menu-dessert" class="nav-item nav-link">Dessert</a>
                        <a href="#menu-box" class="nav-item nav-link">Rice Box</a>
                        <a href="<?= base_url('Dashboard/menu') ?>" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?= base_url('Dashboard/booking') ?>" class="dropdown-item">Booking</a>
                                <!-- <a href="<?= base_url('Dashboard/team') ?>" class="dropdown-item">Our Team</a> -->
                                <!-- <a href="<?= base_url('Login/login') ?>" class="dropdown-item">Login</a> -->
                                <a href="<?= base_url('Dashboard/testimonial') ?>" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="<?= base_url('Dashboard/contact') ?>" class="nav-item nav-link">Contact</a>
                    </div>
                   
                </div>
            </nav>