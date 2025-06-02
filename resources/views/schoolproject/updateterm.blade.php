<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-parents.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AKKHOR | Academic Session</title>
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
                    <h3>Make Update</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Update Academic Session</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Update</h3>
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
                                                                                                          <!-- Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="thankYouModalLabel">Success</h5>
                          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button> --}}
                        </div>
                        <div class="modal-body">
                           Term and Session Updated Successfully!
                        </div>
                      </div>
                    </div>
                  </div>
                        <form class="new-added-form" method="POST" action="{{route("schoolproject.updatetermform")}}">
                          @method("PUT")  
                                        @csrf
                            <div class="row">
                         
                                <div class="col-xl-3 col-lg-6 col-12 form-group" id="hostel">
                                    <label>Select Term</label>
                                    <select required id="" name="term" class="select2" >
                                   <option value="First Term">First Term</option>
                                   <option value="Second Term">Second Term</option>
                                   <option value="Third Term">Third Term</option>
                                    </select>
                                </div>
                                   <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Choose Academic Session *</label>
                                    <select required id="" name="session" class="select2" >
                                        @foreach ($select as $academic )
                                        <option value="{{$academic->academic_session}}">{{$academic->academic_session}}</option>            
                                        @endforeach
                                         </select>
                    </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    {{-- <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button> --}}
                                </div>
                            </div>
                        </form>
                       
                      
                    </div>
                </div>
          
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                </footer>
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
    <!-- Bootstra/p js -->
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
<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-parents.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
</html>