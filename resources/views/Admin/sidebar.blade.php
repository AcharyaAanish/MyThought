<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{__('MyThought')}} - Dashboard</title>

        <!-- Custom fonts for this template-->
        <link href={{asset('assetss/vendor/fontawesome-free/css/all.min.css')}} rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href={{asset('assetss/css/sb-admin-2.min.css')}} rel="stylesheet">

    </head>
    <body id="page-top">
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/home')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">{{__('MyThought')}}</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/home')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('about.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>{{__('About Us')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('book.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>{{__('BOOKS')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('movie.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>{{__('MOVIES')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('blog.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>{{__('BLOGS')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('take.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>{{__('TAKE ME')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('contact.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>{{__('CONTACT US')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('user.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>{{__('USER MANAGEMENT')}}</span>
            </a>
        </li>



        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
    @yield('content')

    <!-- End of Content Wrapper -->

</div>


<script src={{asset('assetss/vendor/jquery/jquery.min.js')}}></script>
 <script src={{asset('assetss/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>

 <!-- Core plugin JavaScript-->
 <script src={{asset('assetss/vendor/jquery-easing/jquery.easing.min.js')}}></script>

 <!-- Custom scripts for all pages-->
 <script src={{asset('assetss/js/sb-admin-2.min.js')}}></script>

 <!-- Page level plugins -->
 <script src={{asset('assetss/vendor/chart.js/Chart.min.js')}}></script>

 <!-- Page level custom scripts -->
 <script src={{asset('assetss/js/demo/chart-area-demo.js')}}></script>
<script src={{asset('assetss/js/demo/chart-pie-demo.js')}}></script>
    </body>
</html>
