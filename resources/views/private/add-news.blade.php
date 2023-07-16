@extends('Layout.admin-layout')
@section('content')

<div class="media-center-admin" style="display: inline-block; width:100%">
    <h4 class="h4"> إضافة خبر جديد</h4>

</div>


@if(session()->has('message'))
<div class="alert alert-success">
    تم اضافة الخبر بنجاح
</div>
@endif


<style>
.add-news .form-group input.form-control {
    height: 40px;

}

button {
    background-color: #287a64
}
</style>

<form class="add-news" action="/add-media-center" method="POST" enctype="multipart/form-data">

    @csrf



    <div class="form-group">
        <label for="exampleInputEmail1">العنوان:</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">وصف الخبر:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">رابط الخبر:</label>
        <input type="text" name="url" class="form-control" id="exampleInputEmail1" required>
    </div>


    <h4 class=""> إضافة صور: </h4>
    <div class="form-group">
        <label for="exampleFormControlFile1">صورة الخبر الأساسية: </label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
    </div>

    <button type="submit" class="btn btn-primary">إرسال</button>
</form>


<script>
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
@endsection