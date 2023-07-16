@extends('Layout.layout')

@section('content')

<div class="main-slider">
    <div class="owl- owl-">
        <div class="item" style="background: url('{{URL::asset('assets/Frontend/images/main-slider.png')}}');">
            <div class="container">
                <div class="row" style=" display: grid; width: 100%;">
                    <div class="col-sm-6 col-xs-12 slider-dis" style="margin-top:200px">
                        <h2>
                            المركز الإعلامي
                        </h2>
                        <span class="title-border-bottom">ــــــــــــــــــــــــــــــــــــــــــــ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
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
    </div>
</div>

@endsection