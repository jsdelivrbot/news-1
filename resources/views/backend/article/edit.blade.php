@extends("layouts.backend")
@section("content")

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Yazı Güncelle: {{$article->tittle}}</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="articleForm" class="form-horizontal">

                        <div class="control-group">
                            <label class="control-label">Kategori Seçin </label>
                            <div class="controls">
                                <select class="span11" name="category_id" id="">

                                    @foreach($categories as $category)
                                        <option
                                            @if($category->id==$article->category->id) selected
                                            @endif value="{{$category->id}}">{{$category->tittle}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Slider içinde göster </label>
                            <div class="controls">
                                <select class="span11" name="slider" id="">

                                    <option value="0" @if($article->slider==0)selected @endif>Gösterme</option>
                                    <option value="1" @if($article->slider==1)selected @endif>Göster</option>

                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Yazı Başlığı</label>
                            <div class="controls">
                                <input type="text" value="{{$article->tittle}}" name="tittle" class="span11"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Yazı İçeriği</label>
                            <div class="controls">
                                <textarea name="content" id="editor" cols="30" class="span11" rows="10">{!! $article->content !!}
                                    }</textarea>

                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label">Resim</label>
                            <div class="controls">
                                <input id="logoImage" name="image" type="file" class="span3"/>
                                <img style="max-height: 100px; " id="logoImageShow" src=""
                                     alt="">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label"></label>
                            <div class="controls">
                                <img style="max-height: 200px;" src="{{asset($article->image)}}"
                                     alt="">
                            </div>
                        </div>

                        <div class="form-actions text-right">
                            <button type="button" id="articleUpdate" class="btn btn-success">Kaydet</button>
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


        $("#articleUpdate").on("click", function () {
            var form = new FormData($("#articleForm")[0]);

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
                url: "{{route("backend.article.update",["id"=>$article->id])}}",
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
    <!-- Include external JS libs. -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/js/froala_editor.pkgd.min.js"></script>

    <!-- Initialize the editor. -->
    <script> $(function () {
            $('textarea').froalaEditor()
        }); </script>
@endpush
@push("customCss")

    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_editor.pkgd.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_style.min.css" rel="stylesheet"
          type="text/css"/>


@endpush
