<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TDCL8PX');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Saffrongrid')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">--}}
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDCL8PX"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

{{--Navigation--}}
<nav>
    {{--Full page nav--}}

    <div class="container">
        <div class="logo-container">
            <a href="/"><img class="img-fluid" src="{{url('/media/sgrid_logo.jpg')}}" alt=""></a>
        </div>

        <div class="full-page-menu">
            <a href="#" class="close-btn">
                <img src="{{url('/media/icons/icon_close.svg')}}" alt=""
                     class="image-fluid">
            </a>
            <a href="/" class="nav-elem {{request()->is('/') ? 'active' : ''}}">Home</a>
            <a href="/about" class="nav-elem {{request()->is('about') ? 'active' : ''}}">About</a>
            <a href="/services" class="nav-elem {{request()->is('services') ? 'active' : ''}}">Services</a>
            <a href="/projects" class="nav-elem {{request()->is('projects') ? 'active' : ''}}">Projects</a>
            <a href="/contact" class="nav-elem {{request()->is('contact') ? 'active' : ''}}">Contact</a>
            <a href="/careers" class="nav-elem {{request()->is('careers') ? 'active' : ''}}">Careers</a>
        </div>
        <div class="nav-menu">
            <span class="lg-only">
                <a href="/about" class="nav-elem {{request()->is('about') ? 'active' : ''}}">About</a>
                <a href="/services" class="nav-elem {{request()->is('services') ? 'active' : ''}}">Services</a>
                <a href="/projects" class="nav-elem {{request()->is('projects') ? 'active' : ''}}">Projects</a>
                <a href="/contact" class="nav-elem {{request()->is('contact') ? 'active' : ''}}">Contact</a>
                <a href="/careers" class="nav-elem {{request()->is('careers') ? 'active' : ''}}">Careers</a>
            </span>

            <a href="#" class="mobile-only nav-elem menu-btn">Menu</a>
        </div>
    </div>
</nav>

<div id="contact-form-modal" class="custom-modal">
    <div class="form-container">
        <div class="close-icon modal-close-btn"><img src="{{url('/media/icons/icon_close_black.svg')}}" alt="" class="img-fluid"></div>
        <div class="container">
            <h3>Contact Us</h3>
            <p>Please be as specific as possible in your entry below so that we could best help you. For urgent matters, please contact us directly with the details on our <a href="/contact">Contact Page</a></p>
            <form action="{{ route('query.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="contact-name">Name</label>
                    <input id="contact-name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="contact-email">E-mail</label>
                    <input id="contact-email" class="form-control" type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="contact-reason">Please select what applies to your case:</label>
                    <select class="form-control" name="case">
                        <option>Click here to select</option>
                        <option>I have a project that I want Sgrid to work on</option>
                        <option>I am an exisiting customer and I need help with an ongoing project</option>
                        <option>I want to partner with Saffrongrid</option>
                        <option>I'm looking for a job</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="contact-message">Message</label>
                    <textarea class="form-control" id="contact-message" name="message" rows="3"></textarea>
                </div>

                <button class="std-btn" type="submit" name="submit">Submit</button>
                <a class="std-btn blue modal-close-btn" onclick="getFalse()">Close</a>
            </form>
        </div>
    </div>
</div>


@yield('content')


<footer>
    @include ('partials.partner')
    {{--<div class="h-bar"></div>--}}
    <div class="contact-cta">


        {{--<div class="text-content">--}}
            {{--<h3>How can we help?</h3>--}}
            {{--<p>Feel free to get in touch with us by giving your requirement details and contact information. We will get--}}
                {{--back to you as soon as we can.</p>--}}
        {{--</div>--}}
        {{--<div class="btn-container">--}}
            {{--<a class="std-btn cta-btn">Get in touch</a>--}}
        {{--</div>--}}

        {{--<a href="/" class="text-btn-sm">Read about our <span>Services</span> ></a>--}}
        {{--<a href="/" class="text-btn-sm">Browse through our <span>Projects</span> ></a>--}}

        <div class="footer-nav">
            <a href="/" class="nav-elem {{request()->is('/') ? 'active' : ''}}">Home</a>
            <a href="/about" class="nav-elem {{request()->is('about') ? 'active' : ''}}">About</a>
            <a href="/services" class="nav-elem {{request()->is('services') ? 'active' : ''}}">Services</a>
            <a href="/projects" class="nav-elem {{request()->is('projects') ? 'active' : ''}}">Projects</a>
            <a href="/contact" class="nav-elem {{request()->is('contact') ? 'active' : ''}}">Contact</a>
            <a href="/careers" class="nav-elem {{request()->is('careers') ? 'active' : ''}}">Careers</a>
        </div>
        <div class="footer-social text-center">
            <a href="https://www.facebook.com/saffrongrid/" target="_blank">
                <div class="social-icon">
                    <img src="{{url('/media/icons/social/facebook_white.png')}}" alt="" class="img-fluid">

                </div>
            </a>
            <a href="https://www.linkedin.com/company/saffrongrid-limited/" target="_blank">
                <div class="social-icon">
                    <img src="{{url('/media/icons/social/linkedin_white.png')}}" alt="" class="img-fluid">
                </div>
            </a>


        </div>
        <div class="foot-bar">
            <div class="foot-links">
                <a href="/" class="foot-link">Terms & Conditions</a>
                <a href="/" class="foot-link">Copyright</a>
                <a href="/" class="foot-link">Cookie Policy</a>
            </div>


            <p>Copyright 2019 Saffrongrid Limited. All rights reserved</p>
        </div>
    </div>


</footer>

<script
        src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.9.1/rellax.min.js"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
<script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>
