<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
  
    <link href="{{ asset('assets/plugins/data-tables/datatables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/data-tables/jquery.datatables.min.css') }}" rel="stylesheet" />


    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('assets/css/sleek.css') }}" />

    <!-- FAVICON -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon" />
    <script src="{{ asset('assets/plugins/nprogress/nprogress.js') }}"></script>

     @livewireStyles
    <style>
        .invalid-feedback{
            display: block !important;
        }
        .cus-error-border{
            border-color: red !important;
        }
    </style>
    <!-- Scripts -->
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <div class="wrapper">
        @livewire('side-bar');

        
    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- search form -->
                <div class="search-form d-none d-lg-inline-block">
                    <div class="input-group">
                        <button type="button" name="search" id="search-btn" class="btn btn-flat">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <input type="text" name="query" id="search-input" class="form-control"
                            placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
                    </div>
                    <div id="search-results-container">
                        <ul id="search-results"></ul>
                    </div>
                </div>

                <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        <li class="right-sidebar-in right-sidebar-2-menu">
                            <i class="mdi mdi-settings mdi-spin"></i>
                        </li>
                        <!-- User Account -->
                        <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                                <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- User image -->
                                <li class="dropdown-header">
                                    <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                                    <div class="d-inline-block">
                                        {{ Auth::user()->name }} <small class="pt-1">{{ Auth::user()->email }}</small>
                                    </div>
                                </li>
                                <li class="right-sidebar-in">
                                    <a href="{{ route('profile.show') }}"> <i class="mdi mdi-settings"></i> Setting </a>
                                </li>
                                <li class="dropdown-footer">
                                    <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
            
                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                               <i class="mdi mdi-logout"></i> {{ __('Log Out') }}
                                            </x-jet-dropdown-link>
                                        </form> 
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        {{ $slot }}

        <footer class="footer mt-auto">
            <div class="copyright bg-white">
                <p>
                    &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                    <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;

            </script>
        </footer>

    </div>
       
    </div>
    {{-- <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        {{-- @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
    </div>
    </header>
    @endif --}}

    <!-- Page Content -->
    {{-- <main>
        {{ $slot }}
    </main>
    </div> --!> --}}
    @stack('modals')

    @livewireScripts

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jekyll-search.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    
    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery('input[name="dateRange"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                jQuery(this).val('');
            });
        });

    </script>



    
    

    <script>
        window.addEventListener('openViewModal', event => {
            $('#viewModal').modal('show');
        });
        window.addEventListener('closeViewModal', event => {
            $('#viewModal').modal('hide');
        });
        window.addEventListener('openEditModal', event => {
            $('#editModal').modal('show');
        });
        window.addEventListener('closeEditModal', event => {
            $('#editModal').modal('hide');
        });
        window.addEventListener('openDeleteModal', event => {
            $('#deleteModal').modal('show');
        });
        window.addEventListener('closeDeleteModal', event => {
            $('#deleteModal').modal('hide');
        });
        window.addEventListener('openNewModal', event => {
            $('#newModal').modal('show');
        });
        window.addEventListener('closeNewModal', event => {
            $('#newModal').modal('hide');
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#hoverable-data-table').DataTable({
                "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
            });
        });
    </script>
    <script src="{{ asset('assets/js/sleek.bundle.js') }}"></script>
    
</body>

</html>
