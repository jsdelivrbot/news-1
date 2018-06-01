{{--<div class="trending-post-area">--}}
{{--<div class="container-fluid">--}}
{{--<div class="row">--}}
{{--<div class="trend-post-list zm-posts owl-active-1 clearfix">--}}

{{--@foreach($sliders as $slider)--}}
{{--<!-- Start single trend post -->--}}
{{--<div class="col-2">--}}
{{--<article class="zm-trending-post zm-lay-a zm-single-post" data-dark-overlay="2.5"  data-scrim-bottom="9" data-effict-zoom="3">--}}
{{--<div class="zm-post-thumb">--}}
{{--<img style="width: 337px; height: 490px;" src="{{asset($slider->image)}}" alt="img">--}}
{{--</div>--}}
{{--<div class="zm-post-dis text-white">--}}
{{--<div class="zm-category"><a href="{{route("frontend.category.index",["id"=>$slider->category->id,"slug"=>$slider->category->slug])}}" class="bg-cat-3 cat-btn">{{$slider->category->tittle}}</a></div>--}}
{{--<h2 class="zm-post-title"><a href="{{route("frontend.article.index",["id"=>$slider->id,"slug"=>$slider->slug])}}">{{$slider->tittle}}</a></h2>--}}
{{--<div class="zm-post-meta">--}}
{{--<ul>--}}
{{--<li class="s-meta"><a href="{{route("frontend.user.index",["id"=>$slider->user->id,"name"=>$slider->user->name])}}" class="zm-author">{{$slider->user->name}}</a></li>--}}
{{--<li class="s-meta"><a href="#" class="zm-date">{!!  date("d-m-y H:m",strtotime($slider->created_at))!!}</a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</article>--}}
{{--</div>--}}
{{--<!-- End single trend post -->--}}
{{--@endforeach--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<!-- Start Slider post area -->
<div class="slider-post-area">
    <div class="container">
        <div class="row">
            <!-- Start Left side -->
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-8">
                <div class="slider-post-area-content">
                    <ul class="slide-posts owl-carousel list-unstyled">
                        @foreach($sliders as $slider)
                            <li class="item">
                                <a href="{{route("frontend.article.index",["id"=>$slider->id,"slug"=>$slider->slug])}}"> <img src="{{asset($slider->image)}}" alt="img"></a>
                            </li>
                        @endforeach
                    </ul><!--/.owl-slider-->
                    <ul class="posts-thumbnails-wrapper list-unstyled">
                        @foreach($sliders as $slider)
                            <li class="post-thumbnail">
                                <a href="{{route("frontend.article.index",["id"=>$slider->id,"slug"=>$slider->slug])}}"><img src="{{asset($slider->image)}}" alt="img"></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- End Left side -->

            <!-- Start Righr side -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-md">
                <!-- Start post layout E -->
                <aside class="zm-post-lay-e-area">
                    <div class="row mb-30">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="zm-posts-tab-menu">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#saglik">Sağlık</a></li>
                                    <li><a data-toggle="tab" href="#comments_posts">Teknoloji</a></li>
                                    <li><a data-toggle="tab" href="#trending_posts">Yaşam </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="zm-posts-tab-content tab-content">
                                <!-- Start Latest Posts -->
                                <div id="saglik" class="zm-posts tab-pane fade in active">
                                @foreach($saglik as $sag)
                                    <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="{{route("frontend.article.index",["id"=>$sag->id,"slug"=>$sag->slug])}}"><img
                                                        src="{{asset($sag->image)}}"
                                                        alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a
                                                            href="{{route("frontend.article.index",["id"=>$sag->id,"slug"=>$sag->slug])}}">{{$sag->tittle}}</a>
                                                    </h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a
                                                                    href="{{route("frontend.user.index",["id"=>$sag->user->id,"name"=>$sag->user->name])}}"
                                                                    class="zm-author">{{$sag->user->name}}</a></li>
                                                            <li class="s-meta"><a href="#"
                                                                                  class="zm-date">{{date("d-M-Y",strtotime($sag->created_at))}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                    @endforeach
                                </div><!-- End Latest Posts -->

                                <!-- Start Comments Posts -->
                                <div id="comments_posts" class="zm-posts tab-pane fade">
                                @foreach($teknoloji as $tekno)
                                    <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="blog-single-image.html"><img src="{{asset($tekno->image)}}"
                                                                                      alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="{{route("frontend.article.index",["id"=>$tekno->id,"slug"=>$tekno->slug])}}">{{$tekno->tittle}}</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author">{{$tekno->user->name}}</a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date">{{date("d-M-Y",strtotime($tekno->created_at))}}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                    @endforeach
                                </div><!-- End Comments Posts -->

                                <!-- Start Trending Posts -->
                                <div id="trending_posts" class="zm-posts tab-pane fade">
                                @foreach($yasam as $yas)
                                    <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="{{route("frontend.article.index",["id"=>$yas->id,"slug"=>$yas->slug])}}"><img src="{{asset($yas->image)}}"
                                                                                      alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="{{route("frontend.article.index",["id"=>$yas->id,"slug"=>$yas->slug])}}">{{$yas->tittle}}</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="{{route("frontend.user.index",["id"=>$sag->user->id,"name"=>$sag->user->name])}}" class="zm-author">{{$yas->user->name}}</a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date">{{date("d-M-Y",strtotime($sag->created_at))}}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                    @endforeach
                                </div><!-- End Trending Posts -->
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- End post layout E -->
            </div>
            <!-- End Right side -->
        </div>
    </div>
</div>
<!-- End Slider post area -->
