@extends("layouts.backend")
@section("content")

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5> Yorum Düzenle</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="settingForm" class="form-horizontal">


                        <div class="control-group">
                            <label class="control-label">Yorum Yazan</label>
                            <div class="controls">
                                <input type="text" disabled value="{{$comment->user->name}}" class="span11"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Yorum yapılan yazı</label>
                            <div class="controls">
                                <input type="text" disabled value="{{$comment->article->tittle}}"
                                       class="span11"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Yorum</label>
                            <div class="controls">
                                <textarea class="span11" name="comment" id="" cols="30" rows="10">{!! $comment->comment !!}</textarea>

                            </div>
                        </div>


                        <div class="form-actions text-right">
                            <button type="button" id="commentUpdate" data-id="{{$comment->id}}"
                                    class="btn btn-success">Yorumu Kaydet
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
@push("customJs")

    <script>

        $("#commentUpdate").on("click", function () {
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
                url: "{{route("backend.comment.update")}}",
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
