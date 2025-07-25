<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Account Setting</title>
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
    <style>
             .image_pick {
	width: 150px; /* Adjust size accordingly */
	height: 150px;
	border-radius: 50%; /* Makes the image circular */
	object-fit: cover; /* Ensures the image fits within the container */
                  }
                  
                  /* Style for the camera icon label */
                  .camera-icon-label {
	position: absolute;
	/* top: 60%; */
	left: 14%;
	transform: translate(-50%, -50%);
	cursor: pointer;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 20px; /* Adjust the icon size */
	color: #fff; /* White color for the icon */
	border-radius: 50%; /* Circular background */
	padding: 10px; /* Space around the icon */
	
                  }
                  
                  /* Hide the file input element */
                  .image_file {
	display: none;
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
            @include('schoolproject.parentnavbar')  
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
           <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               @include("schoolproject.parentsidebar")
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Account Setting</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Setting</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Account Settings Area Start Here -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Update Profile</h3>
                                    </div>
                                </div>
 
                                <form class="new-added-form" id="form" method="POST" enctype="multipart/form-data" action="{{route("schoolproject.parenteditprofile", $parent->id)}}">
                                    @method("PUT")
                                    @csrf
                                    @if (empty( $parent->profileImage))
                                    <img src="{{asset("img/figure/admin.jpg")}}" class="image_pick" alt="a">
                                    @endif
                                      @if (!empty( $parent->profileImage))
                                    <img src="{{asset("storage/".$parent->profileImage)}}" class="image_pick" alt="">
                                   @endif
                                    <div class="row" style="flex-direction: column;">
                                        <label class="camera-icon-label">
                                            <input type="file" class="image_file" name="file_upload" accept="image/*">
                                            <i class="camera-icon">📷</i> <!-- This is where the camera logo goes -->
                                          </label>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Old Password *</label>
                                            <input type="password" value="" name="old_password" placeholder="" class="form-control">
                                        </div>
                                        @if($errors->any())
                                        <p style="color:red;">{{ $errors->first() }}</p>
                                    @endif
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>New Password*</label>
                                            <input type="password" id="newpassword" name="new_password" placeholder="" class="form-control">
                                        </div> 
                                        <p style="color: red;" id="message"></p>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Confirm Password *</label>
                                            <input type="password" id="cpassword" name="confirm_password"  class="form-control">
                                            {{-- <i class="far fa-calendar-alt"></i> --}}
                                            
                                            <p id="error"></p>
                                        </div>
                                 
                       
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" id="button" disabled
                                             class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                            {{-- <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
                <!-- Account Settings Area End Here -->
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
    <!-- Scroll Up Js -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- Select 2 Js -->
    <script src="/js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="/js/datepicker.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js"></script>
    <script>
        const image= document.querySelector(".image_pick");
const   image_file = document.querySelector(".image_file");
image_file.addEventListener("change", ()=>{
image.src=URL.createObjectURL(image_file.files[0]);
});
const newpassword = document.getElementById("newpassword");
const cpassword = document.getElementById("cpassword");
const btn = document.getElementById("button");
const error = document.getElementById("error");
const form = document.getElementById("form");
const message = document.getElementById("message");
cpassword.addEventListener("input", function(e){
    if(newpassword.value === cpassword.value){
        btn.disabled = false;
        error.textContent = "Password  match";
        error.style.color = "green";
    }else{
        btn.disabled = true;
        error.textContent = "Password does not match";
        error.style.color = "red";

    }
});

form.addEventListener("submit", function(e){
if(newpassword.value.length <8){
    message.textContent = "password must have a minimum value of 8";
    
    e.preventDefault();
}
});
   </script>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:35:03 GMT -->
</html>