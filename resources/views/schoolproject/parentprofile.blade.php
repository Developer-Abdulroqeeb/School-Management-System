<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Parent Profile</title>
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
            @include('schoolproject.parentnavbar')  
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                @include("schoolproject.parentsidebar")
             </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Parent</h3>
                    <ul>
                        <li>
                            <a href="{{route("schoolproject.parentdash")}}">Home</a>
                        </li>
                        <li>My profile</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Details Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Teacher profile</h3>
                            </div>
                          
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                {{-- <img src="{{assset("img/figure/student1.jpg")}}"> --}}
                            </div>
                            <div class="item-content">
                                
                                <div class="header-inline item-header">
                                    {{-- <h3 class="text-dark-medium font-medium">{{$student->FirstName}} {{$student->LastName}}</h3> --}}
                                
                                </div>
                                
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>

                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium">{{$profile->Surname}} {{$profile->OtherName}}</td>
                                            </tr>
                                            <tr>
                                                            <td>Email:</td>
                                                            <td class="font-medium text-dark-medium">{{$profile->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phone:</td>
                                                            <td class="font-medium text-dark-medium">{{$profile->phone}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address:</td>
                                                            <td class="font-medium text-dark-medium">{{$profile->address}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Occupation:</td>
                                                            <td class="font-medium text-dark-medium">{{$profile->occupation}} </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Child(ren) Name:</td>
                                                            @foreach ($children as $kids )
                                                            <td class="font-medium text-dark-medium" style="display:flex; flex-direction:column;"><span>{{$kids->FirstName}} {{$kids->LastName}} {{$kids->OtherName}}</span></td>                  
                                                            @endforeach
                                                           
                                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Details Area End Here -->
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


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:50 GMT -->
</html>