@extends("layouts.backend")
@section("content")

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Kullanıcı Düzenle : {{$user->name}}</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="userForm" class="form-horizontal">

                        <div class="control-group">
                            <label class="control-label">Yetki</label>
                            <div class="controls">
                                <select class="span11" name="yetki" id="">
                                    <option value="" @if($user->yetki==null) selected @endif>Standart Kullanıcı</option>
                                    <option @if($user->yetki=="admin") selected @endif value="admin">Admin</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Kullanıcı İsmi </label>
                            <div class="controls">
                                <input type="text" name="name" value="{{$user->name}}" class="span11" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">E-Mail Adresi</label>
                            <div class="controls">
                                <input type="email" name="email" value="{{$user->email}}" class="span11" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Şifre</label>
                            <div class="controls">
                                <input type="password" name="password" class="span11"  />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Şifre Tekrar</label>
                            <div class="controls">
                                <input type="password" name="password_confirmation" class="span11"  />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Avatar</label>
                            <div class="controls">
                                <input id="logoImage" name="avatar" type="file" class="span3"/>
                                <img style="max-width: 100px; max-height: 200px;" id="logoImageShow" src=""
                                     alt="">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label"></label>
                            <div class="controls">
                                <img style="max-height: 200px;" src="{{asset($user->avatar)}}"
                                     alt="">
                            </div>
                        </div>

                        <div class="form-actions text-right">
                            <button type="button" id="userUpdate" class="btn btn-success">Güncelle</button>
                        </div>
                    </form>
                </div>
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

        $("#userUpdate").on("click", function () {

            var form = new FormData($("#userForm")[0]);

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
                url: "{{route("backend.user.update",["id"=>$user->id])}}",
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



@endpush
