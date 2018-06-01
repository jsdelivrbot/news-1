@extends("layouts.backend")
@section("content")

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Site Ayarları</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="settingForm" class="form-horizontal">

                        <div class="control-group">
                            <label class="control-label"></label>
                            <div class="controls">
                                <img style="max-height: 200px;" id="logoImageShow" src="{{asset($settings->logo)}}"
                                     alt="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Logo</label>
                            <div class="controls">
                                <input id="logoImage" name="logo" type="file" class="span11"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Site Başlığı</label>
                            <div class="controls">
                                <input type="text" name="tittle" class="span11" value="{{$settings->tittle}}"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Hakkımızda Kısa Açıklaması</label>
                            <div class="controls">
                                <textarea name="aboutUs" id="" cols="30" class="span11"
                                          rows="10">{{$settings->aboutUs}}</textarea>

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Site Açıklaması</label>
                            <div class="controls">
                                <input type="text" name="description" class="span11"
                                       value="{{$settings->description}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input type="email" name="email" class="span11" value="{{$settings->email}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Facebook</label>
                            <div class="controls">
                                <input type="text" name="facebook" class="span11"
                                       value="{{$settings->facebook}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Twitter</label>
                            <div class="controls">
                                <input type="text" name="twitter" class="span11"
                                       value="{{$settings->twitter}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Instegram</label>
                            <div class="controls">
                                <input type="text" name="instagram" class="span11"
                                       value="{{$settings->instagram}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Google Plus</label>
                            <div class="controls">
                                <input type="text" name="google" class="span11"
                                       value="{{$settings->google}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Pinterest</label>
                            <div class="controls">
                                <input type="text" name="pinterest" class="span11"
                                       value="{{$settings->pinterest}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Adres</label>
                            <div class="controls">
                                <input type="text" name="adress" class="span11"
                                       value="{{$settings->adress}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Harita Api Key</label>
                            <div class="controls">
                                <input type="text" name="mapApi" class="span11"
                                       value="{{$settings->mapApi}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Telefon</label>
                            <div class="controls">
                                <input type="text" name="phone" class="span11"
                                       value="{{$settings->phone}}"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Fax</label>
                            <div class="controls">
                                <input type="text" name="fax" class="span11"
                                       value="{{$settings->fax}}"/>
                            </div>
                        </div>


                        <div class="form-actions text-center">
                            <button type="button" id="settingUpdate" class="btn btn-success">Güncelle</button>
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
                url: "{{route("backend.setting.update",["id"=>1])}}",
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
