@extends("layouts.frontend")
@section("content")
    <div id="page-content" class="page-wrapper">
        <div class="zm-section single-post-wrap bg-white ptb-30 xs-pt-30">
            <div class="container">
                <div class="row">
                    <!-- Start left side -->
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">

                        <div class="row">
                            <!-- Start single post image formate-->
                            <div class="col-md-12">
                                <article class="zm-post-lay-single">

                                    <div class="zm-post-dis">
                                        <div class="zm-post-header">
                                            <h2 class="zm-post-title h2"><a
                                                    href="javascript:void(0)">{{$page->tittle}}</a></h2>

                                        </div>
                                        <div class="zm-post-content">{!! $page->content !!}</div>
                                        <div class="entry-meta-small clearfix ptb-40 mtb-40 border-top border-bottom">

                                            <div class="share-social-link pull-right">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-rss"></i></a>
                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </article>
                            </div>
                            <!-- End single post image formate -->


                        </div>
                    </div>
                    <!-- End left side -->
                    <!-- Start Right sidebar -->
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-warp columns">
                        <div class="row">

                            <!-- Start post layout E -->
                            <aside class="zm-post-lay-e-area col-sm-6 col-md-12 col-lg-12 ">
                                <div class="row mb-40">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="section-title">
                                            <h2 class="h6 header-color inline-block uppercase">En çok Yorum
                                                Yapılanlar</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="zm-posts">
                                        @foreach($mostcomments as $mostcomment)
                                            <!-- Start single post layout E -->
                                                <article class="zm-post-lay-e zm-single-post clearfix">
                                                    <div class="zm-post-thumb f-left">
                                                        <a href="{{route("frontend.article.index",["id"=>$mostcomment->article->id,"slug"=>$mostcomment->article->slug])}}"><img
                                                                src="{{asset($mostcomment->article->image)}}"
                                                                alt="img"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a
                                                                    href="{{route("frontend.article.index",["id"=>$mostcomment->article->id,"slug"=>$mostcomment->article->slug])}}">{{$mostcomment->article->tittle}}</a>
                                                            </h2>
                                                            <div class="zm-post-meta">
                                                                <ul>
                                                                    <li class="s-meta"><a
                                                                            href="{{route("frontend.user.index",["id"=>$mostcomment->user->id,"name"=>$mostcomment->user->name])}}"
                                                                            class="zm-author">{{$mostcomment->user->name}}</a>
                                                                    </li>
                                                                    <li class="s-meta"><a href="#"
                                                                                          class="zm-date">{{date("d-M-Y",strtotime($mostcomment->created_at))}}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- Start single post layout E -->
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- End post layout E -->
                            <aside class="zm-post-lay-f-area col-sm-6 col-md-12 col-lg-12 mt-70">
                                <div class="row mb-40">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="section-title">
                                            <h2 class="h6 header-color inline-block uppercase">Son Yorumlar</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="zm-posts">

                                        @foreach($lastComments as $lastComment)
                                            <!-- Start single post layout F -->
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="{{route("frontend.user.index",["id"=>$lastComment->user->id,"name"=>$lastComment->user->name])}}">{{$lastComment->user->name}} </a> -
                                                            <em>“ {{str_limit(strip_tags($lastComment->comment),$limit=100,$end="...")}}
                                                                ” </em><a href="{{route("frontend.article.index",["id"=>$lastComment->article->id,"slug"=>$lastComment->article->slug])}}">  <strong>on
                                                                    {{$lastComment->article->tittle}}</strong></a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- End single post layout F -->
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <!-- End Right sidebar -->
                </div>
            </div>
        </div>
    </div>

@endsection
@push("customJs")


@endpush
@push("customCss")



@endpush

