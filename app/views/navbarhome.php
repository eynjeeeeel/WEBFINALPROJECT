<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-green navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand">
        <h1 class="m-0 text-green"></i><span style="color: green;">ACMCL</span></h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="home" class="nav-item nav-link text-green">Home</a>
            <a href="about" class="nav-item nav-link text-green">About Us</a>
            <a href="classes" class="nav-item nav-link text-green">Classes</a>
            <a href="<?= site_url('facilities') ?>" class="nav-item nav-link text-green">School Facilities</a>
            <a href="studprof" class="nav-item nav-link text-green">My Child's Profile</a>
        </div>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="navbar-nav mx-auto">

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-green" id="profileDropdown" data-bs-toggle="dropdown">Profile</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0" aria-labelledby="profileDropdown">
                    <!-- Add other profile-related menu items here -->
                    <a href="#" class="dropdown-item text-green">My Profile</a>
                    <a href="#" class="dropdown-item text-green">Child</a>
                    <a href="#" class="dropdown-item text-green">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a href="sitevisit" class="dropdown-item text-green">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
