@extends('Layout.admin-layout')
@section('content')

<div class="media-center-admin" style="display: inline-block; width:100%">
    <h4 class="h4"> تعديل كتب بالصفحة الرئيسية</h4>
</div>

@if(session()->has('message'))
<div class="alert alert-success">
    تم تعديل معلومات الكتاب بنجاح
</div>
@endif

@foreach($books as $b)


<form class="add-news" action="/edit-book/{{$b->id}}" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="row" style="width: 150%">
        <div class="form-group col-sm-4">
            <label for="exampleInputEmail1">العنوان:</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{$b->title}}">

        </div>
        <div class="form-group  col-sm-4">
            <label for="exampleInputEmail1">السعر:</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" value="{{$b->price}}">
        </div>
    </div>

    <div class="row" style="width: 150%">
        <div class="form-group  col-sm-4">
            <label for="exampleInputEmail1">رابط المنتج:</label>
            <input type="text" name="url" class="form-control" id="exampleInputEmail1" value="{{$b->url}}">
        </div>
        <div class="form-group col-sm-4">
            <label for="exampleFormControlFile1">صورة الكتاب: </label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>
    </div>

    <button type="submit">تعديل</button>
</form>
@endforeach

@endsection