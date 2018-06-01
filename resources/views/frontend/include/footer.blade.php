<!-- Start footer area -->
<footer id="footer" class="footer-wrapper footer-1">
    <!-- Start footer top area -->
    <div class="footer-top-wrap ptb-70 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 hidden-sm">
                    <div class="zm-widget pr-40">
                        <h2 class="h6 zm-widget-title uppercase text-white mb-30">Hakkımızda</h2>
                        <div class="zm-widget-content">{!! $setting->aboutUs !!}}</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-2">
                    <div class="zm-widget">
                        <h2 class="h6 zm-widget-title uppercase text-white mb-30">Sosyal</h2>
                        <div class="zm-widget-content">
                            <div class="zm-social-media zm-social-1">
                                <ul>
                                    <li><a href="https://www.facebook.com/{{$setting->facebook}}"><i
                                                class="fa fa-facebook"></i>Facebook</a></li>
                                    <li><a href="https://twitter.com/{{$setting->twitter}}"><i
                                                class="fa fa-twitter"></i>Tweeterd</a></li>
                                    <li><a href="https://www.pinterest.com/{{$setting->pinterest}}"><i
                                                class="fa fa-pinterest"></i>Pinterest</a></li>
                                    <li><a href="https://www.instagram.com/{{$setting->instagram}}"><i
                                                class="fa fa-instagram"></i>Instagram </a></li>
                                    <li><a href="https://plus.google.com/{{$setting->google}}"><i
                                                class="fa fa-google-plus"></i>GooglePlus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-3">
                    <div class="zm-widget pr-50 pl-20">
                        <h2 class="h6 zm-widget-title uppercase text-white mb-30">Sayfalar</h2>
                        <div class="zm-widget-content">
                            <div class="zm-category-widget zm-category-1">
                                <ul>
                                    @foreach($pages as $page)
                                        <li>
                                            <a href="{{route("frontend.page.index",["id"=>$page->id,"slug"=>$page->slug])}}">{{$page->tittle}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-3">
                    <div class="zm-widget">
                        <h2 class="h6 zm-widget-title uppercase text-white mb-30">Ücretsiz E-Mail Aboneliği </h2>
                        <!-- Start Subscribe From -->
                        <div class="zm-widget-content">
                            <div class="subscribe-form subscribe-footer">
                                <p>Haber Bültenimize Ücretsiz Kayıt ol</p>
                                <form>
                                    <input type="email" id="subscribeEmail" name="email" placeholder="Email Adresini<"
                                           required="">

                                </form>
                                <button style="width: 100%;" id="subscribeBtn" type="button" class="btn btn-warning ">Abone ol</button>
                            </div>
                        </div>
                        <!-- End Subscribe From -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer top area -->

    <div class="footer-buttom bg-black ptb-15">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="zm-copyright">
                        <p class="uppercase">&copy; 2018 nemerki. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 text-right hidden-xs">
                    <nav class="footer-menu zm-secondary-menu text-right">
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
        </div>
    </div>
</footer>
<!-- End footer area -->
@push("customJs")

    <script>


        $("#subscribeBtn").on("click", function () {


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
                url: "{{route("frontend.home.subscribe")}}",
                data: {
                    _token: "{{csrf_token()}}",
                    email: $("#subscribeEmail").val(),

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
