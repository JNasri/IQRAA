@extends('Layout.layout')

@section('content')



<div class="main-content gray">
    <div class="cp-news-grid-style-5">
        <div class="container">
            <div class="row" style="padding-bottom: 5px !important;">
                <div class="col-md-12">
                    <div class="cp-single-post">
                        <div class="cp-post-content">
                            <!-- check register success -->
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{__('words.Success_Register')}}
                            </div>
                            @endif
                            <div class="card-user">
                                <form method="POST" action="/login" accept-charset="UTF-8" id="contact-form" role="form"="">
                                    @csrf
                                    <div class="user-title">
                                        <h2>{{__('words.Login_Head')}}</h2><br />
                                    </div>
                                    <div class="user-inputs">
                                        <!-- check for cookies -->
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="exampleInputname1" aria-describedby="emailHelp" placeholder="{{__('words.Login_Username')}}" required pattern="^(?=.{6,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" @if(isset($_COOKIE["name"])) value="{{ \Illuminate\Support\Facades\Crypt::decryptString($_COOKIE["name"]) }}" @endif>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="{{__('words.Login_Password')}}" required minlength="6" @if(isset($_COOKIE["password"])) value="{{ \Illuminate\Support\Facades\Crypt::decryptString($_COOKIE["password"]) }}" @endif>
                                            <span style="display: none;">password error</span>
                                        </div>
                                        <div class="form-check" style="margin-right: 5px;">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" style="height: 20px; cursor:pointer;" @if(isset($_COOKIE["name"])) checked="" @endif>
                                            <span class="form-check-label" for="exampleCheck1">{{__('words.Login_Remember')}}</span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="user-buttons">
                                        <button type="submit" class="btn btn-success btn-login" id="submitButton">{{__('words.Login_Button')}}</button>
                                        <br><br>
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <p>{{__('words.Login_Error')}}</p>
                                        </div>
                                        @endif
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