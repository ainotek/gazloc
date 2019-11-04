
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Gazloc - Votre partenaire de vie</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>
    @include('flash::message')

        <!-- Begin pages -->
        <div id="wrapper">

            <!-- Topbar Start -->
                @include('admin.partials.topbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
                @include('admin.partials.leftsidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                @yield('content')
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        <!-- Footer Start -->
            @include('admin.partials.footer');
        <!-- end Footer -->
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
            @include('admin/partials/rightsidebar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

       <!-- Vendor js -->
        <script src="{{asset('/js/vendor.min.js')}}"></script>

        <!-- KNOB JS -->
        <script src="{{asset('/libs/jquery-knob/jquery.knob.min.js')}}"></script>
        <!-- Chart JS -->
        <script src="{{asset('/libs/chart-js/Chart.bundle.min.js')}}"></script>

        <!-- Jvector map -->
        <script src="{{asset('/libs/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('/libs/jqvmap/jquery.vmap.usa.js')}}"></script>

        <!-- Datatable js -->
        <script src="{{asset('/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Dashboard Init JS -->
        <script src="{{asset('/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('/js/app.min.js')}}"></script>

    </body>
</html>
