<!doctype html>
<html dir="rtl" lang="ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */

    /*All the styling goes here*/

    .row.justify-content-md-center {
        width: 80%;

    }

    a img {
        -ms-interpolation-mode: bicubic;
        max-width: 100%;
    }

    body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%;
    }

    table td {
        font-family: sans-serif;
        font-size: 14px;
        vertical-align: top;
    }

    /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

    .body {
        background-color: #f6f6f6;
        width: 100%;
    }

    /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
    .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px;
    }

    .ar {
        direction: rtl;
        line-height: 1.9;
        font-size: 16px;
        width: 45%;
        float: right
    }


    .en {
        direction: ltr;
        font-size: 16px;
        width: 45%;
        float: left;
        line-height: 1.5;

    }

    .footer td,
    .footer p,
    .footer span,
    .footer a {
        color: #999999;
        font-size: 12px;
        text-align: center;
    }

    /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
    h1,
    h2,
    h3,
    h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px;
    }

    h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize;
    }

    p,
    ul,
    ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px;
    }

    p li,
    ul li,
    ol li {
        list-style-position: inside;
        margin-left: 5px;
    }

    a {
        color: #fff;
        text-decoration: underline;
    }

    /* -------------------------------------
          BUTTONS
      ------------------------------------- */
    .btn {
        box-sizing: border-box;
        width: 100%;
    }

    .btn>tbody>tr>td {
        padding-bottom: 15px;
    }

    .btn table {
        width: auto;
    }

    .btn table td {
        background-color: #ffffff;
        border-radius: 5px;
        text-align: center;
    }

    a {

        border-radius: 5px;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: bold;
        margin: 0;
        padding: 12px 25px;
        text-decoration: none;
        text-transform: capitalize;
    }

    a:hover {
        text-decoration: none;
        color: #fff;



    }

    .btn-primary table td {
        background-color: #3498db;
    }

    .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff;
    }

    /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
    .last {
        margin-bottom: 0;
    }

    .first {
        margin-top: 0;
    }

    .align-center {
        text-align: center;
    }

    .align-right {
        text-align: right;
    }

    .align-left {
        text-align: left;
    }

    .clear {
        clear: both;
    }

    .mt0 {
        margin-top: 0;
    }

    .mb0 {
        margin-bottom: 0;
    }

    .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0;
    }

    .powered-by a {
        text-decoration: none;
    }

    hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0;
    }

    /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */

    @media only screen and (max-width: 900px) {
        .row.justify-content-md-center {
            width: 80%;
            height: 620px;
        }
    }


    @media only screen and (max-width: 620px) {
        .row.justify-content-md-center {
            width: 100%;
        }

        table.body h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
        }

        table.body p,
        table.body ul,
        table.body ol,
        table.body td,
        table.body span,
        table.body a {
            font-size: 16px !important;
        }

        table.body .wrapper,
        table.body .article {
            padding: 10px !important;
        }

        table.body .content {
            padding: 0 !important;
        }

        table.body .container {
            padding: 0 !important;
            width: 100% !important;
        }

        table.body .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
        }

        table.body .btn table {
            width: 100% !important;
        }

        table.body .btn a {
            width: 100% !important;
        }

        table.body .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
        }
    }

    /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
    @media all {
        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
        }

        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }

        .btn-primary table td:hover {
            background-color: #34495e !important;
        }

        .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
        }
    }
    </style>
</head>

<body class="container-fluid">
    <div style="width:200px; margin:0 auto;">
        <a class="" href="https://iqraa.sa/">
            <img src="{{asset('assets/images/iqraa_logo.png')}}">
        </a>
    </div>


    <div class="row justify-content-md-center"
        style="text-align:center; padding: 20px; margin:0 auto;  background-color: #ffffff; border-radius: 5px; margin-top: 15px; height: 500px;">
        <div class="col-6 ar">

            <br>
            <br>
            مرحباً مسؤول موقع "سلسلة اقرأ"
            <br>
            :لقد تمت إضافة طلب دعم فني جديد
            <br>

            من قِبل:
            <br>
            <b>
                mail
            </b>
            <br>
            
            <br>
            الرسالة:

            <br>
            <b>
in
            </b>
            <br>

            تحياتنا

            <br>
            "فريق مقام"
        </div>
        <div class="col-6 en">

            <br>
            <br>
            <br>


            Dear Iqraa Administrator;
            <br>
            A new Support Application has been added
            from:
            <br>
            <b>
mail            </b>
            <br>

           
            <br>
            message:
            <br>
            <b>
in
            </b>



            <br>

            Greetings
            <br>
            Maqam Team
        </div>

        <!-- Force next columns to break to new line -->



        <div class="w-100">
            <br>
            <br>
        </div>

    </div>




    <!-- END CENTERED WHITE CONTAINER -->

    <!-- START FOOTER -->
    <div class="footer">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <br>
                <td class="content-block">
                    <span class="apple-link">سلسلة اقرأ, شركة وادي مكة المعرفة , 2022</span>
                </td>
            </tr>
            <tr>

            </tr>
        </table>
    </div>
    <!-- END FOOTER -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>