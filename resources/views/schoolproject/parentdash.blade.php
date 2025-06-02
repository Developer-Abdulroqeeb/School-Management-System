<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Home 4</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
<style>

</style>
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
                @include("schoolproject.parentsidebar");
             </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Parent Dashboard</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Parents</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="row">
                    <div class="col-3-xxxl col-sm-6 col-12">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red">
                                        <i class="flaticon-money text-red"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Due Fees</div>
                                        <div class="item-number"><span>₦</i></span><span class="counter" data-num="{{$totalExpenses-$amount_paid}}">{{$totalExpenses-$amount_paid}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3-xxxl col-sm-6 col-12">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-magenta">
                                        <i class="flaticon-shopping-list text-magenta"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Notifications</div>
                                        <div class="item-number"><span class="counter" data-num="{{$notice_count}}" >{{$notice_count}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3-xxxl col-sm-6 col-12">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-money text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Total Amount Paid</div>
                                        <div class="item-number"><span>₦</span><span class="counter" data-num="{{$amount_paid}}">{{$amount_paid}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3-xxxl col-sm-6 col-12">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-money text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Expenses</div>
                                        <div class="item-number"><span>₦</span><span class="counter" data-num="{{$totalExpenses}}">{{$totalExpenses}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard summery End Here -->
                <!-- Dashboard Content Start Here -->
                <div class="row">
                    <div class="col-5-xxxl col-12">
                        <div class="card dashboard-card-twelve">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>My Kids</h3>
                                    </div>
                 
                                </div>
                                 
                                <div class="kids-details-wrap"  style="">

                                    <div class="row">
                                     @foreach ($student as $children)
                                        <div class="col-12-xxxl col-xl-6 col-12">
                                            <div class="kids-details-box mb-5">
                                                <div class="item-img">
                                                    <img src="img/figure/student.png" alt="kids">
                                                </div>
                                                <div class="item-content table-responsive" >
                                                    <table class="table text-nowrap">
                                                        <tbody>
                                                            <tr>
                                                                <td>Surname:</td>
                                                                <td>{{$children->FirstName}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Last Name:</td>
                                                                <td>{{$children->LastName}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Other Name:</td>
                                                                <td>{{$children->OtherName}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gender:</td>
                                                                <td>{{$children->Gender}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Class:</td>
                                                                <td>{{$children->class}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Housing Mode:</td>
                                                                <td>{{$children->housing_mode}}</td>
                                                            </tr>
                                                          
                                                    
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
  @endforeach 
                                    </div>
                                  
                                </div>
                              
                            </div>
                        </div>
                    </div>
                                                                                  <!-- Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="thankYouModalLabel">Success</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button> --}}
        </div>
        <div class="modal-body">
            Payment Made Successfully
        </div>
      </div>
    </div>
  </div>
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                            href="#">PsdBosS</a></div>
                </footer>
                <!-- Dashboard Content End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @if(session('showModal'))
    <script>
        window.addEventListener('load', function () {
            var myModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
            myModal.show();
        });
    </script>
    @endif
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

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:47 GMT -->
</html>