@extends("layouts.frontend")
@section("content")


    <!-- Start Popular News [layout A+D]  -->
    <div class="zm-section bg-white ptb-70">
        <div class="container">
            <div class="row mb-40">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <div class="section-title">
                        <h2 class="h6 header-color inline-block uppercase">Populer Haberler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12 col-lg-6">
                    <div class="zm-posts">
                        <article class="zm-post-lay-a">
                            <div class="zm-post-thumb">
                                <a href="{{route("frontend.article.index",["id"=>$onearticle->id,"slug"=>$onearticle->slug])}}"><img src="{{asset($onearticle->image)}}" alt="img"></a>
                            </div>
                            <div class="zm-post-dis">
                                <div class="zm-post-header">
                                    <div class="zm-category"><a href="{{route("frontend.article.index",["id"=>$onearticle->category->id,"slug"=>$onearticle->category->slug])}}"
                                                                class="bg-cat-1 cat-btn">{{$onearticle->category->tittle}}</a>
                                    </div>
                                    <h2 class="zm-post-title h2"><a
                                            href="{{route("frontend.article.index",["id"=>$onearticle->id,"slug"=>$onearticle->slug])}}">{{$onearticle->tittle}}</a></h2>
                                    <div class="zm-post-meta">
                                        <ul>
                                            <li class="s-meta"><a href="{{route("frontend.user.index",["id"=>$onearticle->user->id,"name"=>$onearticle->user->name])}}"
                                                                  class="zm-author">{{$onearticle->user->name}}</a></li>
                                            <li class="s-meta"><a href="#"
                                                                  class="zm-date">{!! date("d-m-Y",strtotime($onearticle->created_at)) !!}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="zm-post-content">
                                    <p>{!! str_limit(strip_tags($onearticle->content),$limit=150,$end="...") !!}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12 col-lg-6">
                    <div class="zm-posts">
                    @foreach($articles as $article)
                        <!-- Start single post layout D -->
                            <article class="zm-post-lay-d clearfix">
                                <div class="zm-post-thumb f-left">
                                    <a href="{{route("frontend.article.index",["id"=>$article->id,"slug"=>$article->slug])}}"><img
                                            src="{{asset($article->image)}}"
                                            alt="img"></a>
                                </div>
                                <div class="zm-post-dis f-right">
                                    <div class="zm-post-header">
                                        <div class="zm-category"><a
                                                href="{{route("frontend.category.index",["id"=>$article->category->id,"slug"=>$article->category->slug])}}"
                                                class="bg-cat-{{array_rand($colors)}} cat-btn">{{$article->category->tittle}}</a></div>
                                        <h2 class="zm-post-title"><a
                                                href="{{route("frontend.article.index",["id"=>$article->id,"slug"=>$article->slug])}}">{{$article->tittle}}</a>
                                        </h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                <li class="s-meta"><a
                                                        href="{{route("frontend.user.index",["id"=>$article->user->id,"name"=>$article->user->name])}}"
                                                        class="zm-author">{{$article->user->name}}</a></li>
                                                <li class="s-meta"><a href="#"
                                                                      class="zm-date">{{date("d-m-Y",strtotime($article->created_at))}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- End single post layout D -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular News [layout A+D]  -->




    <div class="zm-section bg-white pt-20 pb-40">
        <div class="container">
            <div class="row">
                <!-- Start left side -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 columns">
                    <div class="row mb-40">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-title">
                                <h2 class="h6 header-color inline-block uppercase">Yeni Haberler</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="zm-posts">
                            @foreach($newarticles as $newarticle)
                                <!-- Start single post layout C -->
                                    <article class="zm-post-lay-c zm-single-post clearfix">
                                        <div class="zm-post-thumb f-left">
                                            <a href="{{route("frontend.article.index",["id"=>$newarticle->id,"slug"=>$newarticle->slug])}}"><img
                                                    src="{{$newarticle->image}}"
                                                    alt="img"></a>
                                        </div>
                                        <div class="zm-post-dis f-right">
                                            <div class="zm-post-header">
                                                <div class="zm-category"><a
                                                        href="{{route("frontend.category.index",["id"=>$newarticle->category->id,"slug"=>$newarticle->category->slug])}}"
                                                        class="bg-cat-1 cat-btn">{{$newarticle->category->tittle}}</a>
                                                </div>
                                                <h2 class="zm-post-title"><a
                                                        href="{{route("frontend.article.index",["id"=>$newarticle->id,"slug"=>$newarticle->slug])}}">{{$newarticle->tittle}}</a>
                                                </h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a
                                                                href="{{route("frontend.user.index",["id"=>$newarticle->user->id,"name"=>$newarticle->user->name])}}"
                                                                class="zm-author">{{$newarticle->user->name}}</a></li>
                                                        <li class="s-meta"><a href="#"
                                                                              class="zm-date">{{date("d-M-Y",strtotime($newarticle->created_at))}}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="zm-post-content">
                                                    <p>{!! str_limit(strip_tags($newarticle->content),$limit=100,$end="...") !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- End single post layout C -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End left side -->
                <!-- Start Right sidebar -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 sidebar-warp columns">
                    <div class="row">


                        <!-- Start post layout E -->
                        <aside class="zm-post-lay-e-area col-xs-12 col-sm-6 col-md-6 col-lg-12 mt-60 hidden-md">
                            <div class="row mb-40">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h2 class="h6 header-color inline-block uppercase">En Fazla Yorum Alanlar</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="zm-posts">
                                    @foreach($comments as $comment)
                                        <!-- Start single post layout E -->
                                            <article class="zm-post-lay-e zm-single-post clearfix">
                                                <div class="zm-post-thumb f-left">
                                                    <a href="{{route("frontend.article.index",["id"=>$comment->article->id,"slug"=>$comment->article->slug])}}"><img
                                                            src="{{asset($comment->article->image)}}"
                                                            alt="img"></a>
                                                </div>
                                                <div class="zm-post-dis f-right">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title"><a href="blog-single-image.html">{{$comment->article->tittle}}</a></h2>
                                                        <div class="zm-post-meta">
                                                            <ul>
                                                                <li class="s-meta"><a href="#" class="zm-author">{{$comment->user->name}}</a></li>
                                                                <li class="s-meta"><a href="#" class="zm-date">{{date("d-M-Y",strtotime($comment->created_at))}}</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- End single post layout E -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- Start post layout E -->

                        <!-- Start post layout F -->
                        <aside class="zm-post-lay-e-area col-xs-12 col-sm-6 col-md-6 col-lg-12 mt-60 hidden-md">
                            <div class="row mb-40">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h2 class="h6 header-color inline-block uppercase">Populer</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="zm-posts">
                                    @foreach($popular as $pop)
                                        <!-- Start single post layout E -->
                                            <article class="zm-post-lay-e zm-single-post clearfix">
                                                <div class="zm-post-thumb f-left">
                                                    <a href="{{route("frontend.article.index",["id"=>$pop->id,"slug"=>$pop->slug])}}"><img
                                                            src="{{asset($pop->image)}}"
                                                            alt="img"></a>
                                                </div>
                                                <div class="zm-post-dis f-right">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title"><a href="{{route("frontend.article.index",["id"=>$pop->id,"slug"=>$pop->slug])}}">{{$pop->tittle}}</a></h2>
                                                        <div class="zm-post-meta">
                                                            <ul>
                                                                <li class="s-meta"><a href="#" class="zm-author">{{$pop->user->name}}</a></li>
                                                                <li class="s-meta"><a href="#" class="zm-date">{{date("d-M-Y",strtotime($pop->created_at))}}</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- End single post layout E -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- Start post layout E -->
                    </div>
                </div>
                <!-- End Right sidebar -->
            </div>

            <!-- Start Advertisement -->
            <div class="advertisement">
                <div class="row mt-40">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <a href="#"><img src="assets/frontend/images/ad/2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- End Advertisement -->
        </div>
    </div>

@endsection
@push("customJs")


@endpush
@push("customCss")



@endpush

