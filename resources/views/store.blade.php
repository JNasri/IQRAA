@extends('Layout.layout')

@section('content')
<style>
.content {
    justify-content: center;
    background: #f6f0ee;
}


.content .text-center {
    margin-bottom: 50px
}


.output-content {
    display: contents;
}

.output-content h3 {
    font-size: 48px !important;
    font-family: "baskerville" !important;
    color: #6c665d;
    float: right;
    padding-left: 50px
}

.output-content p {
    padding: 35px;
    font-size: 26px;
    text-align: right !important;

}

.outputs {
    height: 690px;
}

.course .content h4 {
    font-size: 29px;
    font-weight: bold;
    font-size: 35px;
    line-height: 1.5
}

.course {
    background: #f6f0ee;

}

.course .content {
    margin-right: 50px;
}

.course .card {
    width: 18rem;
    background-color: #6f574d;
    height: 12rem;
    border-radius: 20px;
}

.card-title {
    font-size: 20px
}

.card-body {
    padding: 25px;
}

.card-body .card-title {
    font-weight: bold;
    color: #ffffff;
    line-height: 1.5;
    font-size: 22px;
}

.card-body .card-text {
    color: #f6f0ee;
    font-size: 18px;
}

.card:hover {
    transform: scale(0.9, 0.9);
    padding: 5px;
    box-shadow: 3px 3px 18px #888888;
}

.books a.more {
    float: left;
    color: #f6f0ee
}

.books a.more:hover {
    text-decoration: underline !important;
}

h4.content-num {
    color: #6c665d;
    text-align: right;
    font-size: 40px;
    font-family: "baskerville" !important;
}

.books{
    
    background-color: #287a64;
}


.books .block-title{
    color: #fff;
}

.books a.more{
    color: #fff;
    float: left;
}
.outputs{
    margin-top: -67px;

}


.course{
    height: 760px;

}


@media only screen and (max-width: 600px) {

    .content h1 {
        font-size: 20px;
    }

    .content {
        margin-bottom: 40px
    }

    .content .text-center {
        margin-top: 40px;
        margin-bottom: 40px
    }

    .content {
        font-size: 16px
    }

    .output-content p {
        padding: 35px;
        font-size: 20px;
        text-align: right !important;

    }

    .course .content h4 {
        font-size: 22px;
        padding: 0 !important;
        margin-bottom: 20px;
    }

    .outputs {
        height: 800px !important;
    }

    .course {
        height: 1525px;    }
}


</style>

<div class="main-slider">
    <div class="owl- owl-">
        <div class="item" style="background: url('{{URL::asset('assets/Frontend/images/main-slider.png')}}');">
            <div class="container">
                <div class="row" style=" display: grid; width: 100%;">
                    <div class="col-sm-6 col-xs-12 slider-dis" style="margin-top:200px">
                        <h2>
                        منتجات سلسلة جامعة أم القرى لتعليم اللغة العربية لغير الناطقين بها                         </h2>
                        <span class="title-border-bottom">ــــــــــــــــــــــــــــــــــــــــــــ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="box1 content slideInright">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h1 class="block-title">مكونات سلسلة جامعة أم القرى</h1>
            </div>
        </div>


        <div class="container">
            <div class="row" style="display: flex;
justify-content: center;">
                <div class="col-2 col-xs-12 content">
                    <h4 class="content-num">1</h4>

                    ٥ كتب للطالب
                    <br>
                    ٤ كتب للمعلم
                </div>
                <div class="col-2 col-xs-12 col-half-offset content">
                    <h4 class="content-num">2</h4>

                    نسخة تفاعلية حاسوبية
                </div>
                <div class="col-2 col-xs-12 col-half-offset content">
                    <h4 class="content-num">3</h4>

                    تطبيقات للهواتف الذكية
                </div>
                <div class="col-2 col-xs-12 col-half-offset content">
                    <h4 class="content-num">4</h4>

                    معجم أحادي مختص
                </div>
                <div class="col-2  col-xs-12 col-half-offset content">
                    <h4 class="content-num">5</h4>
                    قصص متدرجة
                </div>
            </div>
        </div>



    </div>
</div>



<div class="box4 books slideInleft">
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
                                <img src="/assets/Books/{{$book->image}} " style="width:50%" class="img-responsive"
                                    alt="a" />
                            </div>
                            <div class="info">
                                <div class="row">
                                    <div class="price col-md-12">
                                        <h5>
                                            {{$book->title}}

                                        </h5>
                                        <h5 class="price-text-color">
                                            {{$book->price}} </h5>
                                    </div>

                                </div>
                                <div class="separator clear-right">


                                    <div class="clearfix">
                                        <p class="btn-details" style="float: right">
                                            <i class="fa fa-shopping-cart"> &nbsp;&nbsp; </i><a href="{{$book->url}}"
                                                class="hidden-sm">شراء
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

            <a class="more" style="" href="{{$b->slug}}">{{$b->title}}</a>
            @endforeach
        </div>

    </div>
</div>



<div class="box5 outputs slideInright">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="block-title" style="margin-bottom: 30px;">المخرجات</h1>
            </div>
            <div class="col-md-6">
                <div class="output-content">

                    <h3 style="font-size: 18px">1</h3>
                    <p>
                        معرفة مفاهيم اللغة العربية والثقافة الإسلامية

                    </p>

                </div>
            </div>

            <div class="col-md-6">
                <div class="output-content">

                    <h3 style="font-size: 18px">2</h3>
                    <p>
                        التمكّن في الكفاءة اللغوية والتواصلية والثقافية

                    </p>

                </div>
            </div>

            <div class="col-md-6">
                <div class="output-content">
                    <h3 style="font-size: 18px">3</h3>
                    <p>
                        تعليم عناصر اللغة المختلفة:
                        الأصوات، والتراكيب، والمفردات

                    </p>

                </div>
            </div>

            <div class="col-md-6">
                <div class="output-content">

                    <h3 style="font-size: 18px">4</h3>
                    <p>
                        تنمية مهارات الاستماع والقراءة والكتابة والتحدث
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>





<div class="box1 course slideInright">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center" style="margin-bottom: 40px;">
                <h1 class="block-title">الدورات</h1>
            </div>
        </div>


        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 content">

                    <h4 style=" ">
                        دورات تعليم اللغة العربية

                    </h4>

                </div>
                <div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3 content">

                    <div class="card" style="width: 14rem; background-color:#6f574d ">
                        <div class="card-body">
                            <p class="card-title">الدورات القصيرة الـمـكــثـفــة</p>
                            <br>
                            <p class="card-text">لتعليم اللغة العربية</p>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 content">

                    <div class="card" style="width: 14rem; background-color:#6f574d ">
                        <div class="card-body">
                            <p class="card-title">الدورات الطويلة الـمـكــثـفــة</p>
                            <br>
                            <p class="card-text">دبلوم لغة العربية</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="justify-content: center;">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 content">

                    <h4 style=" ">
                        دورات إعداد المعلمين

                    </h4>

                </div>
                <div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3 content">

                    <div class="card" style="width: 14rem; background-color:#6f574d ">
                        <div class="card-body">
                            <p class="card-title">دورة إعداد معلمي اللغـة العربيـــــــــة
                            </p>
                            <br>
                            <!-- <p class="card-text">لتعليم اللغة العربية</p> -->

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 content">

                    <div class="card" style="width: 14rem; background-color:#6f574d ">
                        <div class="card-body">
                            <p class="card-title">دورة إعداد معلمي اللغة العربية
                            </p>
                            <p class="card-text">

                                لتدريس سلسلة جامعة أم القرى لتعليم
                                اللغـــــــة العربيــــة لغير الناطقــــين بها

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>



<div class="box6 news slideInUp" style="padding-bottom: 100px;height:auto; background-color: #ffffff">

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
                                    <input type="text" name="name" class="form-control" id="inputEmail4"
                                        placeholder="الاسم" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">البريد الالكتروني</label>
                                    <input type="email" name="email" class="form-control" id="inputPassword4"
                                        placeholder="example@example.com" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">رقم الاتصال </label>
                                    <input type="text" name="phoneNo" class="form-control" id="inputPassword4"
                                        placeholder="مثال : 00966512345678" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlTextarea1">الرسالة</label>
                                    <textarea name="inquiry" class="form-control" id="exampleFormControlTextarea1"
                                        rows="9" required></textarea>
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