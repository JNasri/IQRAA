@extends('Layout.layout')

@section('content')

<div class="main-content gray">
    <div class="cp-news-grid-style-5">
        <div class="container">
            <div class="row" style="padding-bottom: 5px !important;">
                <div class="col-md-12">
                    <div class="cp-single-post">
                        <div class="cp-post-content">

                            <div class="card-user">
                                <form method="POST" action="/register" accept-charset="UTF-8" id="contact-form" role="form"="">
                                    @csrf
                                    <div class="user-title">
                                        <h2>
                                            {{__('words.Register_Head')}}
                                        </h2>
                                        <br />
                                    </div>
                                    <div class="user-inputs">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="exampleInputname1" aria-describedby="emailHelp" placeholder="{{__('words.Username')}}" required pattern="^(?=.{6,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$">
                                        </div>
                                        <div class="form-group">
                                            <!--<label for="exampleInputEmail1">الرقم الوطني / البريد الالكتروني</label>-->
                                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{__('words.Email')}}" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                        </div>
                                        <div class="form-group">
                                            <!--<label for="exampleInputPassword1">كلمة المرور</label>-->
                                            <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="{{__('words.Password')}}" required minlength="6">
                                        </div>
                                        <div class="form-group">
                                            <!--<label for="exampleInputPassword1">كلمة المرور</label>-->
                                            <input type="password" id="ConfirmPassword" name="ConfirmPassword" class="form-control" id="exampleInputConfirmPassword1" placeholder="{{__('words.Confirm_Password')}}" required minlength="6" oninput="checkPasswordMatch()">
                                            <p id="password_match_error" style="display: none; color: red;">Passwords do not match</p>
                                        </div>
                                    </div>
                                    <div class="user-buttons">
                                        <button type="submit" class="btn btn-success btn-login">{{__('words.Register_Button')}}</button>
                                        <br><br>
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @if ($errors->has('name'))
                                                <li>{{__('words.Register_Name_Error')}}</li>
                                                @endif
                                                @if ($errors->has('email'))
                                                <li>{{__('words.Register_Email_Error')}}</li>
                                                @endif
                                                @if ($errors->has('password'))
                                                <li>{{__('words.Register_Pass_Error')}}</li>
                                                @endif
                                                @if ($errors->has('ConfirmPassword'))
                                                <li>{{__('words.Register_ConfPass_Error')}}</li>
                                                @endif
                                            </ul>
                                        </div>
                                        @endif
                                        <br /><br />
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection

<!-- @section('scripts')
@push('scripts')

@endpush
@endsection -->