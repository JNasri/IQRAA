@extends('Layout.layout')

@section('content')



<div class="main-slider">
    <div class="owl- owl-">
        <div class="item" style="background: url('{{URL::asset('assets/Frontend/images/main-slider.png')}}');">
            <div class="container">
                <div class="row" style=" display: grid; width: 100%;">
                    <div class="col-sm-6 col-xs-12 slider-dis" style="margin-top:200px; width: 100%; text-align:center">
                        <!-- <img src="{{URL::asset('assets/Frontend/images/iqraa-white-new.png')}}" style="width: 50%"
                            alt=""> -->

                        <!-- {{__('words.Iqraa')}} -->
                        <!-- @lang('words.Iqraa') -->

                        <h2 class="main">

                            {{$lang}}

                            {{__('words.Home_Title')}}

                        </h2>
                        <span class="title-border-bottom">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box1 about-us slideInright">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-us-image">
                    <img src="{{URL::asset('assets/Frontend/images/books.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-6 mid-div">
                <h1 class="block-title">
                    {{__('words.About_Series_title')}}
                </h1>
                <h2>
                    {{__('words.About_Series_q')}}
                </h2>
                <p>

                    {{__('words.About_Series_a')}}

                </p>


                <br>
            </div>
        </div>
    </div>
</div>

<div class="box2 vision slideInUp  " style="height: auto;">

    <div class="container">
        <div class="row">


            <div class="col-md-7">
                <h1 class="block-title"> {{__('words.Vision_Mission_Objectives')}}
                </h1>
                <h3> {{__('words.Vision_title')}}
                </h3>

                <p><span style="color:#a7d7ca">
                        {{__('words.Vision_description')}}
                    </span></p>

                <h3> {{__('words.Mission_title')}}
                </h3>

                <p><span style="color:#a7d7ca">
                        {{__('words.Mission_description')}}
                    </span></p>

                <h3> {{__('words.Objectives_title')}}
                </h3>



                <p>
                    @foreach ($goals as $goal)

                    <span style="color:#a7d7ca">
                        {{$goal->title}}
                    </span>
                    <br />
                    @endforeach

                </p>
            </div>

            <div class="col-md-5">

                <div class="vision-image" style="margin-top: 0px;">
                    <img src="{{URL::asset('assets/Frontend/images/vision-image3.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>


</div>


<div class="box6 why-iqraa" style="height: auto;">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="block-title">لماذا سلسلة جامعة أم القرى؟</h1>
            </div>

            @foreach ($features as $feature)
            <div class="col-sm-4 one-why-iqraa">
                <div>
                    <i class="{{$feature->slug}}"></i>
                    <h3 class="justify-text">{{$feature->title}}</h3>
                </div>
            </div>


            @endforeach


            /Users/sawsan/Desktop/workspace/iqraa/iqraa - 11 Jun/iqraa_new_2/resources/views/index.blade.php
        </div>

    </div>
</div>
</div>




<div class="box4 why-iqraa slideInleft">
    <div class="container">

        <div class="row">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="block-title"> كتب السلسلة
                    </h1>
                </div>

            </div>
            <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> -->
            <!-- Wrapper for slides -->
            <div class="owl-carousel owl-theme">

                @foreach( $books as $book )
                <div class="carousel-item">
                    <div class="col-4">
                        <div class="col-item">
                            <div class="photo">
                                <img src="/assets/Books/{{$book->image}} " style="width:50%" class="img-responsive" alt="a" />
                            </div>
                            <div class="info">
                                <div class="row">
                                    <div class="price col-md-12">
                                        <h5>
                                            {{$book->title}}

                                        </h5>
                                        <h5 class="price-text-color">
                                            {{$book->price}}
                                        </h5>
                                    </div>

                                </div>
                                <div class="separator clear-right">


                                    <div class="clearfix">
                                        <p class="btn-details" style="float: right">
                                            <i class="fa fa-shopping-cart"> &nbsp;&nbsp; </i><a href="{{$book->url}}" class="hidden-sm">شراء
                                                الكتاب </a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            @foreach($more_books as $b)

            <a class="show-more" style="" href="{{$b->slug}}">{{$b->title}}</a>
            @endforeach
        </div>

    </div>
</div>


<div class="box5 says-about-arabic slideInright">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="block-title">أخبار وأحداث سلسلة جامعة أم القرى</h1>
            </div>

            <div class="news-content">

                @foreach($media_cneter as $n)
                <div class="col-md-6">
                    <div class="one-news">
                        <div class="image">
                            <img src="/assets/MediaCenter/{{$n->image}}" alt="">
                        </div>
                        <div class="details">
                            <h3 style="font-size: 18px">{{$n->title}}</h3>
                            <p>{{\Illuminate\Support\Str::limit(trim(preg_replace('/\s+/', ' ', strip_tags(html_entity_decode($n->description, ENT_QUOTES, 'UTF-8')))),90)}}
                            </p>
                            <a href="{{$n->url}}">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
            <a style="float:left; margin-top: 5%" href="/media-center"> اقرأ المزيد</a>
        </div>
    </div>
</div>


<div class="box6 news slideInUp" style="padding-bottom: 100px;height:auto;">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="block-title">تواصل معنا</h1>
            </div>
            <div class="col-md-12 says-slider">
                <div class="">
                    <div class="item">
                        @if(Session::has('message'))

                        <div class="alert alert-success" role="alert">
                            شكرًا لك، تم إرسال استفسارك بنجاح
                        </div>
                        @endif
                        <form id="contact-form" action="/inquiry" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">الاسم</label>
                                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="الاسم" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">البريد الالكتروني</label>
                                    <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="example@example.com" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">رقم الاتصال </label>
                                    <input type="text" name="phoneNo" class="form-control" id="inputPassword4" placeholder="مثال : 00966512345678" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlTextarea1">الرسالة</label>
                                    <textarea name="inquiry" class="form-control" id="exampleFormControlTextarea1" rows="9" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary send-btn">إرسال</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection