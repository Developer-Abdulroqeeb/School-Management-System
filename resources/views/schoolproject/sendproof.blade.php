<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Send Result Proof</title>
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
            @include('schoolproject.parentnavbar')  

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
                    <h3>Select Child</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Result History</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <form class="new-added-form" method="POST" enctype="multipart/form-data" action="{{route("schoolproject.sendproofform")}}">
                @csrf
                    <div class="row" style="background: white; display: flex; flex-direction: column; padding:20px;">  
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label for="">Name</label>
                  <input type="text" name="child_name" value="{{$student->FirstName}} {{$student->LastName}} {{$student->OtherName}}" readonly class="form-control" id="">
                  <input type="hidden" value="{{$student->parent_id}}" name="parent_id">
                  {{-- <input type="hidden" value="{{$student->id}}" name="child_id"> --}}
                  <input type="hidden" value="{{$student->term}}" name="term">
                  <input type="hidden" value="{{$student->session}}" name="session">
                  <input type="hidden" value="{{$student->class}}"name="class" >
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label for="">Receipt Image</label>
                  <input required type="file" accept="image/*" name="file_upload" class="form-data" id="">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label for="">Description</label>
                  <textarea type="text" cols="60" rows="8" 
                  style="resize: none; border-radius: 10px; border: 1px solid whitesmoke; 
                  outline-color:whitesmoke; background-color: whitesmoke;"
                   name="description">
                    </textarea>
                </div>
                <input type="hidden" name="amount" value="0.00" class="form-control" id="">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label for="">Payment For?</label>
              <select name="payment_for" required class="select2" id="">
                    @foreach($selectExpense as $selectExpenses )
                    <option value="{{$selectExpenses->id}}">{{$selectExpenses->package_type}}</option>
                    @endforeach
              </select>
                </div>
                <input type="hidden" name="status" value="PENDING">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                <button type="submit" name="submit" style="background: rgb(25, 25, 118); padding: 10px; border-radius: 10px; border: 0; color: white;">submit</button>
                </div>
            </div>

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