@extends('Layout.admin-layout')
@section('content')

<div class="media-center-admin" style="display: inline-block; width:100%">
    <h4 class="h4"> إضافة عنوان بالصفحة الرئيسية</h4>
</div>

@if(session()->has('message'))
<div class="alert alert-success">
تمت الاضافة بنجاح</div>
@endif
<form class="add-news" action="/add-menu" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="row" style="width: 150%">
        <div class="form-group col-sm-4">
            <label for="exampleInputEmail1">العنوان:</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="">

        </div>
        <!-- <div class="form-group  col-sm-4">
            <label for="exampleInputEmail1">السعر:</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" value="">
        </div> -->
    </div>

    <div class="row" style="width: 150%">
        <div class="form-group  col-sm-4">
            <label for="exampleInputEmail1">الرابط :</label>
            <input type="text" name="url" class="form-control" id="exampleInputEmail1" value="">
        </div>
    </div>

    <button type="submit">submit</button>
</form>

@endsection