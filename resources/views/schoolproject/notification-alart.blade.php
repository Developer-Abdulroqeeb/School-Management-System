<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/notification-alart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Notification Alart</title>
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
                        <li>Notification</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Notify Alart Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Default Alert</h3>
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
                        <div class="ui-alart-box">
                            <div class="default-alart">
                                <div class="alert alert-primary" role="alert">
                                    This is a primary alert—check it out!
                                  </div>
                                  <div class="alert alert-success" role="alert">
                                    This is a success alert—check it out!
                                  </div>
                                  <div class="alert alert-danger" role="alert">
                                    This is a danger alert—check it out!
                                  </div>
                                  <div class="alert alert-warning" role="alert">
                                    This is a warning alert—check it out!
                                  </div>
                                  <div class="alert alert-info" role="alert">
                                    This is a info alert—check it out!
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Dismissing Alerts</h3>
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
                        <div class="ui-alart-box">
                            <div class="dismiss-alart">
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    This is a primary alert—check it out!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    This is a success alert—check it out!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    This is a danger alert—check it out!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    This is a warning alert—check it out!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    This is a info alert—check it out!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Colored Alerts With Icons</h3>
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
                        <div class="ui-alart-box">
                            <div class="icon-color-alart">
                                <div class="alert icon-alart bg-light-green2" role="alert">
                                    <i class="far fa-hand-point-right bg-light-green3"></i>
                                    Well done! You successfully read this important alert message.
                                </div>
                                <div class="alert icon-alart bg-fb2" role="alert">
                                    <i class="fas fa-exclamation bg-fb3"></i>
                                    Heads up! This alert needs your attention, but it's not super important.
                                </div>
                                <div class="alert icon-alart bg-yellow2" role="alert">
                                    <i class="fas fa-exclamation-triangle bg-yellow3"></i>
                                    Attention! Learning day desirous informed expenses material returned six the.
                                </div>
                                <div class="alert icon-alart bg-pink2" role="alert">
                                    <i class="fas fa-times bg-pink3"></i>
                                    Attention! Learning day desirous informed expenses material returned six the.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notify Alart Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                            href="#">PsdBosS</a></div>
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


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/notification-alart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:58 GMT -->
</html>