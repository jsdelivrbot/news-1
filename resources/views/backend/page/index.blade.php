@extends("layouts.backend")
@section("content")

    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Tüm Sayfalar </h5>

            <div style="padding-top: 3px; padding-right: 11px;" class="text-right">
                <a href="{{route("backend.page.create")}}" class="btn btn-success ">Ekle</a>
            </div>
        </div>

        <div class="widget-content nopadding">

            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Sayfa Başlık</th>
                    <th>Sayfa İçerik Kategori</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr class="gradeX">
                        <td>{{$page->tittle}}</td>
                        <td>
                            {!! str_limit(strip_tags($page->content),$limit=100,$end="...") !!}
                        </td>
                        <td class="center">
                            <a href="{{route("backend.page.edit",["id"=>$page->id])}}"
                               class="btb btn-primary  btn-mini categoryEdit">Düzenle</a>

                        </td>
                        <td class="center">
                            <button data-id="{{$page->id}}" class="btn btn-danger btn-mini pageDelete">Sil
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
        $(".pageDelete").on("click", function () {
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
                url: "{{route("backend.page.delete")}}",
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

