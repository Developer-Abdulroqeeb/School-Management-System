@php
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;
    use App\Models\notice;


    $studentId = Session::get("student_id");
    $query = DB::table("student-information")->where("id", $studentId)->first();
    $notices = notice::where("notice_for", "student")->get();
    $notice_count = $notices->count();
@endphp
<div class="nav-bar-header-one">
                    <div class="header-logo">
                      
                            <img src="{{asset ('img/logo.png')}}" alt="logo">
                    </div>
                     <div class="toggle-button sidebar-toggle">
                        <button type="button" class="item-link">
                            <span class="btn-icon-wrap">
                                <span></span>
                                <span></span>                   
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
                {{-- <div class="d-md-none mobile-nav-bar">
                   <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                        <i class="far fa-arrow-alt-circle-down"></i>
                    </button>
                    <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                        <i class="fas fa-bars"></i>
                    </button>
                </div> --}}
                <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                    <ul class="navbar-nav">
                        <li class="navbar-item header-search-bar">
                            <div class="input-group stylish-input-group">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="flaticon-search" aria-hidden="true"></span>
                                    </button>
                                </span>
                                <input type="text" class="form-control" placeholder="Find Something . . .">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="navbar-item dropdown header-admin">
                            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <div class="admin-title">
                                    <h5 class="item-title">{{$query->FirstName}} {{$query->OtherName}}</h5>
                                   
                                    <span>Admin</span>
                                </div>
                                <div class="admin-img">
                                    @if (empty($query->profileImage))
                                    <img src="{{asset("img/figure/admin.jpg")}}" style="" alt="Admin">
                                    @endif
                                    @if (!empty($query->profileImage))
                                    <img src="{{ asset('storage/' . $query->profileImage) }}" style="width:50px; height:50px;" alt="Admin">
                                    @endif
              
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="item-header">
                                    <h6 class="item-title">{{ $query->FirstName}} {{$query->LastName}}</h6>
                                </div>
                                <div class="item-content">
                                    <ul class="settings-list">
                                        <li><a href="{{route("schoolproject.studentprofile",$query->id)}}"><i class="flaticon-user"></i>My Profile</a></li>

                                        <li><a href="{{route("schoolproject.studentsettings",$query->id)}}"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                        <li><a href="{{route("schoolproject.index")}}"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="navbar-item dropdown header-message">
                            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="far fa-envelope"></i>
                                <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                                <span>5</span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="item-header">
                                    <h6 class="item-title">05 Message</h6>
                                </div>
                                <div class="item-content">
                                    <div class="media">
                                        <div class="item-img bg-skyblue author-online">
                                            <img src="{{asset('img/figure/student11.png')}}" alt="img">
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="item-title">
                                                <a href="#">
                                                    <span class="item-name">Maria Zaman</span> 
                                                    <span class="item-time">18:30</span> 
                                                </a>  
                                            </div>
                                            <p>What is the reason of buy this item. 
                                            Is it usefull for me.....</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item-img bg-yellow author-online">
                                            <img src="{{asset('img/figure/student12.png')}}" alt="img">
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="item-title">
                                                <a href="#">
                                                    <span class="item-name">Benny Roy</span> 
                                                    <span class="item-time">10:35</span> 
                                                </a>  
                                            </div>
                                            <p>What is the reason of buy this item. 
                                            Is it usefull for me.....</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item-img bg-pink">
                                            <img src="{{asset('img/figure/student13.png')}}" alt="img">
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="item-title">
                                                <a href="#">
                                                    <span class="item-name">Steven</span> 
                                                    <span class="item-time">02:35</span> 
                                                </a>  
                                            </div>
                                            <p>What is the reason of buy this item. 
                                            Is it usefull for me.....</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item-img bg-violet-blue">
                                            <img src="{{asset('img/figure/student11.png')}}" alt="img">
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="item-title">
                                                <a href="#">
                                                    <span class="item-name">Joshep Joe</span> 
                                                    <span class="item-time">12:35</span> 
                                                </a>  
                                            </div>
                                            <p>What is the reason of buy this item. 
                                            Is it usefull for me.....</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navbar-item dropdown header-notification">
                            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                                <span>{{$notice_count}} </span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="item-header">
                                    <h6 class="item-title">{{$notice_count}} Notifiacations</h6>
                                </div>
                                <div class="item-content">
                                    <div class="media">
                                        @foreach ($notices as $noticeboard )
                                        <div class="item-icon bg-skyblue">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="post-title">{{$noticeboard->title}}</div>
                                            <span>{{$noticeboard->date}}</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                    
                    </ul>
                </div>