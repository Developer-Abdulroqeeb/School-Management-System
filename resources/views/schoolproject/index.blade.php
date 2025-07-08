<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Login</title>
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
{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Image Slider with Text</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }
    .slider {
      position: relative;
      width: 100%;
      max-width: 800px;
      height: 400px;
      margin: auto;
      overflow: hidden;
      border-radius: 10px;
    }
    .slide {
      position: absolute;
      width: 100%;
      height: 100%;
      transition: opacity 1s ease-in-out;
      opacity: 0;
    }
    .slide.active {
      opacity: 1;
    }
    .slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .text-overlay {
      position: absolute;
      bottom: 20px;
      left: 30px;
      color: white;
      font-size: 24px;
      font-weight: bold;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }
  </style>
</head>
<body>

<div class="slider" id="slider">
  <!-- Slides will be added by JS -->
</div>

<script>
  const slides = [
    {
      image: "https://picsum.photos/id/1015/800/400",
      text: "Beautiful Mountains"
    },
    {
      image: "https://picsum.photos/id/1016/800/400",
      text: "Calm Lake"
    },
    {
      image: "https://picsum.photos/id/1018/800/400",
      text: "Serene Forest"
    },
    {
      image: "https://picsum.photos/id/1019/800/400",
      text: "Sunny Beach"
    }
  ];

  const slider = document.getElementById("slider");

  slides.forEach((slide, index) => {
    const div = document.createElement("div");
    div.classList.add("slide");
    if (index === 0) div.classList.add("active");
    div.innerHTML = `
      <img src="${slide.image}" alt="Slide ${index + 1}">
      <div class="text-overlay">${slide.text}</div>
    `;
    slider.appendChild(div);
  });

  let current = 0;
  setInterval(() => {
    const allSlides = document.querySelectorAll(".slide");
    allSlides[current].classList.remove("active");
    current = (current + 1) % slides.length;
    allSlides[current].classList.add("active");
  }, 10000); // 10 seconds
</script>

</body>
</html> --}}

{{-- give me the code to do sliding images that changes every 10s with text being on those image and the text also changes with image using javascript --}}

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
                <form  method="POST" action="{{route("schoolproject.loginform")}}" class="login-form">
                    @csrf
                    <div class="form-group">
                      @if($errors->any())
        <p style="color:red;">{{ $errors->first() }}</p>
    @endif
                        <label>username</label>
                        <input type="text" placeholder="Enter usrename" name="username" class="form-control">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" placeholder="Enter password" name="password" class="form-control">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        
                        <a href="{{route("schoolproject.forgotpassword")}}" class="forgot-btn">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                </form>
    
            </div>

        </div>
    </div>
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