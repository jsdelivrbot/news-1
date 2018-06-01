@extends("layouts.backend")
@section("content")

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5> Kategori Düzenle: {{$category->tittle}}</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="settingForm" class="form-horizontal">


                        <div class="control-group">
                            <label class="control-label">Üst Kategori</label>
                            <div class="controls">
                                <select class="span11" name="ust_id" id="">


                                    <option @if($category->ust_id ==null)selected @endif value="">Üst Kategory</option>

                                    @foreach($allcategories as $allcategory)
                                        <option @if($allcategory->id==$category->ust_id) selected
                                                @endif  value="{{$allcategory->id}}">{{$allcategory->tittle}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kategori Başlığı</label>
                            <div class="controls">
                                <input type="text" name="tittle" value="{{$category->tittle}}" class="span11"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kategori Açıklaması</label>
                            <div class="controls">
                                <input type="text" name="description" value="{{$category->description}}"
                                       class="span11"/>
                            </div>
                        </div>


                        <div class="form-actions text-right">
                            <button type="button" id="categoryUpdate" data-id="{{$category->id}}"
                                    class="btn btn-success">Kategori Güncelle
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

        $("#categoryUpdate").on("click", function () {
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
                url: "{{route("backend.categories.update")}}",
                data: {
                    _token: "{{csrf_token()}}",
                    id: button.data("id"),
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


    </script>

@endpush
@push("customCss")



@endpush
