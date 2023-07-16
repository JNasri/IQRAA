<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ar">
<!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>إقرأ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" /> -->
    <!-- <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" /> -->
    <!-- <meta name="author" content="FreeHTML5.co" /> -->
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,700&display=swap&subset=arabic" rel="stylesheet">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{!! asset('assets/Frontend/images/icon.png') !!}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/animate.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/font-awesome.css') !!}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/bootstrap-rtl.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/bootstrap-flipped.css') !!}">
    <!-- Offcanvas menu  -->
    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/bootstrap.offcanvas.css') !!}" />
    <!-- Theme style  -->
    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/style-rtl.css?3') !!}">
    <!-- owl carousel  -->
    <link rel="stylesheet" href="{!! asset('assets/Frontend/plugin/owl-rtl/assets/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/Frontend/plugin/owl-rtl/assets/owl.theme.green.css') !!}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/5.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/5.3.0/css/font-awesome.min.css">    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{!! asset('assets/Frontend/css/hover.css') !!}" rel="stylesheet" media="all">
    <!--<link rel="stylesheet" href="{!! asset('assets/Frontend/css/theam.css') !!}">-->
    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/responsive.css') !!}">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/fontawesome.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/brands.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/Frontend/css/solid.css') !!}">


    <!-- Modernizr JS -->
    <script src="{!! asset('assets/Frontend/js/modernizr-2.6.2.min.js') !!}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]><script src="{!! asset('assets/Frontend/js/respond.min.js') !!}"></script><![endif]-->
    <!-- jQuery -->
    <script src="{!! asset('assets/Frontend/js/jquery.min.js') !!}"></script>
    @yield('css')
  
  
  	<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-597992J');</script>
    <!-- End Google Tag Manager -->
  	
</head>
<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-597992J"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
@include('Layout.header')
<div class="header-border"></div>

@yield('content')
@include('Layout.footer')



<!-- - Login Model Ends Here -->
<!-- /Popup: Login -->
<!-- jQuery -->
<script src="{!! asset('assets/Frontend/js/jquery.min.js') !!}"></script>
<!-- jQuery Easing -->
<script src="{!! asset('assets/Frontend/js/jquery.easing.1.3.js') !!}"></script>
<!-- Bootstrap -->
<script src="{!! asset('assets/Frontend/js/bootstrap.min.js') !!}"></script>
<!-- Offcanvas menu  -->
<script src="{!! asset('assets/Frontend/js/bootstrap.offcanvas.js') !!}"></script>
<!-- owl carousel  -->
<script src="{!! asset('assets/Frontend/plugin/owl-rtl/owl.carousel.min.js') !!}"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        $('.owl-carousel').owlCarousel({
            rtl:true,
            autoplay:true,
            loop:true,
            margin:10,
            nav:false,
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        });
    });
</script>
@yield('js')
<script>
    @if(Session::has('flashMessage'))
    Swal.fire({
        type: 'info',
        title: 'خطأ',
        html: '{{ Session::get('flashMessage') }}',
        customClass: {
            popup: 'animated tada'
        },
        confirmButtonText: 'إغلاق',
    });
    @endif

</script>
</body>
</html>