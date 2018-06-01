<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$setting->tittle}}</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset("assets/backend/css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("assets/backend/css/bootstrap-responsive.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("assets/backend/css/fullcalendar.css")}}"/>
    <link rel="stylesheet" href="{{asset("assets/backend/css/matrix-style.css")}}"/>
    <link rel="stylesheet" href="{{asset("assets/backend/css/matrix-media.css")}}"/>
    <link href="{{asset("assets/backend/font-awesome/css/font-awesome.css")}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset("assets/backend/css/jquery.gritter.css")}}"/>
    @stack("customCss")
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown"
                                                      data-target="#profile-messages" class="dropdown-toggle"><i
                    class="icon icon-user"></i> <span class="text">Mehabe {{Auth::user()->name}}</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{route("backend.user.edit",Auth::user()->id)}}"><i class="icon-user"></i>Profilim</a>
                </li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                <li class="divider"></li>
                <li><a href="{{route("backend.home.logout")}}"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>

    </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar">
    <a href="{{route("backend.home.index")}}" class="visible-phone"><i class="icon icon-home"></i> Yönetim Paneli</a>
    <ul>
        <li class="active"><a href="{{route("backend.home.index")}}"><i class="icon icon-home"></i><span>Yönetim Paneli</span></a></li>
        <li ><a target="_blank" href="{{route("frontend.home.index")}}"><i class="icon icon-home"></i><span>Anasayfa</span></a></li>
        <li><a href="{{route("backend.setting.index")}}"><i class="icon icon-cog"></i><span>Site Ayarları</span></a>
        </li>
        <li><a href="{{route("backend.categories.index")}}"><i class="icon icon-bar-chart"></i><span>Kategoriler</span></a>
        </li>
        <li><a href="{{route("backend.article.index")}}"><i class="icon icon-pencil"></i><span>Yazılar</span></a></li>
        <li><a href="{{route("backend.user.index")}}"><i class="icon icon-user"></i><span>Kullanıcılar</span></a></li>
        <li><a href="{{route("backend.page.index")}}"><i class="icon icon-file"></i><span>Sayfalar</span></a></li>
        <li><a href="{{route("backend.comment.index")}}"><i class="icon icon-comment"></i><span>Yorumlar</span></a></li>

    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        @yield("content")
    </div>
    <!--End-Action boxes-->


</div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a>
    </div>
</div>

<!--end-Footer-part-->

<script src="{{asset("assets/backend/js/excanvas.min.js")}}"></script>
<script src="{{asset("assets/backend/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/backend/js/jquery.ui.custom.js")}}"></script>
<script src="{{asset("assets/backend/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/backend/js/jquery.flot.min.js")}}"></script>
<script src="{{asset("assets/backend/js/jquery.flot.resize.min.js")}}"></script>
<script src="{{asset("assets/backend/js/jquery.peity.min.js")}}"></script>
{{--<script src="{{asset("assets/backend/js/matrix.js")}}"></script>--}}
{{--<script src="{{asset("assets/backend/js/matrix.dashboard.js")}}"></script>--}}
<script src="{{asset("assets/backend/js/jquery.gritter.min.js")}}"></script>
{{--<script src="{{asset("assets/backend/js/matrix.interface.js")}}"></script>--}}
{{--<script src="{{asset("assets/backend/js/jquery.validate.js")}}"></script>--}}
{{--<script src="{{asset("assets/backend/js/matrix.form_validation.js")}}"></script>--}}
<script src="{{asset("assets/backend/js/jquery.uniform.js")}}"></script>
<script src="{{asset("assets/backend/js/select2.min.js")}}"></script>
{{--<script src="{{asset("assets/backend/js/jquery.dataTables.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/backend/js/matrix.tables.js")}}"></script>--}}
<script src="https://unpkg.com/sweetalert2@7.21.0/dist/sweetalert2.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@stack("customJs")

</body>
</html>
