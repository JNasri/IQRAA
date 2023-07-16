@extends('Layout.admin-layout')
@section('content')

<div class="media-center-admin" style="display: inline-block; width:100%">
    <h4 class="h4"> تعديل الخبر</h4>

</div>


@if(session()->has('message'))
<div class="alert alert-success">
    تم تعديل الخبر بنجاح
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
@foreach ($mediaCenter as $n)


<form class="add-news" action="/edit-news/{{$n->id}}" method="POST" enctype="multipart/form-data">

    @csrf



    <div class="form-group">
        <label for="exampleInputEmail1">العنوان:</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{$n->title}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">وصف الخبر:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="description">
        {{$n->description}}

        </textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">رابط الخبر:</label>
        <input type="text" name="url" class="form-control" id="exampleInputEmail1" value="{{$n->url}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">تاريخ الاضافة :</label>
        <input type="datetime-local" name="created_at" class="form-control" id="exampleInputEmail1" value="{{$n->created_at}}">
    </div>


    <h4 class=""> إضافة صور: </h4>
    <div class="form-group">
        <label for="exampleFormControlFile1">صورة الخبر الأساسية: </label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
    </div>

  

    <button type="submit" class="btn btn-primary">إرسال</button>
</form>

@endforeach
<script>
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
@endsection