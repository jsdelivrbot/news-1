@extends("layouts.backend")
@section("content")

    <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Tüm Yazılar </h5>

            <div style="padding-top: 3px; padding-right: 11px;" class="text-right">
                <a href="{{route("backend.user.create")}}" class="btn btn-success ">Ekle</a>
            </div>
        </div>

        <div class="widget-content nopadding">

            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Kullanıcı Adı</th>
                    <th>Kullanıcı Email</th>
                    <th>Kullanıcı Yetki</th>
                    <th>Resmi</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="gradeX">
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->yetki==null)
                                standart
                            @elseif($user->teki=="admin")
                                Admin
                            @endif
                        </td>
                        <td><img src="{{asset($user->avatar)}}" width="100" height="100" alt=""></td>
                        <td class="center">
                            <a href="{{route("backend.user.edit",["id"=>$user->id])}}"
                               class="btb btn-primary  btn-mini categoryEdit">Düzenle</a>

                        </td>
                        <td class="center">
                            <button data-id="{{$user->id}}" class="btn btn-danger btn-mini userDelete">Sil
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
        $(".userDelete").on("click", function () {
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
                url: "{{route("backend.user.delete")}}",
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

