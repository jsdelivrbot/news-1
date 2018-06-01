@extends("layouts.backend")
@section("content")

    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Tüm Yorumlar </h5>

        </div>

        <div class="widget-content nopadding">

            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Yazan</th>
                    <th>Yorum</th>
                    <th>İçerik</th>
                    <th>Tarih</th>
                    <th>Durum</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    <tr class="gradeX">
                        <td>{{$comment->user->name}}</td>
                        <td>{{str_limit(strip_tags($comment->comment),$limit=50,$end="...")}}</td>
                        <td>{{$comment->article->tittle}}</td>
                        {{--                        <td>{{$comment->article->user_id}}</td>--}}
                        <td>{!! date("d-m-y",strtotime($comment->created_at)) !!}</td>
                        <td>
                            @if($comment->status=="1")
                                <button data-id="{{$comment->id}}" class="btn btn-success btn-mini onayKaldırBtn">Onay Kaldır</button>
                            @elseif($comment->status=="0")
                                <button data-id="{{$comment->id}}"  class="btn btn-danger btn-mini onaylaBtn">Onayla</button>
                            @endif
                        </td>

                        <td class="center">
                            <a href="{{route("backend.comment.edit",["id"=>$comment->id])}}"
                               class="btb btn-primary  btn-mini categoryEdit">Düzenle</a>

                        </td>
                        <td class="center">
                            <button data-id="{{$comment->id}}" class="btn btn-danger btn-mini commentDelete">Sil
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push("customJs")
    <script>

        $(document).on("click",".onayKaldırBtn",function () {
            var button=$(this);

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
                url: "{{route("backend.comment.onayKaldir")}}",
                data: {
                    _token: "{{csrf_token()}}",
                    id: button.data("id")
                },
                success: function (response) {
                    if (response.status == "success") {
                        button.html("Onayla").removeClass("onayKaldırBtn btn-success").addClass("onaylaBtn btn-danger");
                    }
                    swal.close();
                    swal({
                        type: response.status,
                        title: response.title,
                        text: response.message,
                        timer: 2000
                    });
                },
                error: function (response) {
                    console.log(response);
                }
            })
        })

        $(document).on("click",".onaylaBtn",function () {
            var button=$(this);

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
                url: "{{route("backend.comment.onaylaBtn")}}",
                data: {
                    _token: "{{csrf_token()}}",
                    id: button.data("id")
                },
                success: function (response) {
                    if (response.status == "success") {
                        button.html("Onay Kaldır").removeClass("onaylaBtn btn-danger").addClass("onayKaldırBtn btn-success");
                    }
                    swal.close();
                    swal({
                        type: response.status,
                        title: response.title,
                        text: response.message,
                        timer: 2000
                    });
                },
                error: function (response) {
                    console.log(response);
                }
            })
        })


        $(".commentDelete").on("click", function () {
            var button = $(this);

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
                url: "{{route("backend.comment.delete")}}",
                data: {
                    _token: "{{csrf_token()}}",
                    id: button.data("id")
                },
                success: function (response) {
                    if (response.status == "success") {
                        button.closest("tr").remove();
                    }
                    swal.close();
                    swal({
                        type: response.status,
                        title: response.title,
                        text: response.message,
                        timer: 2000
                    });
                },
                error: function (response) {
                    console.log(response);
                }
            })
        })

    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/excanvas.min.js"></script>
    <script src="{{asset("assets/backend/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/backend/js/jquery.ui.custom.js")}}"></script>

    <script src="{{asset("assets/backend/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/backend/js/matrix.tables.js")}}"></script>

@endpush
@push("customCss")

    <link rel="stylesheet" href="{{asset("assets/backend/css/uniform.css")}}"/>
    <link rel="stylesheet" href="{{asset("assets/backend/css/select2.css")}}"/>

@endpush

