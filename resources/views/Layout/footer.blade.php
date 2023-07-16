<div class="box7 footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img style=" width: 143px; " src="{!! asset('assets/Frontend/images/iqraa-white-new.png') !!}" alt="">
            </div>
            <div class="col-sm-5">
                <h4>القائمة</h4>

                <?php
    $menu = DB::table('content')->where('key', 'menu')->get();

?>

                <ul class="links">


                @foreach($menu as $m)
                                <li><a href="{{$m->slug}}">{{$m->title}}</a></li>

                                @endforeach
<!-- 
                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                    <li><a href="{{url('/about-us')}}">من نحن</a></li>
                    <li><a href="{{url('/store')}}"> المنتجات</a></li>
                    <li><a href="{{url('/media-center')}}"> المركز الإعلامي</a></li> -->


                </ul>
            </div>
            <div class="col-sm-2">
                <h4>تابعونا</h4>
                <ul>
                    <li><a href="https://www.facebook.com/WadiMakkahSA/"><i class="fa-brands fa-square-facebook"></i><span>الفيس بوك</span></a></li>
                    <li><a href="https://twitter.com/WadiMakkahSA/"><i class="fa-brands fa-twitter"></i><span>تويتر</span></a></li>
                    <li><a href="https://www.youtube.com/channel/UC74Wpv1INL53Esn0kknmdtw"><i class="fa-brands fa-youtube"></i><span>يوتيوب</span></a></li>
                    <li><a href="https://www.linkedin.com/company/wadimakkahsa/"><i class="fa-brands fa-linkedin"></i><span>لينكدإن</span></a></li>
                </ul>
            </div>
            <!-- <div class="col-sm-3 maillist">
                <h4>النشرة البريدية</h4>
                <form action="">
                    <input type="text" placeholder="البريد الإلكتروني">
                    <button type="submit">اشتراك</button>
                </form>
            </div> -->
        </div>
    </div>
</div>
<div class="box8 bottom-footer" style="height: auto !important;">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="https://wadimakkah.sa/" title="شركة وادي مكة للتقنية" target="_blank"
                    class="pull-left develop">
                    <p style="padding-top: 10px;" class="pull-left">شركاء النجاح</p>
                    <img class="pull-left" style="margin-left: 4px;" src="{!! asset('assets/Frontend/images/Umm_Al-Qura_University_logo.png') !!}"
                        height="50" width="50" alt="">
                    <img class="pull-left" style="margin-left: 4px;" src="{!! asset('assets/Frontend/images/emJn1bAs_400x400-removebg-preview.png') !!}"
                        height="50" width="50" alt="">
                    <img class="pull-left" style="margin-left: 4px;" src="{!! asset('assets/Frontend/images/3.png') !!}"
                        height="50" width="50" alt="">
                </a>
            </div>
            <div class="col-sm-4 text-center">
                <div class="copy-right" style="font-size: 13px;">
                    جميع الحقوق محفوظة © سلسلة اقرأ  {{date('Y')}}
                </div>
            </div>
            <div class="col-sm-4">
                <a href="https://wadimakkah.sa/" title="شركة وادي مكة للتقنية" target="_blank"
                    class="pull-right develop">
                    <p style="padding-top: 10px;" class="pull-left">تنفيذ وتطوير</p>
                    <img class="pull-left" src="{!! asset('assets/Frontend/images/wmkn.png') !!}" width="60"
                        alt="">
                </a>
            </div>
        </div>
    </div>
</div>