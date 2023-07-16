@extends('Layout.admin-layout')
@section('content')


<div class="media-center-admin" style="display: inline-block; width:100%">
    <h4 class="h4"> تعديل القائمة الرئيسية</h4>
</div>

@foreach($menu as $n)

{{$n->title}}
@endforeach

@endsection