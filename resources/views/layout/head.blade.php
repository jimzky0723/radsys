<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
                    <img src="img/img3.jpg" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="#"><i class="icon ion-ios-gear-outline"></i> Account Settings</a></li>
                        <li><a href="{{ url('logout') }}"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
            <a id="btnRightMenu" href="#" class="pos-relative">
                <i class="icon ion-ios-bell-outline"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger"></span>
                <!-- end: if statement -->
            </a>
        </div><!-- navicon-right -->
    </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div class="sl-sideright">
    <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
    </ul><!-- sidebar-tabs -->

    <!-- Tab panes -->
    <div class="tab-content">

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active" id="notifications" role="tabpanel">
            <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                        <img src="img/img8.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                            <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                            <span class="tx-12">October 03, 2017 8:45am</span>
                        </div>
                    </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                        <img src="img/img9.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                            <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                            <span class="tx-12">October 02, 2017 12:44am</span>
                        </div>
                    </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                        <img src="img/img10.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                            <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                            <span class="tx-12">October 01, 2017 10:20pm</span>
                        </div>
                    </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                        <img src="img/img5.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                            <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                            <span class="tx-12">October 01, 2017 6:08pm</span>
                        </div>
                    </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                        <img src="img/img8.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                            <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                            <span class="tx-12">September 27, 2017 6:45am</span>
                        </div>
                    </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                        <img src="img/img10.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                            <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                            <span class="tx-12">September 28, 2017 11:30pm</span>
                        </div>
                    </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                        <img src="img/img9.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                            <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                            <span class="tx-12">September 26, 2017 11:01am</span>
                        </div>
                    </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                        <img src="img/img5.jpg" class="wd-40 rounded-circle" alt="">
                        <div class="media-body">
                            <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                            <span class="tx-12">September 23, 2017 9:19pm</span>
                        </div>
                    </div><!-- media -->
                </a>
            </div><!-- media-list -->
        </div><!-- #attachments -->

    </div><!-- tab-content -->
</div><!-- sl-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->