<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Change Password</title>
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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <!-- Modernize js -->
    <script src="/js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="{{asset("img/logo2.png")}}" alt="logo">
                </div>
                <form  method="POST" action="{{route("schoolproject.passwordform")}}" class="login-form">
                   @method("PUT")
                    @csrf
                    <div class="form-group">
                      @if($errors->any())
        <p style="color:red;">{{ $errors->first() }}</p>
    @endif
                        <label>New password</label>
                        <input type="password"  name="new_password" id="new_password" class="form-control">
                        {{-- <i class="far fa-envelope"></i> --}}
                    </div>
                    <div class="form-group">
                                          <label>Confirm Password</label>
                                          <input type="password" id="confirm_password"  name="confirm_password" class="form-control">
                                          {{-- <i class="far fa-e"></i> --}}
                                      </div>
                  <input type="hidden" name="username" value="{{session("username")}}">
                  <input type="hidden" name="userId" value="{{session("userId")}}">
                  <p id="error"></p>
                    <div class="form-group">
                        <button id="button" disabled type="submit" class="login-btn">Continue</button>
                    </div>
                </form>
    
            </div>

        </div>
    </div>
    <script>
const confirm_password  = document.getElementById("confirm_password");
const new_password = document.getElementById("new_password");
const button = document.getElementById("button");
const error = document.getElementById("error");
confirm_password.addEventListener("input", function(){
  if(confirm_password.value === new_password.value){
    button.disabled = false;
    error.textContent = "Password match";
  }else{
    button.disabled = true;
    error.textContent = "Password does not match";
  }
});


    </script>
    <!-- Login Page End Here -->
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
    <!-- Custom Js -->
    <script src="/js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:44 GMT -->
</html>