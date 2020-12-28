<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>KurirKu.com</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/admin/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/admin/css/components.css') ?>">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <!-- Topbar -->
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url(); ?>/assets/admin/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Administrator</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in</div>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Sidebar -->
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <!-- Headet Sidebar -->
                    <div class="sidebar-brand">
                        <a href="index.html">Kurirku</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">KK</a>
                    </div>
                    <!-- End of Header -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <!-- Dashboard -->
                        <li class="menu-header">Dashboard</li>
                        <li id="dashboard"><a class="nav-link" href="<?= base_url('TransaksiPaket'); ?>"><i class="fas fa-fire"></i><span>General Dashboard</span></a></li>
                        <!-- End of Dashboard -->

                        <!-- Manajemen Paket -->
                        <li class="menu-header">Manajemen Paket</li>
                        <li id="new-transaction"><a class="nav-link" href="<?= base_url('TransaksiPaket/newTransaction'); ?>"><i class="far fa-plus-square"></i><span>New Transaction</span></a></li>
                        <li id="all-transactions"><a class="nav-link" href="<?= base_url('TransaksiPaket/allTransactions'); ?>"><i class="fas fa-cube"></i><span>All Transactions</span></a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Package By Status</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">Manifested</a></li>
                                <li><a class="nav-link" href="#">Delivered</a></li>
                                <li><a class="nav-link" href="#">On Process</a></li>
                                <li><a class="nav-link" href="#">Canceled</a></li>
                            </ul>
                        </li>
                        <!-- End of Manajemen Paket -->

                        <!-- Master Data -->
                        <li class="menu-header">Master Data</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i><span>User</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Driver</a></li>
                                <li><a href="#">Admin</a></li>
                                <li disabled><a disabled>Affilate</a></li>
                            </ul>
                        </li>
                        <!-- End of Maser Data -->
                    </ul>
                    <!-- End of Sidebar Menu -->

                    <!-- Footer -->
                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="#" class="btn btn-warning btn-lg btn-block btn-icon-split" disabled>
                            <i class="fas fa-rocket"></i> Administrator
                        </a>
                    </div>
                    <!-- End of Footer -->
                </aside>
            </div>
            <!-- End of Sidebar -->

            <!-- Main Content -->
            <?php $this->load->view($page); ?>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020 <div class="bullet"></div> Kurirku
                </div>
                <div class="footer-right">
                    1.0.0
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('/assets/admin/js/stisla.js'); ?>"></script>

    <!-- JS Libraies -->
    <script src="/node_modules/prismjs/prism.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('/assets/admin/js/scripts.js'); ?>"></script>
    <script src="<?= base_url('/assets/admin/js/custom.js'); ?>"></script>
    <!-- Page Specific JS File -->

    <script>
        $('#<?= $active_sidebar; ?>').addClass('active');
    </script>
</body>

</html>