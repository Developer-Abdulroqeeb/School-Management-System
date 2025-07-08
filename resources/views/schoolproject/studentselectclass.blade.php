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
   <style>
    .popup{
    
        
    }
    .popform{
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        z-index: 99;
        width: 100vw;
        height: 100vh;
        background-color:rgba(0, 0, 0, 0.5);
    }
    .modaldiv{
        background-color: white;
        padding:20px 0;
        box-shadow: 1px 1px 1px 1px rgb(234, 230, 230);
        align-items: center;
        justify-content: center;
    }
    .popup{
        display: none;
    }
    .popup.show{
        display: block;
    }
   </style>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
        <!-- token purschase modal start here -->
        <div class="popup" id="popup">
            <form class="popform" method="POST" action="{{route("schoolproject.buytoken")}}">  
          @csrf
                <div class="row modaldiv" id="modalElement">
               <p><b>Get Token:</b></p>
               <div class="col-xl-3 col-lg-6 col-12 form-group">
                   <label>Term</label>
                   <select class="select2"  required name="term" id="">
                       <option value="First Term">
                           First Term
                       </option>
                       <option value="Second Term">
                           Second Term
                       </option>
                       <option value="Third Term">
                           Third Term
                       </option>
                   </select>
               </div>
               <input type="hidden" value="{{session("student_id")}}" name="studentId">

               <div class="col-xl-3 col-lg-6 col-12 form-group">
                   <label>Session</label>
                   <select class="select2"  required name="session" id="">
                      @foreach ($academic as $session )
                      <option value="{{$session->academic_session }}">
                      {{$session->academic_session}} 
                      </option>      

                      @endforeach
                   </select>
                   @php
   $rand = mt_rand(999,10000);
                  $date = date('Y');
                    $token = "RES".$date.$rand;
                   @endphp
                  <input type="hidden" value="@php
                    echo $token;
                      
                  @endphp" name="token">
               </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group">
                <label>Class</label>
                <select class="select2" required name="class" id="">
                    @foreach ($class as $studentclass)
                    <option value="{{ $studentclass->class}}">
                        {{ $studentclass->class}}
                    </option>
                    @endforeach
                </select>
            </div>
           <button type="submit" style="background: green;
            border: 1px solid green; color: white; padding: 10px; border-radius: 7px;">BUY NOW</button>

           </div>
          
            </form>
            </div>
            <!-- token purschase modal ends here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            @include('schoolproject.studentnavbar')  

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
                @include("schoolproject.studentsidebar");
             </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Check Result</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Result History</li>
                    </ul>
                </div>
                @if ($errors->any())
                <p style="color: red;">{{$errors->first()}}</p>
            @endif
                <form class="new-added-form" method="POST" action="{{route("schoolproject.studentseeresultform")}}" >
                @csrf
                    <div class="row" style="background: white; padding:20px;">
                    
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Class</label>
                    <select class="select2" required name="class" id="">
                        @foreach ($class as $studentclass)
                        <option value="{{ $studentclass->class}}">
                            {{ $studentclass->class}}
                        </option>
                        @endforeach
             
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Term</label>
                    <select class="select2"  required name="term" id="">
                        <option value="First Term">
                            First Term
                        </option>
                        <option value="Second Term">
                            Second Term
                        </option>
                        <option value="Third Term">
                            Third Term
                        </option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Session</label>
                    <select class="select2"  required name="session" id="">
                       @foreach ($academic as $session )
                       <option value="{{$session->academic_session }}">
                       {{$session->academic_session}} 
                       </option>      
                       @endforeach
                    </select>
                </div>
               <input type="hidden" value="{{session("student_id")}}" name="studentid">

                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label for="">Result Token</label>
                    <input type="text" class="form-control" name="token" id="">
                </div>
                <p id="showToken"> Don't have token? <span style="color: green; cursor: pointer; font-weight: bold;">Purchase</span> </p>
                </div>
                <button type="submit" name="submit" style="background: rgb(25, 25, 118); padding: 10px; border-radius: 10px; border: 0; color: white;">Continue</button>

                </form>
                            
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                            href="#">PsdBosS</a></div>
                </footer>
                <!-- Dashboard Content End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
        {{-- succesfully buy tpken modal --}}
        <div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="thankYouModalLabel">Success</h5>
                  {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button> --}}
                </div>
                <div class="modal-body">
                    Your Token is 
                    @php
                        if(isset($token)){
                            echo $token;
                        }
                    @endphp
                </div>
              </div>
            </div>
          </div>
          {{-- succsessful end --}}
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
    <script src="/js/select2.min.js"></script>
    <script>
  const showToken = document.getElementById("showToken");
    const popup = document.getElementById("popup");

    showToken.addEventListener("click", function (event) {
      event.stopPropagation(); // Stop the click from reaching the document
      popup.classList.toggle("show");
    });

    document.addEventListener("click", function (event) {
      // If click is outside both the button and the popup, close it
      if (!popup.contains(event.target) && !showToken.contains(event.target)) {
        popup.classList.remove("show");
      }
    });

    // Optional: Escape key closes the popup too
    document.addEventListener("keydown", function (event) {
      if (event.key === "Escape") {
        popup.classList.remove("show");
      }
    });
    </script>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:47 GMT -->
</html>