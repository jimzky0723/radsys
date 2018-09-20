<!-- ########## START: LEFT PANEL ########## -->
<?php
    $user = \Illuminate\Support\Facades\Session::get('user');
?>
<div class="sl-logo"><a href="#"><i class="fa fa-stethoscope"></i> RadioSys</a></div>
<div class="sl-sideleft">
    <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
    </div><!-- input-group -->

    <label class="sidebar-label">Menu</label>
    <div class="sl-sideleft-menu">
        @if($user->level == 'admin')
        <a href="{{ url('/admin/dashboard') }}" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-hospital-o tx-20"></i>
                <span class="menu-item-label">Manage Hospitals</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="#" class="nav-link">Add Hospital</a></li>
            <li class="nav-item"><a href="#" class="nav-link">View list</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-user-md tx-20"></i>
                <span class="menu-item-label">Manage Doctors</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="#" class="nav-link">Add Doctor</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Doctors list</a></li>
        </ul>
        @elseif($user->level == 'doctor')
        <a href="{{ url('doctor/dashboard') }}" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
            <a href="{{ url('doctor/hospital') }}" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-hospital-o tx-20"></i>
                    <span class="menu-item-label">Manage Hospitals</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon  ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Manage Files</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="#" class="nav-link">New</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Read</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pending</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Archived</a></li>
        </ul>

        @elseif($user->level == 'hospital')
            <a href="{{ url('/admin/dashboard') }}" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">Manange Files</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
        @endif
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                <span class="menu-item-label">Settings</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="#" class="nav-link">Account Settings</a></li>
            <li class="nav-item"><a href="#" class="nav-link">System Parameters</a></li>
            <li class="nav-item"><a href="{{ url('logout') }}" class="nav-link">Sign Out</a></li>
        </ul>
    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
