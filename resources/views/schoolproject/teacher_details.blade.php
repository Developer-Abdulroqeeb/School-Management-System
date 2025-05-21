<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Teacher Details</title>
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
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Teacher Details</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About Teacher</h3>
                            </div>
                           {{-- <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div> --}}
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="{{asset("img/figure/teacher.jpg")}}" alt="teacher">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">{{$teacher->firstname}} {{$teacher->lastname}}</h3>
                                    {{-- <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <p>{{$teacher->role}}</p>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->firstname}}</td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->gender}}</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Religion:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->religion}}</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->Email}}</td>
                                            </tr>
                                            {{-- <tr>
                                                <td>Subject:</td>
                                                <td class="font-medium text-dark-medium">English</td>
                                            </tr> --}}
                                            <tr>
                                                <td>Class Teacher Of:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->classteacher}}</td>
                                            </tr>
                                            
                                           
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->address}}</td>
                                            </tr>
                                            <tr>
                                                <td>Salary:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->salary}}</td>
                                            </tr>
                                            <tr>
                                                <td>Account Number:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->account_number}}</td>
                                            </tr>
                                            <tr>
                                                <td>Account Name:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->account_name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Starting Date:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->starting_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->phone}}</td>
                                            </tr>
                                            <tr>
                                                <td>password:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->password}}</td>
                                            </tr>
                                            <tr>
                                                <td>username:</td>
                                                <td class="font-medium text-dark-medium">{{$teacher->username}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                </footer>
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
    <!-- Scroll Up Js -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:56 GMT -->
</html>