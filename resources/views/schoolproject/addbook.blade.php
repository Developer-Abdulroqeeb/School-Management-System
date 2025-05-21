<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-parents.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AKKHOR | Add Books</title>
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
                    <h3>Books</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Add New Book</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Book</h3>
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
                        <form class="new-added-form" method="POST" action="{{route("schoolproject.bookform")}}">
                            @csrf
                            <div class="row">
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Book Name *</label>
                                    <input  required type="text" name="bookname" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Writter Name *</label>
                                    <input  required type="text" name="writer" placeholder="" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select required name="class" id="food_class" class="select2">
                                        <option value="" disabled>Please Select Class *</option>
                                        @foreach ($subjectclass as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                     
                                    </select>
                                </div>

                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Book Type*</label>
                                    <select  required name="book_type" id="housing_type" class="select2" >
                                         <option value="" disabled>Select Type*</option>
                                         <option value="NoteBook">NoteBook</option>
                                        <option value="TextBook">TextBook</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group" id="hostel">
                                    <label>Subject *</label>
                                    <select id="food_type" name="subject" class="select2" >
                                    </select>
                                </div>
                                   <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Price *</label>
                                    <input  required type="text" name="price" placeholder="" class="form-control">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Select Term*</label>
                                    <select  required name="term" id="housing_type" class="select2" >
                                         <option value="" disabled>Select Term*</option>
                                         <option value="First Term">First Term</option>
                                        <option value="Second Term">Second Term</option>
                                         <option value="Third Term">Third Term</option>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Select Session*</label>
                                    <select  required name="term" id="housing_type" class="select2" >
                                         <option value="" disabled>Select Session*</option>
                                         @foreach($query as $session)
                                         <option value="{{$session->academic_session}}">{{$session->academic_session}}</option>
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
                <!-- Add New Teacher Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#food_class').on('change', function() {
                var selectedClass = $(this).val();
                if (selectedClass) {
                    $.ajax({
                        url: '/get-book-types', 
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            food_class: selectedClass
                        },
                        success: function(response) {
                            $('#food_type').empty();
                            $('#food_type').append('<option value="">-- Select a type --</option>');
                          $.each(response, function(index, student) {
    var fullName = student.subject_name;
    $('#food_type').append('<option value="'+student.subject_name+'">'+fullName+'</option>');
});
                        }
                    });
                } else {
                    $('#food_type').empty();
                    $('#food_type').append('<option value="">-- Select a type --</option>');
                }
            });
        });


    </script>
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
<script>
    //    document.addEventListener('DOMContentLoaded', function () {
    //         const housingSelect = document.getElementById('housing_type');
    //         const hostelDiv = document.getElementById('hostel');
        
    //         housingSelect.addEventListener('change', function () {
    //             if (this.value = 'TextBook') {
    //                 hostelDiv.style.display = 'block';
                  
    //             } else {
    //                 hostelDiv.style.display = 'none';
     
    //             }
    //         });
    //    });
       
</script>

  
    
</body>




<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-parents.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
</html>