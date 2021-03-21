<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html" title="Sleek Dashboard">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name text-truncate">Shop Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">



                <li class="active">
                    <a class="sidenav-item-link" href="index.html" data-toggle="collapse" data-target="#dashboard"
                        aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                        aria-expanded="false" aria-controls="app">
                        <i class="mdi mdi-pencil-box-multiple"></i>
                        <span class="nav-text">Section</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="app" data-parent="#sidebar-menu">
                        <div class="sub-menu">


                            @can('admin')
                                <li>
                                    <a class="sidenav-item-link" href="{{ route( 'add-stuff') }}">
                                        <span class="nav-text">Stuff</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{ route( 'members') }}">
                                        <span class="nav-text">Member</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="customer.html">
                                        <span class="nav-text">Create Loan</span>
                                    </a>
                                </li>
                            @endcan
                            
                            @can('manager')
                                <li>
                                    <a class="sidenav-item-link" href="customer.html">
                                        <span class="nav-text">Create Book</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="customer.html">
                                        <span class="nav-text">Create Loan</span>
                                    </a>
                                </li>
                            @endcan

                            @can('stuff')
                                <li>
                                    <a class="sidenav-item-link" href="customer.html">
                                        <span class="nav-text">Customer</span>
                                    </a>
                                </li>
                            @endcan

                            

                        </div>
                    </ul>
                </li>


            </ul>

        </div>

        <div class="sidebar-footer">
            <hr class="separator mb-0" />
            <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                    Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                    <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                </div>
                <h6 class="text-uppercase">
                    Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
                </div>
            </div>
        </div>
    </div>
</aside>
