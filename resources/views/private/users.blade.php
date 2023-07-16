@extends('Layout.admin-layout')
@section('content')

<div class="media-center-admin" style="display: inline-block; width:100%">
  <h4 class="h4">عرض جميع المستخدمين</h4>
</div>

@if(session()->has('message'))
<div class="alert alert-success">
</div>
@endif
<h4>المستخدمين المسجلين بشكل طبيعي</h4>
<table class="table" style="width:100%;">

  <thead>
    <th style="font-size: 14px" scope="col">#</th>

    <th style="font-size: 14px" scope="col">اسم المستخدم</th>
    <th style="font-size: 14px" scope="col">البريد الإلكتروني</th>

    <th style="font-size: 14px" scope="col"> تاريخ الإضافة</th>
    <th style="font-size: 14px" scope="col"> تاريخ التعديل</th>

    <th style="font-size: 14px" scope="col"> </th>
    <th style="font-size: 14px" scope="col"> </th>

    @foreach ($users as $n)
    <tr>
      <td style="font-size: 14px">{{ $n->id }}</td>

      <td style="font-size: 14px">{{ $n->name }}</td>
      <td style="font-size: 14px">{{ $n->email }}</td>

      <td style="font-size: 14px">{{ Carbon\Carbon::parse($n->created_at)->format('Y-m-d') }}
      <td style="font-size: 14px">{{ Carbon\Carbon::parse($n->updated_at)->format('Y-m-d') }}






      <td style="font-size: 14px">
        <a class=" status-change" href="/edit-user/{{$n->id}}">
          تعديل
        </a>
      </td>

      <td style="font-size: 14px">
        <a class=" status-change" href="/delete-user/{{$n->id}}">

          حذف
        </a>
      </td>
    </tr>
    @endforeach



  </thead>
</table>
<h4>المستخدمين المسجلين من الآدمن</h4>
<table class="table" style="width:100%;">

  <thead>
    <th style="font-size: 14px" scope="col">#</th>

    <th style="font-size: 14px" scope="col">اسم المستخدم</th>
    <th style="font-size: 14px" scope="col">الكتب المختارة</th>

    <th style="font-size: 14px" scope="col"> تاريخ الإضافة</th>
    <th style="font-size: 14px" scope="col"> تاريخ التعديل</th>

    <th style="font-size: 14px" scope="col"> </th>
    <th style="font-size: 14px" scope="col"> </th>

    @foreach ($users_admin as $n)
    <tr>
      <td style="font-size: 14px">{{ $n->id }}</td>

      <td style="font-size: 14px">{{ $n->name }}</td>
      <td style="font-size: 14px">{{ $n->selectedBooks }}</td>

      <td style="font-size: 14px">{{ Carbon\Carbon::parse($n->created_at)->format('Y-m-d') }}
      <td style="font-size: 14px">{{ Carbon\Carbon::parse($n->updated_at)->format('Y-m-d') }}






      <td style="font-size: 14px">
        <a class=" status-change" href="/edit-user/{{$n->id}}">
          تعديل
        </a>
      </td>

      <td style="font-size: 14px">
        <a class=" status-change" href="/delete-user/{{$n->id}}">

          حذف
        </a>
      </td>
    </tr>
    @endforeach



  </thead>
</table>
@endsection