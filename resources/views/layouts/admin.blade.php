<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    @yield('meta-tags')

    <title>@yield('title','Sweet Celebrationz LLC - Dubai')</title>

    @yield('top-css')
    @yield('theme-css')
    @yield('lower-css')


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<!-- BEGIN: Header-->
@include('include.nav')
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
@include('include.sidebar')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-header row">
    </div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            @yield('content-body')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
@include('include.footer')
<!-- END: Footer-->

@yield('top-js')

@yield('theme-js')

@yield('lower-js')

</body>
<!-- END: Body-->
</html>
