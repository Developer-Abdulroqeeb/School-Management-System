<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Principal Comment</title>
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
    <style>
        .image_pick{
            width: 10%;
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
                    <h3>Approve</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Result</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                {{-- <h3>All Students Data</h3> --}}
                            </div>
                         
                        </div>
                      
                        <div class="table-responsive">
                            @foreach ($approve as $approves)
                            @if (!empty($approves->Schoolstamp))
                            <h1 style="color: white; background-color: green; width: 30%; text-align: center;">APPROVED</h1>
                            @endif
                            @endforeach
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>subject</th>
                                        <th>Test Score</th>
                                        <th>Exam Score</th>
                                        <th>Aggregate</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($select as $selects)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$selects->subject}}</td>
                                        <td>{{$selects->test}}</td>
                                        <td>{{$selects->exam}}</td>
                                        <td>{{$selects->aggregate}}</td>
                                        <td>
                          @php
                                      if(($selects->aggregate)>=70){
                                        echo "A";
                                      }elseif(($selects->aggregate)>=60){
                                        echo "B";
                                      }elseif(($selects->aggregate)>=50){
                                        echo "C";
                                      }elseif(($selects->aggregate)>=40){
                                        echo "D";
                                      }else{
                                        echo "F";
                                      }           
                          @endphp
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <form action="{{route("schoolproject.updateprincipalreport")}}" method="POST" enctype="multipart/form-data">
                             @csrf
                             @method("PUT")  
                             @foreach ($selectDistinct as $distints)
                           
                             <input type="hidden" value="{{$distints->studentId}}" name="studentId">
                             <input type="hidden" value="{{$distints->term}}" name="term">
                             <input type="hidden" value="{{$distints->session}}" name="session">
                             <input type="hidden" value="{{$distints->class}}"  name="class">
                            
<div>
    <label for="">Add Stamp</label><br>
    <img src="{{asset("img/figure/admin.jpg")}}" class="image_pick" alt="a">

    <input type="file" accept="image/*"   name="file_upload" class="image_file">
</div>
                             @endforeach
                     <div style="display: flex; flex-direction: column; width: 70%; padding:20px; gap: 20px;">
                        <label for="">Management Comment</label>
                     <textarea name="principalReport" value="" id="" style="resize:none; padding: 20px; " cols="20" rows="3"></textarea>
                     <button type="submit" style="background: rgb(6, 6, 73); width: 30%; color: white; border: 0; border-radius: 7px;">Submit Comment</button>
                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
               
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <script>
               const image=document.querySelector(".image_pick");
const   image_file = document.querySelector(".image_file");
image_file.addEventListener("change", ()=>{
image.src=URL.createObjectURL(image_file.files[0]);
});
    </script>
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