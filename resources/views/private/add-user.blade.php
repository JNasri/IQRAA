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

  <br>
  <label for="exampleInputBook1" style="font-size: 16px;">الكتب الخاصة بالمستخدم</label>
  <br>
  <div class="row">
    <div class="col-md-4">
      <ul class="list-group" style="font-size: 16px;">
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="Student_1.1" id="firstCheckbox" name="books[]" style="cursor: pointer;">
          <label class="form-check-label" for="firstCheckbox">كتاب الطالب الأول - الجزء الأول</label>
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="Student_1.2" id="secondCheckbox" name="books[]" style="cursor: pointer;">
          <label class="form-check-label" for="secondCheckbox">كتاب الطالب الأول - الجزء الثاني</label>
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="Student_2" id="thirdCheckbox" name="books[]" style="cursor: pointer;">
          <label class="form-check-label" for="thirdCheckbox">كتاب الطالب الثاني</label>
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="Student_3" id="fourthCheckbox" name="books[]" style="cursor: pointer;">
          <label class="form-check-label" for="fourthCheckbox">كتاب الطالب الثالث</label>
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="Student_4" id="fifthCheckbox" name="books[]" style="cursor: pointer;">
          <label class="form-check-label" for="fifthCheckbox">كتاب الطالب الرابع</label>
        </li>
      </ul>
    </div>
    <div class="col-md-4">
      <ul class="list-group" style="font-size: 16px;">
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="Teacher_1" id="sixthCheckbox" name="books[]" style="cursor: pointer;">
          <label class="form-check-label" for="sixthCheckbox">كتاب المعلم الأول</label>
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="Teacher_2" id="seventhCheckbox" name="books[]" style="cursor: pointer;">
          <label class="form-check-label" for="seventhCheckbox">كتاب المعلم الثاني</label>
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="Teacher_3" id="eighthCheckbox" name="books[]" style="cursor: pointer;">
          <label class="form-check-label" for="eighthCheckbox">كتاب المعلم الثالث</label>
        </li>
        <li class="list-group-item">
          <input class="form-check-input me-1" type="checkbox" value="Teacher_4" id="ninthCheckbox" name="books[]" style="cursor: pointer;">
          <label class="form-check-label" for="ninthCheckbox">كتاب المعلم الرابع</label>
        </li>
      </ul>
    </div>
  </div>

  <button type="submit">إضافة مستخدم</button>
</form>

@endsection