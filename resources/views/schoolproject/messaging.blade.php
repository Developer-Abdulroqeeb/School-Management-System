<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/messaging.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Messaging</title>
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
                    <h3>Messaging</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Compose Message</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Notice Area Start Here -->
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Write New Message</h3>
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
            Successfully Message Sent!
        </div>
      </div>
    </div>
  </div>
                                <form class="new-added-form" method="POST" action="{{route("schoolproject.AdminsendMessage")}}">
                                  @csrf
                                    <div class="row">
                                        <input type="hidden" value="{{$adminMail->SchoolMail}}" name="sender_mail">
                                        <div class="col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" placeholder="" name="title" class="form-control">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Recipient mail</label>
                                            <input type="text" placeholder="" name="receiver_mail" class="form-control">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Message</label>
                                            <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                            rows="9"></textarea>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Add Notice Area End Here -->
                    <!-- All Notice Area Start Here -->
                    <div class="col-xl-4">
                        <div class="card message-box-wrap height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <button type="button" id="sentBtn">
                                     Sent Message <i class="fa fa-paper-plane"></i>
                                    </button>
                            <button type="button" id="inboxBtn">inbox
                             </button>
                                    </div>
                                </div>
                  <div class="sent_message" id="sent_message">
                    @foreach ($SentMail as $mail ) 
                                <div class="message_success" style="background-color:rgb(240, 241, 243); margin-top:10px; padding:10px;">
                                    
                    <p class="item-title">To: <b>{{ $mail->receiver_mail}}</b></p>
               <p class="item-title">Title: <b>{{ $mail->title}}</b></p>
                 <p class="item-title">Subject: <b>{{ $mail->message}}</b></p>    
                                        
                          </div>
                          @endforeach  
                        </div>
                        <div class="inbox hidden" id="inbox">
                            @foreach ($InboxMail as $email ) 
                                <div class="message_success" style="background-color:rgb(240, 241, 243); margin-top:10px; padding:10px;">
                                    <p class="item-title">From: <b>{{ $mail->sender_mail }}</b></p>
                                    <p class="item-title">Title: <b>{{ $mail->title }}</b></p>
                                    <p class="item-title">Subject: <b>{{ $mail->message }}</b></p>    
                                </div>
                            @endforeach  
                        </div>
                            </div>
                        </div>
                       
                    </div>
                    <!-- All Notice Area End Here -->
                </div>
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by
                        <a href="#">PsdBosS</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    @if(session('showModal'))
<script>
    window.addEventListener('load', function () {
        var myModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
        myModal.show();
    });
</script>
@endif
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const sentBtn = document.getElementById("sentBtn");
    const inboxBtn = document.getElementById("inboxBtn");
    const sent_message = document.getElementById("sent_message");
    const inbox = document.getElementById("inbox");

    sentBtn.addEventListener("click", function () {
        sent_message.style.display = "block";
        inbox.style.display = "none";
    });

    inboxBtn.addEventListener("click", function () {
        sent_message.style.display = "none";
        inbox.style.display = "block";
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <!-- Custom Js -->
    <script src="/js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/messaging.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:57 GMT -->
</html>