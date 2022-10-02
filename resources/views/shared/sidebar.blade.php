<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    
    <div style="text-align:center;width:100%;">
        <h4 style='color:#179978;font-weight:bold;'> <img src="{{asset('template//dist/img/bnnc_logo.png')}}" style="height:50px;width:50px;"> &nbsp;Bangladesh National Nutrition Council </h4>
    </div>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        Nutrition
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('template//dist/img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Guest User</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Monitoring Indicator
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sub-menu">
                        <li class="nav-item">
                            <a href="{{url('target_indicator')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nutritional Analysis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href= "{{url('npan_priority_indicator')}}"class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>NPAN Priority Indicator</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('routine_proxy_indicator')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Routine Monitoring Indi.</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            DNCC & UNCC
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!--
                        <li class="nav-item has-treeview sub-menu">
                                <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                                Functionality of DNCC & UNCC
                                                <i class="right fas fa-angle-left"></i>
                                        </p>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                        <li class="nav-item">
                                                <a href="http://bnnc.greatsoftbd.com/index.php/dashboard.asp" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Home</p>
                                                </a>
                                        </li>
                                        <li class="nav-item">
                                                <a href="http://bnnc.greatsoftbd.com/index.php/reports/uncc_dncc_reports.asp" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Reports</p>
                                                </a>
                                        </li>
                                        <li class="nav-item">
                                                <a href="http://bnnc.greatsoftbd.com/index.php/data_entry_UNCC_DNCC.asp" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Data Entry</p>
                                                </a>
                                        </li>
                                </ul>
                        </li>-->
                        <li class="nav-item has-treeview sub-menu">
                            <a href="http://bnnc.mpower-social.com:8017/" target="_blank" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Home
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <!--
                            <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item">
                                            <a href="http://bnnc.mpower-social.com/" class="nav-link">
                                                    <i class="far fa-dot-circle nav-icon"></i>
                                                    <p>Home</p>
                                            </a>
                                    </li>
                                    <li class="nav-item">
                                            <a href="http://bnnc.mpower-social.com/usermodule/login/" class="nav-link">
                                                    <i class="far fa-dot-circle nav-icon"></i>
                                                    <p>Data Entry</p>
                                            </a>
                                    </li>
                            </ul>-->
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-nutritionix"></i>
                        <p>
                            BD Nutrition Profile
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sub-menu">
                        <li class="nav-item">
                            <a href="http://www.nutritionprofile.org/" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://www.nutritionprofile.org/national/" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>National Level</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://www.nutritionprofile.org/division/" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Division Level</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://www.nutritionprofile.org/district/" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>District Level</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Instruction
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview sub-menu">
                                <li class="nav-item">
                                    <a href="http://www.nutritionprofile.org/guideline-of-use/" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Guideline of use</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://www.nutritionprofile.org/indicator-table/" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Indicator Definition</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://www.nutritionprofile.org/list-of-contributor/" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>List of Contributors</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Entry</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-chart-area"></i>
                        <p>
                            Workplan Monitoring
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview sub-menu">
                        <li class="nav-item">
                            <a href="http://bnnc-wp.greatsoftbd.com/index.php/dashboard.asp" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://bnnc-wp.greatsoftbd.com/index.php/reports.asp" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://bnnc-wp.greatsoftbd.com/index.php/data_entry.asp" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Entry</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>