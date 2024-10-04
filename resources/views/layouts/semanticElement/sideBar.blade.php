<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        {{-- <div class="user-profile position-relative" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" class="w-100" /> </div>
            <!-- User profile text-->
            <div class="profile-text pt-1"> 
                <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                <div class="dropdown-menu animated flipInY"> 
                    <a href="#" class="dropdown-item"><i class="ti-user"></i>
                        My Profile</a> 
                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My
                        Balance</a>
                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div> 
                    <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div> 
                    <a href="authentication-login1.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div> --}}
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">System</span>
                </li>
                
                @role('admin|staff')
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('admin.dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('admin.inventory')}}" aria-expanded="false"><i class="mdi mdi-clipboard-outline"></i><span
                        class="hide-menu">Inventory</span></a></li>
                @endrole
                @role('admin')
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('admin.staff')}}" aria-expanded="false"><i class="mdi mdi-face"></i><span
                        class="hide-menu">Staff Accounts</span></a></li>
                @endrole
                
                @role('user')
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('user.dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                        class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('user.MCF')}}" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span
                        class="hide-menu">Medical Consultation Form</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('user.MEF')}}" aria-expanded="false"><i class="mdi mdi-medical-bag"></i><span
                        class="hide-menu">Medical Examination Form</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{route('user.DCF')}}" aria-expanded="false"><i class="mdi mdi-flask"></i><span
                        class="hide-menu">Dental Consultation Form</span></a></li>
                @endrole

                @role('admin')
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Files</span>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i
                        class="mdi mdi-download"></i><span class="hide-menu">Downloadables </span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{route('fileMCF.download')}}" class="sidebar-link"><i
                                class="mdi mdi-book-multiple"></i><span class="hide-menu"> Medical Consultation Form
                            </span></a></li>
                    <li class="sidebar-item"><a href="{{route('fileMEF.download')}}" class="sidebar-link"><i
                                class="mdi mdi-book-plus"></i><span class="hide-menu"> Medical Examination Form
                            </span></a></li>
                </ul>
                </li>
                @endrole('admin')
            </ul>
            
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    {{-- <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div> --}}
    <!-- End Bottom points-->
</aside>