@extends("layouts.backend")
@section("content")

    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Tüm Yazılar </h5>

            <div style="padding-top: 3px; padding-right: 11px;" class="text-right">
                <a href="{{route("backend.article.create")}}" class="btn btn-success ">Ekle</a>
            </div>
        </div>

        <div class="widget-content nopadding">

            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Yazı Başlık</th>
                    <th>Yazı Kategori</th>
                    <th>Yazar</th>
                    <th>Resmi</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr class="gradeX">
                        <td>{{$article->tittle}}</td>
                        <td>{{$article->category->tittle}}</td>
                        <td>{{$article->user->name}}</td>
                        <td><img src="{{asset($article->image)}}" width="100" height="100" alt=""></td>
                        <td class="center">
                            <a href="{{route("backend.article.edit",["id"=>$article->id])}}"
                               class="btb btn-primary  btn-mini categoryEdit">Düzenle</a>

                        </td>
                        <td class="center">
                            <button data-id="{{$article->id}}" class="btn btn-danger btn-mini articleDelete">Sil
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
        $(".articleDelete").on("click", function () {
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
                url: "{{route("backend.article.delete")}}",
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

