@extends("layouts.frontend")
@section("content")

    <section id="page-content" class="page-wrapper">
        <div class="zm-section bg-white pt-30 xs-pt-30 pb-40">
            <div class="container">
                <div class="row">
                    <!-- Start left side -->
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
                        <div class="row mb-40">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-title">
                                    <h2 class="h6 header-color inline-block uppercase">{{$search}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="zm-posts clearfix">
                            @foreach($searchs as $article)
                                <!-- Start single post layout A1 -->
                                    <div class="col-md-12">
                                        <article class="zm-post-lay-a">
                                            <div class="zm-post-thumb">
                                                <a href="{{route("frontend.article.index",["id"=>$article->id,"slug"=>$article->slug])}}"><img src="{{asset($article->image)}}"
                                                                                                                                               alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis">
                                                <div class="zm-post-header">
                                                    <div class="zm-category"><a href="#" class="bg-cat-5 cat-btn">{{$article->category->tittle}}</a>
                                                    </div>
                                                    <h2 class="zm-post-title h2"><a href="{{route("frontend.article.index",["id"=>$article->id,"slug"=>$article->slug])}}">{{$article->tittle}}</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="{{route("frontend.user.index",["id"=>$article->user->id,"name"=>$article->user->name])}}" class="zm-author">{{$article->user->name}}</a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date">{{date("d-M-Y",strtotime($article->created_at))}}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="zm-post-content">
                                                    <p>{!! str_limit(strip_tags($article->content),$limit=250,$end="...") !!}}</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- End single post layout A1 -->
                                @endforeach
                            </div>
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
                <!-- Start pagination area -->
                <div class="row hidden-xs">
                    <div class="zm-pagination-wrap mt-70">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    {{--{{$articles->links()}}--}}

                                    <nav class="zm-pagination ptb-40 text-center">
                                        <ul class="page-numbers">

                                            {{$searchs->links()}}

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{--<li><a class="prev page-numbers" href="#">Previous</a></li>--}}
            {{--<li><span class="page-numbers current">1</span></li>--}}
            {{--<li><a class="page-numbers" href="#">2</a></li>--}}
            {{--<li><a class="page-numbers" href="#">3</a></li>--}}
            {{--<li><a class="page-numbers" href="#">4</a></li>--}}
            {{--<li><a class="page-numbers" href="#">5</a></li>--}}
            {{--<li><span class="page-numbers zm-pgi-dots">...</span></li>--}}
            {{--<li><a class="page-numbers" href="#">15</a></li>--}}
            {{--<li><a class="next page-numbers" href="#">Next</a></li>--}}

            <!-- End pagination area -->
                <!-- Start Advertisement -->
                <div class="advertisement">
                    <div class="row mt-40">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <a href="#"><img src="images/ad/5.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- End Advertisement -->
            </div>
        </div>
    </section>
@endsection
@push("customJs")


@endpush
@push("customCss")



@endpush

