@extends('Layout.admin-layout')
@section('content')

<div class="media-center-admin" style="display: inline-block; width:100%">
    <h4 class="h4"> عرض الكتب بالصفحة الرئيسية</h4>
</div>

@if(session()->has('message'))
<div class="alert alert-success">
    تم حذف الكتاب بنجاح
</div>
@endif
<table class="table" style="width:100%;">

    <thead>
        <th style="font-size: 14px" scope="col">#</th>

        <th style="font-size: 14px" scope="col">عنوان الكتاب</th>
        <th style="font-size: 14px" scope="col">سعر الكتاب</th>

        <th style="font-size: 14px" scope="col"> تاريخ الإضافة</th>
        <th style="font-size: 14px" scope="col"> تاريخ التعديل</th>

        <th style="font-size: 14px" scope="col"> </th>
        <th style="font-size: 14px" scope="col"> </th>

        @foreach ($books as $n)
        <tr>
            <td style="font-size: 14px">{{ $n->id }}</td>

            <td style="font-size: 14px">{{ $n->title }}</td>
            <td style="font-size: 14px">{{ $n->price }}</td>

            <td style="font-size: 14px">{{ Carbon\Carbon::parse($n->created_at)->format('Y-m-d') }}
            <td style="font-size: 14px">{{ Carbon\Carbon::parse($n->updated_at)->format('Y-m-d') }}






            <td style="font-size: 14px">
                <a class=" status-change" href="/edit-book/{{$n->id}}">

                    تعديل
                </a>
            </td>

            <td style="font-size: 14px">
                <a class=" status-change" href="/delete-book/{{$n->id}}">

                    حذف
                </a>
            </td>
        </tr>
        @endforeach



    </thead>
</table>
@endsection