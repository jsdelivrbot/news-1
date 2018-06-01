<header class="header-area header-wrapper bg-white clearfix">
    <!-- Start Sidebar Menu -->
    <div class="sidebar-menu">
        <div class="sidebar-menu-inner"></div>
        <span class="fa fa-remove"></span>
    </div>
    <!-- End Sidebar Menu -->
    <div class="header-top-bar bg-dark ptb-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7  hidden-xs">
                    <div class="header-top-left">
                        <nav class="header-top-menu zm-secondary-menu">
                            <ul>
                                <li><a href="{{route("frontend.home.index")}}">Anasayfa</a></li>
                                @foreach($pages as $page)
                                    <li>
                                        <a href="{{route("frontend.page.index",["id"=>$page->id,"slug"=>$page->slug])}}">{{$page->tittle}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                    <div class="header-top-right clierfix text-right">
                        <div class="header-social-bookmark topbar-sblock">
                            <ul>
                                <li><a href="https://www.facebook.com/{{$setting->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://plus.google.com/{{$setting->google}}"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://twitter.com/{{$setting->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com/{{$setting->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://instagram.com/{{$setting->pinterest}}"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="user-accoint topbar-sblock">
                            @if(!Auth::check())
                                <span class="login-btn uppercase">Giriş Yap</span>
                                <span class="kayit-btn uppercase"><a href="{{route("register")}}">Kayıt Ol</a></span>
                                <div class="login-form-wrap bg-white">

                                    <form method="POST" action="{{ route('login') }}" class="zm-signin-form text-left">
                                        @csrf

                                        <input id="email" type="email"
                                               class="zm-form-control username{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}" placeholder="EMail Adresiniz"
                                               required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                        <input id="password" type="password"
                                               class="zm-form-control password{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" placeholder="Şifreniz" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                        <input type="checkbox" name="remember"
                                               class="remember" {{ old('remember') ? 'checked' : '' }}> &nbsp;Beni
                                        Hatırla<br>
                                        <div class="zm-submit-box clearfix  mt-20">
                                            <input type="submit" value="Giriş">
                                            <a href="{{route('register')}}">Kayıt Ol</a>
                                        </div>
                                        <a href="{{ route('password.request') }}" class="zm-forget">Şifremi Unuttum</a>

                                    </form>
                                </div>
                            @else
                                @if(Auth::user()->yetki=="admin")
                                    <span class="login-btn uppercase"><a href="{{route("backend.home.index")}}">Yönetim Paneli</a></span>
                                    |
                                @endif
                                <span class="login-btn uppercase"><a href="{{route("frontend.user.profil")}}">Profilim</a></span> |
                                <span class="login-btn uppercase"><a
                                        href="{{route("frontend.home.logout")}}">Çıkış Yap</a></span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle-area">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-lg-4 col-sm-5 col-xs-12 header-mdh">
                    <div class="global-table">
                        <div class="global-row">
                            <div class="global-cell">
                                <div class="logo">
                                    <a href="{{route("frontend.home.index")}}">
                                        <img src="{{asset($setting->logo)}}" alt="main logo">
                                    </a>
                                    <p class="site-desc">{{$setting->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="col-md-8 col-lg-7 col-sm-7 col-xs-12 col-lg-offset-1 header-mdh hidden-xs">--}}
                {{--<div class="global-table">--}}
                {{--<div class="global-row">--}}
                {{--<div class="global-cell">--}}
                {{--<div class="advertisement text-right">--}}
                {{--<a href="#" class="block"><img src="assets/frontend/images/ad/1.jpg"--}}
                {{--alt="ad img"></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="header-bottom-area hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-wrapper  bg-theme clearfix">
                        <div class="row">
                            <div class="col-md-11">
                                <button class="sidebar-menu-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <div class="mainmenu-area">
                                    <nav class="primary-menu uppercase">
                                        <ul class="clearfix">

                                            @foreach($categories as $category)
                                                <li class="current drop"><a
                                                        href="{{route("frontend.category.index",["id"=>$category->id,"slug"=>$category->slug])}}">{{$category->tittle}}</a>
                                                    @if($category->subcategory->count())

                                                        <ul class="dropdown">
                                                            @foreach($category->subcategory as $subcategory)
                                                                <li>
                                                                    <a href="{{route("frontend.category.index",["id"=>$subcategory->id,"slug"=>$subcategory->slug])}}">{{$subcategory->tittle}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="search-wrap pull-right">
                                    <div class="search-btn"><i class="fa fa-search"></i></div>
                                    <div class="search-form">
                                        <form action="{{route("frontend.search.index")}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="search" name="search" placeholder="Ara">
                                            <button type="submit"><i class='fa fa-search'></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
