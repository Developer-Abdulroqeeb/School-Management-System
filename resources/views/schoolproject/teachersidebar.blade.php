@php
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;
    use App\Models\notice;

    $teacherId = Session::get("teacher_id");


    $query = DB::table("teachers")->where("id", $teacherId)->first();
    $notices = notice::where("notice_for", "teacher")->get();
    $notice_count = $notices->count();
@endphp

<div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <img src="img/logo1.png" alt="logo">
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="{{route("schoolproject.teacherdashboard")}}" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                        </li>

                        
                        <li class="nav-item sidebar-nav-item"> 
                            <a href="{{route("schoolproject.mystudent", $query->classteacher)}}" class="nav-link"><i class="fa fa-users"></i><span>My Students</span></a>
                        </li>
                           <li class="nav-item sidebar-nav-item"> 
                            <a href="{{route("schoolproject.student_subjects", $query->classteacher)}}" class="nav-link"><i class="fa fa-book"></i><span>Student Subjects</span></a>
                        </li>
                     
                        
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Result</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item"> 
                                    <a href="{{route("schoolproject.uploadresult")}}" class="nav-link"><i class="fas fa-angle-right"></i>Upload Results</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.incomingresult")}}" class="nav-link"><i class="fas fa-angle-right"></i>Incoming Result</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.sendresult")}}" class="nav-link"><i class="fas fa-angle-right"></i>Send Result</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
