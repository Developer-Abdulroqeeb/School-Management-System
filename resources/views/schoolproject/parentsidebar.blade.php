
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="{{route("schoolproject.parentdash")}}" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>    
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="{{route("schoolproject.parentexpenses")}}" class="nav-link"><i class="flaticon-books"></i><span>Expenses</span></a>
                        </li>
                            <li class="nav-item sidebar-nav-item">
                            <a href="{{route("schoolproject.parent_result")}}" class="nav-link"><i class="fa fa-book"></i><span>Results </span></a>

                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Payment</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.selectChildPayment")}}" class="nav-link"><i class="fas fa-angle-right"></i>Send Payment Proof</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("schoolproject.parentpaymentstatus")}}" class="nav-link"><i class="fas fa-angle-right"></i>Payment Status/History</a>
                                </li>
                            </ul>
                        </li>
                        </ul>
                </div>
