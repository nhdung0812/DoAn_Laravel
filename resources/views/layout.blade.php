@include('partials.header')
    <body>

        @include('partials.Navigation')
        
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
       
        <div class="wrapper">
            <div class="container-fluid">
                 @yield("main-content")
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
   <!-- Footer Start -->
@include('partials.footer')