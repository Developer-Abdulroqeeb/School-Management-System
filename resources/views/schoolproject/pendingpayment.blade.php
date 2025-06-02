<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Pending Payments</title>
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
                    <h3>Payments</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Pending Payments</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Pendings</h3>
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
                            Payment Declined Successfully
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- modal end --}}
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                               
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" name="surname" placeholder="Search by Surname ..." class="form-control">
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
                                        <th>S/N</th>
                                        <th>Child Name</th>
                                        <th>Expense Type</th>
                                        <th>Session</th>
                                        <th>Term</th>
                                        <th>Class</th>
                                        <th>Date Paid</th>
                                        <th>View Receipt</th>
                                        {{-- <th>Amount Paid</th> --}}
                                        {{-- <th>Balance</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                    @foreach ($pendingpayment as $pendings)
                        @php
                        $expense = DB::table("schoolfees")->where("id", $pendings->payment_for)->first();                    
                        @endphp                
                   
                                    <tr>
                                        <td >{{$loop->iteration}}</td>
                                        <td> {{$pendings->child_id}}</td>   
                                        <td>{{$expense->package_type}}</td>                   
                                        <td>{{$pendings->session}}</td>
                                        <td>{{$pendings->term}}</td>
                                        <td>{{$pendings->class}}</td>
                                        <td>{{$pendings->created_at}}</td>
                                        <td>
                                                            <a href="{{ asset("storage/".$pendings->receipt_image) }}" target="_blank">
                                                            <img src="{{ asset("storage/".$pendings->receipt_image) }}" alt="Student Image" width="100" height="100">
                                                             </a>
                                                            </td>
                                        <td style="display: flex; gap: 20px; align-items: center;">
                                                    <form method="POST" action="{{route("schoolproject.declineform")}}">
                                                            @method("PUT")
                                                            @csrf
                                                            <input type="hidden" value="{{$pendings->id}}" name="decline_id">
                                                            <button type="submit" name="submit"
                                                            style="background-color: red; border: none; color: white; padding: 10px; border-radius: 7px;">Decline</button>
                                                            </form> 
                                                            <a href="{{route("schoolproject.approve", $pendings->id)}}" style="background-color: green; color: white; padding: 10px; border-radius: 7px;">
                                                             Approve
                                                            </a>       
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
               
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
    <!-- Scroll Up Js -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="/js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:50 GMT -->
</html>