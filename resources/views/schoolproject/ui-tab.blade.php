<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/ui-tab.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Tabs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
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
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index3.html" class="nav-link"><i class="fas fa-angle-right"></i>Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index4.html" class="nav-link"><i class="fas fa-angle-right"></i>Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index5.html" class="nav-link"><i class="fas fa-angle-right"></i>Teachers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-student.html" class="nav-link"><i class="fas fa-angle-right"></i>All Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-details.html" class="nav-link"><i class="fas fa-angle-right"></i>Student Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="admit-form.html" class="nav-link"><i class="fas fa-angle-right"></i>Admission Form</a>
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
                                    <a href="all-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>All Teachers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="teacher-details.html" class="nav-link"><i class="fas fa-angle-right"></i>Teacher Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>Add Teacher</a>
                                </li>
                                <li class="nav-item">
                                    <a href="teacher-payment.html" class="nav-link"><i class="fas fa-angle-right"></i>Payment</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>All Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="parents-details.html" class="nav-link"><i class="fas fa-angle-right"></i>Parents Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>Add Parent</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-book.html" class="nav-link"><i class="fas fa-angle-right"></i>All Book</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-book.html" class="nav-link"><i class="fas fa-angle-right"></i>Add New Book</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Acconunt</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-fees.html" class="nav-link"><i class="fas fa-angle-right"></i>All Fees Collection</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-expense.html" class="nav-link"><i class="fas fa-angle-right"></i>Expenses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-expense.html" class="nav-link"><i class="fas fa-angle-right"></i>Add Expenses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-class.html" class="nav-link"><i class="fas fa-angle-right"></i>All Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-class.html" class="nav-link"><i class="fas fa-angle-right"></i>Add New Class</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="all-subject.html" class="nav-link"><i class="flaticon-open-book"></i><span>Subject</span></a>
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
                                    <a href="exam-grade.html" class="nav-link"><i class="fas fa-angle-right"></i>Exam Grades</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="transport.html" class="nav-link"><i class="flaticon-bus-side-view"></i><span>Transport</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="hostel.html" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="notice-board.html" class="nav-link"><i class="flaticon-script"></i><span>Notice</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="messaging.html" class="nav-link"><i class="flaticon-chat"></i><span>Messeage</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="notification-alart.html" class="nav-link"><i class="fas fa-angle-right"></i>Alart</a>
                                </li>
                                <li class="nav-item">
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
                                    <a href="ui-tab.html" class="nav-link menu-active"><i class="fas fa-angle-right"></i>Tab</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-widget.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Widget</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="map.html" class="nav-link"><i class="flaticon-planet-earth"></i><span>Map</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="account-settings.html" class="nav-link"><i class="flaticon-settings"></i><span>Account</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>UI Elements</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>UI Elements</li>
                        <li>Tab</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Tab Area Start Here -->
                <div class="card ui-tab-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Default Tab</h3>
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
                        <div class="basic-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ui-tab-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Custom Tab</h3>
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
                        <div class="custom-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab4" role="tab" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab5" role="tab" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab6" role="tab" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab4" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab5" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab6" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ui-tab-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Nav Tab</h3>
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
                        <div class="border-nav-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab7" role="tab" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab8" role="tab" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab9" role="tab" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab7" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab8" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab9" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ui-tab-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Vertical Tab</h3>
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
                        <div class="vertical-tab">
                            <ul class="nav nav-tabs flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab10" role="tab" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab11" role="tab" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab12" role="tab" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab10" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                        It has survived not only five centuries, but alsowhen an unknown printer took a galley of type 
                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                        alsowhen an unknown printer took.When an unknown printer took a galley of type and scrambled 
                                        it to make a type specimen book. It has survived not only five centuries, but alsowhen an 
                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                                        survived not only five centuries, but alsowhen an unknown printer took.</p>
                                </div>
                                <div class="tab-pane fade" id="tab11" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                        It has survived not only five centuries, but alsowhen an unknown printer took a galley of type 
                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                        alsowhen an unknown printer took.When an unknown printer took a galley of type and scrambled 
                                        it to make a type specimen book. It has survived not only five centuries, but alsowhen an 
                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It 
                                        has survived not only five centuries, but alsowhen an unknown printer took.</p>
                                </div>
                                <div class="tab-pane fade" id="tab12" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                        It has survived not only five centuries, but alsowhen an unknown printer took a galley of type 
                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                        alsowhen an unknown printer took.When an unknown printer took a galley of type and scrambled 
                                        it to make a type specimen book. It has survived not only five centuries, but alsowhen an 
                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                                        survived not only five centuries, but alsowhen an unknown printer took.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ui-tab-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Icon Tab</h3>
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
                        <div class="icon-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link border-dark-pastel-green active" data-toggle="tab" href="#tab13" role="tab" aria-selected="true"><i class="fas fa-home text-dark-pastel-green"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border-dodger-blue" data-toggle="tab" href="#tab14" role="tab" aria-selected="false"><i class="fas fa-user text-dodger-blue"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border-orange-peel" data-toggle="tab" href="#tab15" role="tab" aria-selected="false"><i class="fas fa-share text-orange-peel"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border-red" data-toggle="tab" href="#tab16" role="tab" aria-selected="false"><i class="fas fa-exclamation-triangle text-red"></i></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab13" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab14" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab15" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab16" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/ui-tab.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 02:34:58 GMT -->
</html>