<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR |Approve Payment</title>
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
    <link rel="stylesheet" href="{{asset("css/select2.min.css")}}">
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
            @include('schoolproject.navigationbar')  

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
                @include("schoolproject.sidebar");
             </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Enter Amount</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Pay for Student</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->

                <form class="new-added-form" method="POST"  action="{{route("schoolproject.approveform")}}">
               @method("PUT")
                    @csrf
                    <div class="row" style="background: white; padding:20px;">
   <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Student Name</label>
                    <input type="text" value="{{$select->child_id}}" readonly class="form-control" name="" id="">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Student Class</label>
                    <input type="hidden" value="{{$select->id}}" name="feeId">
                    <input type="text" value="{{$select->class}}" readonly class="form-control" name="class" id="">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Enter Amount</label>
                    <input type="tel" required class="form-control" name="amount" id="">
                </div>
                </div>
                <button type="submit" name="submit" style="background: rgb(25, 25, 118); padding: 10px; border-radius: 10px; border: 0; color: white;">Submit</button>

            </form>
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
    <script src="/js/select2.min.js"></script>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:47 GMT -->
</html>