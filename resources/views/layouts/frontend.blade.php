<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$setting->tittle}}</title>
    <meta name="description" content="{{$setting->description}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/frontend/images/favicon.ico")}}">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset("assets/frontend/css/bootstrap.min.css")}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset("assets/frontend/css/core.css")}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset("assets/frontend/css/shortcode/shortcodes.css")}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset("assets/frontend/style.css")}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset("assets/frontend/css/responsive.css")}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset("assets/frontend/css/custom.css")}}">

    <!-- Style customizer (Remove these lines please) -->
    <link rel="stylesheet" href="{{asset("assets/frontend/css/style-customizer.css")}}">
    <link href="#" data-style="styles" rel="stylesheet">
@stack("customCss")
<!-- Modernizr JS -->
    <script src="{{asset("assets/frontend/js/vendor/modernizr-2.8.3.min.js")}}"></script>

</head>
<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- Start of header area -->
@include("frontend.include.header")
<!-- End of header area -->
    <!-- Start trending post area -->

@if(request()->route()->getName()=="frontend.home.index")
    @include("frontend.include.slider")
@endif
<!-- End trending post area -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">
        @yield("content")
    </section>
    <!-- End page content -->
    <!-- Start footer area -->
@include("frontend.include.footer ")
<!-- End footer area -->
</div>
<!-- Body main wrapper end -->


<!-- Placed js at the end of the document so the pages load faster -->
<!-- jquery latest version -->
<script src="{{asset("assets/frontend/js/vendor/jquery-1.12.1.min.js")}}"></script>
<!-- Bootstrap framework js -->
<script src="{{asset("assets/frontend/js/bootstrap.min.js")}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{asset("assets/frontend/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/frontend/js/plugins.js")}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{asset("assets/frontend/js/main.js")}}"></script>
<script src="https://unpkg.com/sweetalert2@7.21.0/dist/sweetalert2.all.js"></script>
@stack("customJs")

</body>

</html>
