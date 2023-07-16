<style>
    .lang.active {
        color: blue
    }
</style>

<div class="box0 header slideInDown">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{URL::asset('assets/Frontend/images/iqraa_logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-9">

                <nav class="navbar navbar-default pull-right" role="navigation">
                    <div class="container-fluid" style="padding: 0;">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" style="float:left;">
                                <span class="sr-only">Toggle navigation</span>
                                <span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                            </button>
                        </div>
                        <div class="navbar-offcanvas navbar-offcanvas-right navbar-offcanvas-touch" id="js-bootstrap-offcanvas">
                            <ul class="nav navbar-nav navbar-right linksNav navbar-main">
                                <!--<li class="active" ><a href="">الرئيسية</a></li>-->

                                <?php
                                $lang = app()->getLocale();
                                $menu = DB::table('content')->where([['key', 'menu'], ['lang', $lang]])->get();

                                ?>

                                @foreach($menu as $m)
                                <li><a href="{{$m->slug}}">{{$m->title}}</a></li>

                                @endforeach



                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Config::get('languages')[App::getLocale()] }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                                            {{$language}}</a>
                                        @endif
                                        @endforeach
                                    </div>
                                </li>
                                @if (Auth::check())
                                <li>{{ Auth::user()->name }}</li>
                                @endif
                                <!-- <li>

                                  <button type="btn" onclick="" style=" border: 0; background:none;  margin-right:40%; " ><img style="width:50% !important" src="assets/Frontend/images/lang-ar.png" alt=""></button>

                                </li>
                                 -->
                                <!-- 
                                @if(\Auth::id())
                                <li><a href="{!! url('user') !!}">حسابي</a></li>
                                @else
                                <li><a href="{!! url('user') !!}">تسجيل الدخول</a></li>
                                @endif -->
                            </ul>


                        </div>


                    </div>
                </nav>

            </div>

        </div>
    </div>
</div>