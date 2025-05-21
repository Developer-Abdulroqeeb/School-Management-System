<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Home 5</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset("css/normalize.css")}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset(path: "css/main.css")}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset("css/all.min.css")}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset("fonts/flaticon.css")}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{asset("css/jquery.dataTables.min.css")}}">
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
            @include('schoolproject.teachernav')  
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
           <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
            @include('schoolproject.teachersidebar')
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
                        <li>Teacher</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                
               
                <!-- Student Table Area Start Here -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card dashboard-card-eleven">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>My Students</h3>
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
                                <div class="table-box-wrap">
                                    <form class="search-form-box">
                                        <div class="row gutters-8">
                                            <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                                <input type="text" placeholder="Search by Roll ..." class="form-control">
                                            </div>
                                            <div class="col-4-xxxl col-xl-4 col-lg-4 col-12 form-group">
                                                <input type="text" placeholder="Search by Name ..." class="form-control">
                                            </div>
                                            <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                                <input type="text" placeholder="Search by Class ..." class="form-control">
                                            </div>
                                            <div class="col-1-xxxl col-xl-2 col-lg-2 col-12 form-group">
                                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="table-responsive student-table-box">
                                        <table class="table display data-table text-nowrap">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Photo</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>E-mail</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               @foreach ($getstudent as $getstudents )
                                                                   
                                     
                                                <tr>
                                                    
                                                    <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                                                    <td>{{$getstudents->FirstName}} {{$getstudents->LastName}} {{$getstudents->OtherName}}</td>
                                                    <td>{{$getstudents->Gender}}</td>
                                                    {{-- <td>1</td> --}}
                                                    {{-- <td>A</td> --}}
                                                    {{-- <td>Maria Jamans</td> --}}
                                                    {{-- <td>59 Australia, Sydney</td> --}}
                                                    {{-- <td>02/05/2001</td> --}}
                                                    {{-- <td>+ 123 9988568</td> --}}
                                                    {{-- <td>kazifahim93@gmail.com</td> --}}
                                                   <td> {{$getstudents->email}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
    <!-- Counterup Js -->
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- Waypoints Js -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="/js/jquery.dataTables.min.js"></script>
    <!-- Chart Js -->
    <script src="/js/Chart.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:50 GMT -->
</html>