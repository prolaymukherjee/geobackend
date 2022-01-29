<nav class="pcoded-navbar">
	<div class="pcoded-inner-navbar main-menu">
	    <div class="pcoded-navigatio-lavel">Navigation</div>
	    <ul class="pcoded-item pcoded-left-item">
	        <li class="pcoded-hasmenu active pcoded-trigger">
	            <a href="javascript:void(0)">
	                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
	                <span class="pcoded-mtext">Dashboard</span>
	            </a>
	        </li>
	    </ul>

	    <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                    <span class="pcoded-mtext">User Management</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{ url('user/create') }}">
                            <span class="pcoded-mtext">Registration</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{url('user')}}">
                            <span class="pcoded-mtext">Manage Users</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-mtext">Assign User</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                    <span class="pcoded-mtext">Area Management</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{ url('region') }}">
                            <span class="pcoded-mtext">Manage Region</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{url('user')}}">
                            <span class="pcoded-mtext">Manage Sub Region</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-mtext">Manage Area</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-mtext">Manage Distributor</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>



	</div>
</nav>