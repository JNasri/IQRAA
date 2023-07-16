@extends('Layout.admin-layout')
@section('content')


<!-- check if create user is successfull -->
@if (session('success'))
<div class="alert alert-success">
  {{__('words.Success_Register')}}
</div>
@endif

<div class="media-center-admin" style="display: inline-block; width:100%">
  <h4 class="h4"> إضافة مستخدم جديد</h4>
</div>


<form class="add-user" action="/add-user" method="POST" enctype="multipart/form-data">

  @csrf
  <div class="row" style="width: 150%">
    <div class="form-group col-sm-3">
      <label for="exampleInputEmail1">اسم المستخدم:</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" required pattern="^(?=.{6,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" value="">

    </div>
    <div class="form-group  col-sm-3">
      <label for="exampleInputEmail1">كلمة المرور:</label>
      <input type="password" name="password" class="form-control" id="exampleInputEmail1" value="" required minlength="6">
    </div>
  </div>

  <button type="submit">submit</button>
</form>

@endsection