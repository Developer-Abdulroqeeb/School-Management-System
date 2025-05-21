<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Expenses</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset("css/normalize.css")}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset("css/all.min.css")}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset("fonts/flaticon.css")}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <!-- Modernize js -->
    <script src="/js/modernizr-3.6.0.min.js"></script>

</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            {{-- @include('schoolproject.navigationbar')   --}}
<div class="nav-bar-header-one">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="{{asset ('img/logo.png')}}" alt="logo">
                        </a>
                    </div>
                     <div class="toggle-button sidebar-toggle">
                        <button type="button" class="item-link">
                            <span class="btn-icon-wrap">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="d-md-none mobile-nav-bar">
                   <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                        <i class="far fa-arrow-alt-circle-down"></i>
                    </button>
                    <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
        
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                @include("schoolproject.parentsidebar");
             </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Admin Dashboard</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Parents</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                
                  .  <div class="col-7-xxxl col-12">
                        <div class="card dashboard-card-eleven">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>All Expenses</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-box-wrap">
                                    <form class="search-form-box">
                                        <div class="row gutters-8">
                                            <div class="col-lg-4 col-md-3 form-group">
                                                <input type="text" placeholder="Search by Exam ..."
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-3 col-md-3 form-group">
                                                <input type="text" placeholder="Search by Subject ..."
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-3 col-md-3 form-group">
                                                <input type="text" placeholder="dd/mm/yyyy" class="form-control">
                                            </div>
                                            <div class="col-lg-2 col-md-3 form-group">
                                                <button type="submit"
                                                    class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="table-responsive expenses-table-box">
                                        <table class="table data-table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input checkAll">
                                                            <label class="form-check-label">ID</label>
                                                        </div>
                                                    </th>
                                                    <th>Expanse</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>E-Mail</th>
                                                    <th>Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">#0021</label>
                                                        </div>
                                                    </td>
                                                    <td>Exam Fees</td>
                                                    <td>$150.00</td>
                                                    <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                                    <td>akkhorschool@gmail.com</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                        
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                            href="#">PsdBosS</a></div>
                </footer>
                <!-- Dashboard Content End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Counterup Js -->
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- Waypoints Js -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="/js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:47 GMT -->
</html>