<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                2019 &copy; Upvex theme by <a href="">Coderthemes</a> 
            </div>
            <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript:void(0);">About Us</a>
                    <a href="javascript:void(0);">Help</a>
                    <a href="javascript:void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

@include('partials.Right_bar')

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{ asset ('assets/js/vendor.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

<!-- App js-->
<script src="{{ asset ('assets/js/app.min.js')}}"></script>
@yield("js")
</body>
</html>