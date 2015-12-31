@include('shared.header')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('shared.navbar')

    @include('shared.sidebar')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('page-header', 'Page Header')
                <small>@yield('page-desc', '')</small>
            </h1>
        </section>

        <section class="content">
            @yield('page-content', 'This page content')
        </section>
    </div>

    @include('shared.footer')

</div>

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.1.4 -->
<script src="/adminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/adminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminLTE/dist/js/app.min.js"></script>

@yield('extra-scripts')

</body>
</html>
