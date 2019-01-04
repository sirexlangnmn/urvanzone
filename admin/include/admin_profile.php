                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="images/admin/rex.PNG" alt="Federex A Potolin" class="profile-pic" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="images/admin/rex.PNG" alt="Federex A Potolin"></div>
                                        <div class="u-text">
                                            <h4><?php echo $fullname; ?></h4>
                                            <p class="text-muted"></p><a href="#" class="btn btn-rounded btn-danger btn-sm"><?php echo $position; ?></a></div>

                                         
                                    </div>
                                </li>
                              <!--   <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li> -->
                                <li role="separator" class="divider"></li>
                                <li><a href="admin_profile.php"><i class="ti-user"></i> Profile </a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="queries/logout.php"><i class="fa fa-power-off"></i> Logout </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>