
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <?php include("include/navbar_logo.php"); ?>
        <!-- ============================================================== -->
        <!--End Logo -->
        <!-- ============================================================== -->
           
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- Button for minimizing sidebar  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <!-- End Button for minimizing sidebar  -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <?php include("admin_profile.php"); ?>
            <!-- ============================================================== -->
            <!-- End User profile and search -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End toggle and nav items -->
        <!-- ============================================================== -->
    </nav>
</header>