@extends("layouts.backend")
@section("content")

    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Kategori Yönetimi</h5>

            <div style="padding-top: 3px; padding-right: 11px;" class="text-right">
                <a href="{{route("backend.categories.create")}}" class="btn btn-success ">Ekle</a>
            </div>
        </div>

        <div class="widget-content nopadding">

            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Kategori Başlık</th>
                    <th>Kategori Türü</th>
                    <th>Kategori Açıklama</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr class="gradeX">
                        <td>{{$category->tittle}}</td>
                        <td>
                            @if(!empty($category->ust_id))
                                Alt Kategori
                            @else
                                Üst Kategori
                            @endif
                        </td>
                        <td>{{$category->description}}</td>
                        <td class="center">
                            <a href="{{route("backend.categories.edit",["id"=>$category->id])}}"
                               class="btb btn-primary  btn-mini categoryEdit">Düzenle</a>

                        </td>
                        <td class="center">
                            <button data-id="{{$category->id}}" class="btn btn-danger btn-mini categoryDelete">Sil
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
        $(".categoryDelete").on("click", function () {
            var button = $(this);

            $.ajax({
                type: "post",
                url: "{{route("backend.categories.delete")}}",
                data: {
                    _token: "{{csrf_token()}}",
                    id: button.data("id")
                },
                success: function (response) {
                    if (response.status == "success") {
                        button.closest("tr").remove();
                    }
                    console.log(response);
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

