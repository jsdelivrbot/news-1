@extends('layouts.frontend')

@section('content')

        <div class="zm-section bg-white pt-40 pb-70" style="width:700px;margin:0 auto;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <div class="section-title-2 mb-40">
                            <h3 class="inline-block uppercase">Profil Düzenle: {{$user->name}}</h3>

                        </div>
                    </div>
                </div>
                <div class="registation-form-wrap">
                    <form id="settingForm">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="single-input">
                                    <label>Adınız Soyadınız</label>
                                    <input type="text" name="name" value="{{$user->name }}" required>

                                </div>

                                <div class="single-input">
                                    <label>E-MAİL ADRESİNİZ</label>
                                    <input type="text" name="email" value="{{$user->email }}" required>

                                </div>

                                <div class="single-input">
                                    <label>Şifreniz</label>
                                    <input id="password" type="password" name="password">
                                </div>

                                <div class="single-input">
                                    <label>Şifreniz Tekrar</label>
                                    <input  type="password" name="password_confirm">
                                </div>

                                <div class="single-input">
                                    <label>Avatar</label><br>
                                    <img id="logoImageShow" width="100" src="{{asset($user->avatar)}}" alt="">
                                    <input id="logoImage" type="file" name="avatar" >

                                </div>

                            </div>

                        </div>

                       <button id="settingUpdate" class="btn btn-warning" type="button">Profili Güncelle</button>

                    </form>
                </div>
            </div>
        </div>

@endsection

@push("customJs")

    <script>

        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                }
            });
        });


        $("#settingUpdate").on("click", function () {
            var form = new FormData($("#settingForm")[0]);

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
                url: "{{route("frontend.user.update")}}",
                data: form,
                processData: false,
                contentType: false,
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

        /* Yüklenen resmi anlık olarak görmek için */
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#logoImageShow').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#logoImage").change(function () {
            readURL(this);
        });
        /* /Yüklenen resmi anlık olarak görmek için */
    </script>

@endpush
@push("customCss")
