@extends("layouts.backend")
@section("content")
    <form action="{{route("backend.galery.store")}}" method="post" class="dropzone" enctype="multipart/form-data">
        {{csrf_field()}}
    </form>

@endsection
@push("customJs")

    <script src="https://cdn.jsdelivr.net/gh/enyo/dropzone@master/dist/dropzone.js"></script>

@endpush
@push("customCss")

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/enyo/dropzone@master/dist/dropzone.css">

@endpush

