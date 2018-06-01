@extends("layouts.backend")
@section("content")

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>İletişim Formu</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="settingForm" class="form-horizontal">


                        <div class="control-group">
                            <label class="control-label">Ad soyad</label>
                            <div class="controls">
                                <input type="text" name="adsoyad" class="span11"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email Adresi</label>
                            <div class="controls">
                                <input type="email" name="email" class="span11"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Mesajınız</label>
                            <div class="controls">
                                <input type="text" name="mesaj" class="span11"/>
                            </div>
                        </div>


                        <div class="form-actions text-center">
                            <button type="button" id="categoryAdd" class="btn btn-success">Kategori Ekle</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
@push("customJs")

    <script>


        $("#categoryAdd").on("click", function () {


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
                url: "{{route("backend.categories.store")}}",
                data: {
                    _token: "{{csrf_token()}}",
                    tittle: $("[name=tittle]").val(),
                    ust_id: $("[name=ust_id]").val(),
                    description: $("[name=description]").val(),
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
