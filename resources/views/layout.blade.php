<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TDCL8PX');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Saffrongrid')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDCL8PX"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

{{--Navigation--}}
<nav>
    {{--Full page nav--}}

    <div class="container">
        <div class="logo-container">
            <img class="img-fluid" src="{{url('/media/sgrid_logo.jpg')}}" alt="">
        </div>
        <div class="nav-menu">
            <a href="/" class="nav-elem">About</a>
            <a href="/" class="nav-elem">Services</a>
            <a href="/" class="nav-elem">Projects</a>
            <a href="/" class="nav-elem">Contact</a>
            <a href="/" class="nav-elem">X</a>
        </div>
    </div>
</nav>

@yield('content')



{{--<script--}}
        {{--src="https://code.jquery.com/jquery-3.3.1.min.js"--}}
        {{--integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="--}}
        {{--crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
<script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>
