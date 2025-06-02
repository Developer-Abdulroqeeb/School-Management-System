<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-expense.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Add School Fee</title>
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
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{asset("css/select2.min.css")}}">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="{{asset("css/datepicker.min.css")}}">
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
                    <h3>School Billing Package</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All School Billing Package</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add Expense Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New School Billing Package</h3>
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
                        <form class="new-added-form" method="POST" action="{{route("schoolproject.schoolfee_form")}}">
                            @csrf
                            <div class="row">
                                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Enter  Package Type</label>
                                    <input required type="text" placeholder="schoolfee, uniform, sport wears e.t.c" name="package_type" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Enter  Amount*</label>
                                    <input required type="text" placeholder="" name="amount" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Select Class *</label>
                                    <select required class="select2" name="class">
                                        <option value="" disabled>Please Select</option>
                                        @foreach($query as $class)
                                        <option value="{{$class->class}}">{{$class->class}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Select Session *</label>
                                    <select required class="select2" name="session">
                                        <option value="" disabled>Please Select</option>
                                        @foreach($sql as $session)
                                        <option value="{{$session->academic_session}}">{{$session->academic_session}}</option>
                                       @endforeach
                                    </select>
                                </div>
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Select Term *</label>
                                    <select required class="select2" name="term">
                                        <option value="" disabled>Please Select</option>
                                           <option value="First Term" >First Term</option>
                                           <option value="Second Term" >Second Term</option>
                                           <option value="Third Term" >Third Term</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Acconunt Number</label>
                                    <input type="text" required placeholder="" name="account_number" class="form-control">
                                </div>
                                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Account Name</label>
                                    <input type="text" required placeholder="" name="account_name" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Bank Name</label>
                                    <input type="text" required placeholder="" name="bank_name" class="form-control">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                         <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <label class="form-check-label">S/N</label>
                                            </div>
                                        </th>
                                        <th>Session</th>
                                        <th>Term</th>
                                        {{-- <th>Total Expenses Amount</th> --}}
                                        <th>Class</th>
                                        <th>Action</th>
                                        
                                       
                                    </tr>
                                </thead>
                                <tbody>
                            @foreach($school_package as $school_packages  )
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">1</label>
                                            </div>
                                        </td>
                                        <td>{{$school_packages->session}}</td>
                                        <td>{{$school_packages->term}}</td>
                                        <td>{{$school_packages->class}}</td>
                                        {{-- <td>{{$school_Packages->session}}</td> --}}
                                      
                                         <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <form method="POST" action="{{route("schoolproject.deletebill")}}">
                                                @method("DELETE")
                                                @csrf
                                                 <input type="hidden" value="{{$school_packages->session}}" name="sessions">
                                          <input type="hidden" value="{{$school_packages->term}}" name="terms">
                                          <input type="hidden" value="{{$school_packages->class}}" name="classs">
                                                    <button class="dropdown-item">
                                                    <i class="fas fa-times text-orange-red"></i><span style="margin-left:10px;">Delete</span></button>
                                               </form>
                                          <form method="POST" action="{{route("schoolproject.billform")}}">
                                          @csrf
                                          <input type="hidden" value="{{$school_packages->session}}" name="session">
                                          <input type="hidden" value="{{$school_packages->term}}" name="term">
                                          <input type="hidden" value="{{$school_packages->class}}" name="class">
                                         <button class="dropdown-item" type="submit">  <i class="fas fa-eye text-yello-red"></i> view</button>
                                              </form> 
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
                <!-- Add Expense Area End Here -->
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
    <!-- Select 2 Js -->
    <script src="/js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="/js/datepicker.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-expense.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
</html>