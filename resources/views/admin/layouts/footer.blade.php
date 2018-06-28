<footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; {{ \Carbon\Carbon::now()->year }} <a
                    href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank"
                    class="text-bold-800 grey darken-2">Swotline </a>, All rights reserved. </span><span
                class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i
                    class="icon-heart5 pink"></i></span></p>
</footer>

@yield('js')
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('js/admin/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/tether.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/unison.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/blockUI.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/screenfull.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/pace.min.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('js/admin/chart.min.js') }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="{{ asset('js/admin/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/app.js') }}" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('js/admin/dashboard-lite.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>
</html>