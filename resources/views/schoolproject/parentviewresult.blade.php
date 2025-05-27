<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Result Checker</title>
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
                    <h3>Result</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Result History</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="col-xl-8 col-12" id="printableArea">
                    <div class="card dashboard-card-eleven">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Exam Results</h3>
                                </div>
                            </div>
                            <div class="table-box-wrap">
                                {{-- <form class="search-form-box">
                                    <div class="row gutters-8">
                                        <div class="col-lg-4 col-md-3 form-group">
                                            <input type="text" placeholder="Search by Exam ..."
                                                class="form-control">
                                        </div>
                                      
                                        <div class="col-lg-2 col-md-3 form-group">
                                            <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form> --}}
                                <div class="table-responsive result-table-box" >
                                        <table class="table display data-table text-nowrap">
                                            <thead>
                                                <tr>
                                                    {{-- <th>
                                                        Action
                                                    </th> --}}
                                                    <th>Subject</th>
                                                    <th>Class</th>
                                                            <th>Test</th>
                                                    <th>Exam</th>
                                            
                                                    <th>Total</th>
                                                    <td>Grade</td>
                                                </tr>
                                            </thead>
               @foreach ($query as $result)
                       <tr>
           <td>{{$result->subject}}</td>
           <td>{{$result->class}}</td>
           <td>{{$result->test}}</td>
           <td>{{$result->exam}}</td>
             
              <td>
                        {{ $result->aggregate}}              
                  </td>
                  <td> A </td>
                 </tr>                                                           
                   @endforeach
                                                </tbody>
                                       
                                        </table>
                                        <div style="display:grid; grid-template-columns:1fr 1fr 1fr; margin-top:30px;">
                                                  <p>
                                         Total Subject Offered: {{ $count}}
                                        </p>
                                                  <p>
                                         Total Aggregate: {{ $aggregate }}/{{$count*100}}
                                        </p>
                                        @php
                                            $percentage = ($aggregate/($count*100))*100;
                                        @endphp
                                        <p>Percentage:{{
                                          number_format($percentage,2)
                                        }}% </p>
                                @if($percentage >= 70)
                                  <p>Grade: A</p>
                                @elseif($percentage >= 60)
                                  <p>Overall Grade: B</p>
                                      @elseif($percentage >= 50)
                                 <p>Overall Grade: C</p>
                                   @elseif($percentage >= 40)
                                  <p>Overall Grade: D</p>
                                     @else
                                        <p>Overall Grade: F</p>
                                        @endif
                                        
                                        </div>
                                    </div>
                                    
                            </div>
                          
                        </div>
                    </div>
                </div>
  <center>
                                    <button onclick="printDiv('printableArea')"  style="padding:10px; border:0; margin-top:20px; color:white; background:green;">Print Result</button>
                                    </center>
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by 
                    <a href="#">PsdBosS</a></div>
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
      <script>
        function printDiv(divId) {
            var content = document.getElementById(divId).innerHTML;
            var myWindow = window.open('', '', 'height=600,width=800');
            myWindow.document.write('<html><head><title>Print</title></head><body>');
            myWindow.document.write(content);
            myWindow.document.write('</body></html>');
            myWindow.document.close();
            myWindow.focus();
            myWindow.print();
            myWindow.close();
        }
    </script>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:47 GMT -->
</html>