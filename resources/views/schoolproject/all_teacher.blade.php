<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | All Teachers</title>
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

    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
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
                        <li>All Teachers</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Teacher Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Teachers Data</h3>
                            </div>
            
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                             
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                      
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Class Teacher Of</th>
                                        {{-- <th>Role</th> --}}
                                      
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>Religion</th>
                                        {{-- <th>Date Of Birth</th> --}}
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sql as $teacher )                                       
                                    <tr>
                                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                        <td>{{$teacher->firstname}} {{$teacher->lastname}}</td>
                                        <td>{{$teacher->gender}}</td>
                                        <td>{{$teacher->classteacher}}</td>
                                        {{-- <td>{{$teacher->role}}</td> --}}
                                        
                                        <td>{{$teacher->address}}</td>
                                        <td>{{$teacher->phone}}</td>
                                        <td>
                                            {{$teacher->Email}}
                                        </td>
                                        <td>{{$teacher->religion}}</td>
                                        {{-- <td>{{$teacher->dateofbirth}}</td> --}}
                                         <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                        <form action="{{route("schoolproject.delete_teachers", $teacher->id)}}" method="POST">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class="dropdown-item" ><i class="fas fa-times text-orange-red"></i>Delete</button>
                                            </form>                                                   
                                                    <a class="dropdown-item" href="{{route("schoolproject.editteacher", $teacher->id)}}"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="{{route("schoolproject.teacher_details", $teacher->id)}}"><i class="fas fa-eye text-orange-peel"></i>View</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Teacher Table Area End Here -->
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
    <!-- Data Table Js -->
    <script src="/js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:55 GMT -->
</html>