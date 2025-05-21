<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/progress-bar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Progress Bar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
         <div class="navbar navbar-expand-md header-menu-one bg-light">
            @include('schoolproject.navigationbar')  
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                @include("schoolproject.sidebar")
             </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>UI Elements</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>UI Elements</li>
                        <li>Progress Bar</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Progress Bar Start Here -->
                <div class="card progress-bar-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Default Progress Bar</h3>
                            </div>
                           <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                        </div>
                        <div class="basic-progress-bar">
                            <div class="progress">
                                <div class="progress-bar bg-skyblue" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-yellow" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-wild-strawberry" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dodger-blue" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card progress-bar-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Striped Progress Bar</h3>
                            </div>
                           <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                        </div>
                        <div class="stripe-progress-bar">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-pink" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-blue" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-wild-strawberry" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-dodger-blue" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card progress-bar-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Gradient Progress Bar</h3>
                            </div>
                           <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                        </div>
                        <div class="gradient-progress-bar">
                            <div class="progress">
                                <div class="progress-bar btn-gradient-yellow" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-gradient-twitter" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-gradient-gplus" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar gradient-pastel-green" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card progress-bar-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Vertical Progress Bar</h3>
                            </div>
                           <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                        </div>
                        <div class="vertical-progress-bar">
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar bg-dodger-blue" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%;">80%</div>
                            </div>
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar bg-skyblue" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 90%;">90%</div>
                            </div>
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20%;">20%</div>
                            </div>
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar bg-dark-pastel-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%;">40%</div>
                            </div>
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar progress-bar-striped bg-violet-blue" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%;">80%</div>
                            </div>
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar progress-bar-striped bg-yellow" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 30%;">30%</div>
                            </div>
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar progress-bar-striped bg-light-sea-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%;">60%</div>
                            </div>
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar btn-gradient-yellow" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%;">80%</div>
                            </div>
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar bg-gradient-twitter" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%;">80%</div>
                            </div>
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar bg-gradient-gplus" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%;">40%</div>
                            </div>
                            <div class="progress progress-bar-vertical">
                                <div class="progress-bar gradient-orange-peel" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 50%;">50%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Progress Bar End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/progress-bar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:58 GMT -->
</html>