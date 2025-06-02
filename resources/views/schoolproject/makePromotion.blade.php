<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-parents.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Make Promotion</title>
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
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{asset("css/jquery.dataTables.min.css")}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/select2.min.css")}}">
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
                    <h3>Promotion</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li> Promote Student</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Teacher Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3></h3>
                            </div>
                        
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                              
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" name="name" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form  >
                        <div class="table-responsive">
                                        <form class="new-added-form" action="{{route("schoolproject.promoteForm")}}" method="post"> 
                             @method("PUT")
                                                            @csrf
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name </th>
                                        <th>Class</th>
                                        <th>Select Student </th>
                                        <th>Promoted To</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                         @foreach ($student as $students)
                                             
                        
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$students->FirstName}} {{$students->LastName}}</td>
                                        <td>{{$students->class}}</td>
                                    <td>    <input type="checkbox" value="{{$students->id}}" name="studentId" id=""></td>
                                        <td>
                             <select name="class" id="" class="select2">
                         <option disabled value="">Select</option>
                        @foreach ($class as $studentclass)
                           <option value="{{$studentclass->class}}">{{$studentclass->class}}</option>   
                            @endforeach
                    
                                </select>
                                            </div>
                                        </td>
   
                                        @endforeach
                                    </tr>
                                    
              
                                </tbody>
                            </table>
                            <button  class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" type="submit">Promote</button>
                    </form>
                        </div>
                    </div>
                </div>
                <!-- Teacher Table Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                            href="#">PsdBosS</a></div>
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
    <!-- Smoothscroll Js -->
    <script src="/js/jquery.smoothscroll.min.html"></script>
    <!-- Scroll Up Js -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="/js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>
    <script src="/js/select2.min.js"></script>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-parents.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
</html>
