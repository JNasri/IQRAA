@extends('Layout.layout')

@section('content')



<div class="main-slider">
    <div class="owl- owl-">
        <div class="item" style="background: url('{{URL::asset('assets/Frontend/images/main-slider.png')}}');">
            <div class="container">
                <div class="row" style=" display: grid; width: 100%;">
                    <div class="col-sm-6 col-xs-12 slider-dis" style="margin-top:200px">
                        <h2>
                            من نحن
                        </h2>
                        <span class="title-border-bottom">ــــــــــــــــــــــــــــــــــــــــــــ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content">
    <div class="important-block important-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <img src="{{URL::asset('assets/Frontend/images/wmkn.png')}}" style="margin-top: -44px;" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 justify-text-only">
                    <h3>شركة وادي مكة للمعرفة</h3>
                    <p>هي شركة ذات مسؤولية محدودة مملوكة بالكامل لشركة وادي مكة للتقنية، تم تأسيسها بقرار مجلس الإدارة
                        بتاريخ ٦ شعبان ١٤٣٨هـ بهدف الاستثمار في الإنتاج الفكري. تعمل الشركة على تقديم الخدمات الاستشارية
                        للجهات الحكومية والخاصة، قياماً بدورها في نقل المعرفة. بالإضافة إلى استثماراتها في إنتاج مواد
                        تعليمية نوعية.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="important-block  important-green ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12  col-lg-push-6 col-md-push-6 ">
                <img src="{{URL::asset('assets/Frontend/images/Umm_Al-Qura_University_logo.png')}}" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12  col-lg-pull-6 col-md-pull-6  justify-text-only">
                <h3> جامعة أم القرى</h3>
                <p>
                <p>
                جامعة أم القرى هي جامعة سعودية حكومية تقع في مدينة مكة المكرمة، تأسست في العام 1950م تحت مسمى كلية الشريعة في مكة المكرمة لتصبح أول مؤسسة تعليمية جامعية في المملكة العربية السعودية.

                </p>
                </p>
            </div>
        </div>
    </div>
</div> -->
@endsection