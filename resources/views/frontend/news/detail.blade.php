@extends("layouts.frontend")
@section("content")
    <div id="page-content" class="page-wrapper">
        <div class="zm-section single-post-wrap bg-white ptb-70 xs-pt-30">
            <div class="container">
                <div class="row">
                    <!-- Start left side -->
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
                        <div class="row mb-40">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-title">
                                    <h2 class="h6 header-color inline-block uppercase">Populer Haberler</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Start single post image formate-->
                            <div class="col-md-12">
                                <article class="zm-post-lay-single">
                                    <div class="zm-post-thumb">
                                        <a href="javascript:void(0)"><img src="{{asset($article->image)}}"
                                                                          alt="img"></a>
                                    </div>
                                    <div class="zm-post-dis">
                                        <div class="zm-post-header">
                                            <h2 class="zm-post-title h2"><a
                                                    href="javascript:void(0)">{{$article->tittle}}</a></h2>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta"><a
                                                            href="{{route("frontend.user.index",["id"=>$article->user->id,"name"=>$article->user->name])}}"
                                                            class="zm-author">{{$article->user->name}}</a></li>
                                                    <li class="s-meta"><a href="javascript:void(0)"
                                                                          class="zm-date">{{date("d-M-Y",strtotime($article->created_at))}}</a>
                                                    </li>
                                                    <li class="s-meta"><a href="javascript:void(0)"
                                                                          class="zm-date">
                                                            {{$article->getViews()}}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="zm-post-content">{!! $article->content !!}</div>
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

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <aside class="zm-post-lay-a2-area">
                                    <div class="post-title mb-40">
                                        <h2 class="h6 inline-block">Benzer İçerikler</h2>
                                    </div>
                                    <div class="row">
                                        <div class="zm-posts clearfix">
                                            @foreach($similerArticles as $similerArticle)
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <article class="zm-post-lay-a2">
                                                        <div class="zm-post-thumb">
                                                            <a href="{{route("frontend.article.index",["id"=>$similerArticle->id,"slug"=>$similerArticle->slug])}}"><img
                                                                    src="{{asset($similerArticle->image)}}"
                                                                    alt="img"></a>
                                                        </div>
                                                        <div class="zm-post-dis">
                                                            <div class="zm-post-header">
                                                                <h2 class="zm-post-title h2"><a
                                                                        href="{{route("frontend.article.index",["id"=>$similerArticle->id,"slug"=>$similerArticle->slug])}}">{{$similerArticle->tittle}}</a></h2>
                                                                <div class="zm-post-meta">
                                                                    <ul>
                                                                        <li class="s-meta"><a href="#"
                                                                                              class="zm-author">{{$similerArticle->user->name}}</a></li>
                                                                        <li class="s-meta"><a href="#" class="zm-date">April
                                                                                18, 2016</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <!-- End similar post -->
                            <!-- Start Comment box  -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="review-area mt-50 ptb-70 border-top">
                                    <div class="post-title mb-40">
                                        <h2 class="h6 inline-block">Toplam Yorum
                                            Sayısı: {{$comments->count()}}</h2>
                                    </div>
                                    <div class="review-wrap">
                                        <div class="review-inner">
                                        @foreach($comments as $comment)
                                            <!-- Start Single Review -->
                                                <div class="single-review clearfix">
                                                    <div class="reviewer-img">
                                                        <img src="{{asset($comment->user->avatar)}}" alt="">
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h4 class="reviewer-name"><a
                                                                href="#">{{$comment->user->name}}</a></h4>
                                                        <span
                                                            class="date-time">{{date("d-M-Y",strtotime($comment->created_at))}}</span>
                                                        <p class="reviewer-comment">{{$comment->comment}}</p>
                                                        <a href="#" class="reply-btn">Reply</a>
                                                    </div>
                                                </div>
                                                <!-- End Single Review -->
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Comment box  -->
                        @if(Auth::check())
                            <!-- Start comment form -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="comment-form-area">
                                        <div class="post-title mb-40">
                                            <h2 class="h6 inline-block">Yorum Yaz</h2>
                                        </div>
                                        <div class="form-wrap">
                                            <form>
                                                <div class="form-inner clearfix">

                                                    <div class="single-input">
                                                    <textarea class="textarea" name="comment"
                                                              placeholder="Yorumunuzu Girin"></textarea>
                                                    </div>
                                                    <button class="submit-button" data-id="{{$article->id}}"
                                                            id="sendComment" type="button">Yorum
                                                        Gönder
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End comment form -->
                            @else
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    Yorum Yapmak için <a href="{{route("login")}}">Giriş Yapın</a> Kayıtlı geğilseniz <a
                                        href="{{route("register")}}">Kayıt olun</a>
                                </div>
                            @endif
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
                                                        <p>
                                                            <a href="{{route("frontend.user.index",["id"=>$lastComment->user->id,"name"=>$lastComment->user->name])}}">{{$lastComment->user->name}} </a>
                                                            -
                                                            <em>“ {{str_limit(strip_tags($lastComment->comment),$limit=100,$end="...")}}
                                                                ” </em><a
                                                                href="{{route("frontend.article.index",["id"=>$lastComment->article->id,"slug"=>$lastComment->article->slug])}}">
                                                                <strong>on
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
    <script>


        $("#sendComment").on("click", function () {
            var button = $(this);

            $(".has-error").removeClass("has-error");
            $(".label-danger").remove();

            swal({
                title: 'Yükleniyor...',
                html:
                '<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>' +
                ' <span class="sr-only">Loading...</span>',
                showCloseButton: false,
                showCancelButton: false,
                showConfirmButton: false,
                allowOutsideClick: false
            });


            $.ajax({
                type: "post",
                url: "{{route("frontend.article.comment")}}",
                data: {
                    _token: "{{csrf_token()}}",
                    id: button.data("id"),
                    comment: $("[name=comment]").val(),
                },
                success: function (response) {
                    swal.close();
                    swal({
                        type: response.status,
                        title: response.title,
                        text: response.message,
                        timer: 2000
                    });
                },
                error: function (response) {
                    swal.close();

                    $.each(response.responseJSON.errors, function (k, v) {
                        $.each(v, function (kk, vv) {
                            $("[name='" + k + "']").parent().addClass("has-error");
                            $("[name='" + k + "']").parent().append(" <span class=\"label label-danger\">" + vv + "</span>");
                        })
                    });
                }
            })
        })

    </script>

@endpush
@push("customCss")



@endpush

