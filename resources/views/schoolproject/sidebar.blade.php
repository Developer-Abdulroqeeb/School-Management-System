<div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <img src="img/logo1.png" alt="logo">
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.dashboard")}}" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.allparents")}}" class="nav-link"><i class="fas fa-angle-right"></i>All Parents</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="parents-details.html" class="nav-link"><i class="fas fa-angle-right"></i>Parents Details</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.addparents")}}" class="nav-link"><i class="fas fa-angle-right"></i>Add Parent</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.all_student")}}" class="nav-link"><i class="fas fa-angle-right"></i>All Students</a>
                                </li>
                              
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.admit_form")}}" class="nav-link"><i class="fas fa-angle-right"></i>Admission Form</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-promotion.html" class="nav-link"><i class="fas fa-angle-right"></i>Student Promotion</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.all_teacher")}}" class="nav-link"><i class="fas fa-angle-right"></i>All Teachers</a>
                                </li>
                                <li class="nav-item">
                                    {{-- <a href="teacher-details.html" class="nav-link"><i class="fas fa-angle-right"></i>Teacher Details</a> --}}
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.add_teacher")}}" class="nav-link"><i class="fas fa-angle-right"></i>Add Teacher</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.payment")}}" class="nav-link"><i class="fas fa-angle-right"></i>Payment</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.allbook")}}" class="nav-link"><i class="fas fa-angle-right"></i>All Book</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.addbook")}}" class="nav-link menu-active"><i class="fas fa-angle-right"></i>Add New Book</a>
                                </li>
                            </ul>
                        </li>
                      <li class="nav-item sidebar-nav-item">
                             <a href="{{route("schoolproject.academic_session")}}" class="nav-link"><i class="fa fa-clock"></i><span>Academic Session</span></a>
                      </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Account</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.addbank")}}" class="nav-link"><i class="fas fa-angle-right"></i>Add Bank</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.all_fees")}}" class="nav-link"><i class="fas fa-angle-right"></i>All Fees Collection</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{route("schoolproject.allexpense")}}" class="nav-link"><i class="fas fa-angle-right"></i>Expenses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.addexpense")}}" class="nav-link"><i class="fas fa-angle-right"></i>Add Expenses</a>
                                </li> --}}
                                   <li class="nav-item">
                                    <a href="{{route("schoolproject.schoolfee")}}" class="nav-link"><i class="fas fa-angle-right"></i>School Billing Package</a>
                                </li>
                                   <li class="nav-item">
                                    <a href="{{route("schoolproject.all_school_bills")}}" class="nav-link"><i class="fas fa-angle-right"></i>All Bills</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.all_class")}}" class="nav-link"><i class="fas fa-angle-right"></i>All Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.add_class")}}" class="nav-link"><i class="fas fa-angle-right"></i>Add New Class</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("schoolproject.allsubject")}}" class="nav-link"><i class="flaticon-open-book"></i><span>Subject</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="class-routine.html" class="nav-link"><i class="flaticon-calendar"></i><span>Class Routine</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="student-attendence.html" class="nav-link"><i class="flaticon-checklist"></i><span>Attendence</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="exam-schedule.html" class="nav-link"><i class="fas fa-angle-right"></i>Exam Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.exam_grade")}}" class="nav-link"><i class="fas fa-angle-right"></i>Exam Grades</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Payment</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.pendingpayment")}}" class="nav-link"><i class="fas fa-angle-right"></i>Pending Payment</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.approvedpayment")}}" class="nav-link"><i class="fas fa-angle-right"></i>Approved Payment</a>
                                </li>
                                   {{-- <li class="nav-item">
                                    <a href="{{route("schoolproject.addpayment")}}" class="nav-link"><i class="fas fa-angle-right"></i>0Payment Fee</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("schoolproject.transport")}}" class="nav-link"><i class="flaticon-bus-side-view"></i><span>Transport</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("schoolproject.hostel")}}" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("schoolproject.noticeboard")}}" class="nav-link"><i class="flaticon-script"></i><span>Notice</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("schoolproject.messaging")}}" class="nav-link"><i class="flaticon-chat"></i><span>Messeage</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route("schoolproject.approveresult")}}" class="nav-link"><i class="fa fa-book"></i><span>Approve Results</span></a>
                        </li>
                 
                        {{-- <li> --}}
                         {{-- <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                            <ul class="nav sub-group-menu"> --}}
                                {{-- <li class="nav-item">
                                    <a href="notification-alart.html" class="nav-link"><i class="fas fa-angle-right"></i>Alart</a>
                                </li> --}}
                                {{-- <li class="nav-item">
                                    <a href="button.html" class="nav-link"><i class="fas fa-angle-right"></i>Button</a>
                                </li>
                                <li class="nav-item">
                                    <a href="grid.html" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                                </li>
                                <li class="nav-item">
                                    <a href="modal.html" class="nav-link"><i class="fas fa-angle-right"></i>Modal</a>
                                </li>
                                <li class="nav-item">
                                    <a href="progress-bar.html" class="nav-link"><i class="fas fa-angle-right"></i>Progress Bar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-tab.html" class="nav-link"><i class="fas fa-angle-right"></i>Tab</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-widget.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Widget</a>
                                </li> --}}
                            {{-- </ul>
                        </li> --}}
                        {{-- <li class="nav-item">`
                            <a href="{{route("schoolproject.map")}}" class="nav-link"><i class="flaticon-planet-earth"></i><span>Map</span></a>
                        </li> --}}
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Make Update</span></a>
                            <ul class="nav sub-group-menu">
                                   <li class="nav-item">
                                    <a href="{{route("schoolproject.promoteStudent")}}" class="nav-link"><i class="fas fa-angle-right"></i>Promote student</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.updateterm")}}" class="nav-link"><i class="fas fa-angle-right"></i>Update term/session</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("schoolproject.school_setting")}}" class="nav-link"><i class="flaticon-settings"></i><span>School Setting</span></a>
                        </li>

                    </ul>
                </div>
               
