<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
<!doctype html>
</html>
<html class="no-js" lang="">
<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Input Result</title>
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
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{asset("css/jquery.dataTables.min.css")}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <!-- Modernize js -->
    <script src="/js/modernizr-3.6.0.min.js"></script>
    <style>
          .score{
                    padding: 10px;
                    border:  1px solid black;
                    border-radius: 10px;
          }          
    </style>
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
                @include("schoolproject.teachersidebar")
             </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Enter Scores</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                      
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- All Subjects Area Start Here -->
                <div class="row">
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                    </div>
                                </div>
                                <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder="Search by Subject ..." class="form-control">
                                        </div>
                                        
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="table-responsive">

                                        <form action="{{route("schoolproject.teachersendresultform")}}" method="POST">
                                                            @csrf
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>Select Subject *</label>
                                         <select required name="subject" class="select2">
                                         <option value="0" disabled>Please Select</option>
                                         @foreach ($subject as $subjects)
                                         <option value="{{$subjects->id}}">{{$subjects->subject_name}}</option>
                                         @endforeach
                                             </select>
                                             <input type="hidden" name="class" value="{{ $subject[0]->class ?? '' }}">
                                             <input type="hidden" name="term" value="{{ $subject[0]->term ?? '' }}">
                                             <input type="hidden" name="session" value="{{ $subject[0]->session ?? '' }}">
                                        </div>    
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                       <p style="color:red;">Note: You have to Upload all student at once and avoid mistake</p>
                                       @if($errors->any())
                                       <p style="color:red;">{{ $errors->first() }}</p>
                                   @endif
                                       <tr>
                                                <th>                  
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input checkAll">
                                                        <label class="form-check-label">S/N</label>
                                                    </div>
                                                </th>
                                                <th>Student Name</th>
                                                <th>Test Score</th>
                                                <th>Exam Score</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>

                                        <tbody>
                              @foreach ($selectStudent as $students)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$students->FirstName}} {{$students->LastName}}</td>
                                                <td><input class="score" name="test[]" type="text"></td>
                                                <input type="hidden" value="{{$students->id}}" name="studentId[]" id="">
                                                <td><input class="score" name="exam[]" type="text"></td>
                                            </tr>
                                    @endforeach
                                        </tbody>
                                    </table>
                                    <button type="submit" name="submit" style="background:rgb(12, 12, 91) ; border: 0; color: white; padding: 7px; border-radius: 7px;">Upload</button>
                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- All Subjects Area End Here -->
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
    <!-- Select 2 Js -->
    <script src="/js/select2.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="/js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
</html>