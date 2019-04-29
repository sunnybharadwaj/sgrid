@extends('layout')

@section('title')
    Saffrongrid | Home
@endsection

@section('content')
    @if (session()->has('message'))

        <section id="success-msg">
            <div class="h-bar"></div>

            <div class="container">
                <h3 class="text-center">{{ session()->get('message') }}</h3>
            </div>

            <a href="#" class="form-success-close">
                <img src="{{url('/media/icons/icon_close.svg')}}" alt=""
                     class="image-fluid">
            </a>

        </section>
    @endif
    <div id="home-page">
        <section id="intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="intro-text">
                            <h2 class="animated fadeDown">We don’t just build EPC solutions, we <span class="highlight">design</span>.
                            </h2>
                            <h4 class="animated fadeIn">A fast-growing company, firm in our vision to nurture the future
                                of power infrastructure. Backed by an enthusiastic, committed and a capable team of
                                experts, we stay a step ahead in meeting all your EPC (Engineering, Procurement &
                                Construction) needs in the following:</h4>

                            <div class="services-header animated fadeIn">
                                <div class=".container-fluid">

                                    <div class="row">


                                        <div class="service col-12 col-sm-4">

                                                <div class="row">
                                                    <div class="col-3 col-sm-12 col-md-12">
                                                        <div class="icon"><img src="{{url('/media/icons/solar.svg')}}" alt=""
                                                                               class="img-fluid"></div>
                                                    </div>
                                                    <div class="service-text-ctr col-9 col-sm-12 col-md-12">
                                                        <div class="text">Solar EPC: Utility-Scale &amp; Rooftop</div>
                                                    </div>
                                                </div>

                                        </div>

                                        <div class="service tnd col-12 col-sm-4">

                                                <div class="row">
                                                    <div class="col-3 col-sm-12">
                                                        <div class="icon tnd"><img src="{{url('/media/icons/tnd.svg')}}" alt=""
                                                                               class="img-fluid"></div>
                                                    </div>
                                                    <div class="service-text-ctr col-9 col-sm-10 col-md-12">
                                                        <div class="text">Transmission &amp; Distribution Systems</div>
                                                    </div>
                                                </div>

                                        </div>


                                        <div class="service col-12 col-sm-4">

                                                <div class="row">
                                                    <div class="col-3 col-sm-12">
                                                        <div class="icon"><img src="{{url('/media/icons/ohe.svg')}}" alt=""
                                                                               class="img-fluid"></div>
                                                    </div>
                                                    <div class="service-text-ctr col-9 col-sm-10 col-md-12">
                                                        <div class="text">Railway Overhead Electrification</div>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="home-header-iln" class="animated fadeIn col-sm-12 col-md-12 col-lg-5 rellax">
                        <img src="{{url('/media/illustrations/home_header_iln.png')}}" class="img-fluid">
                    </div>
                </div>

            </div>
        </section>

        <section class="bg-feature video-block">
            <div class="background-image ">
                {{--<img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">--}}
                <video loop autoplay controls class="embed-responsive-item lg-only">
                    <source src="{{url('/media/videos/gold.mp4')}}" type="video/mp4">
                </video>
                <video loop autoplay class="embed-responsive-item mobile-only md-show" >
                    <source src="{{url('/media/videos/gold.mp4')}}" type="video/mp4">
                </video>
            </div>

            <div class="container">
                <div class="content-box">
                    <div class="h-box"></div>
                    <h3>
                        Our approach ensures timely delivery, reduced overhead and seamless support to our clients.

                        {{--Our integrated, people-centric and systematic approach to handling large scale projects (end to--}}
                        {{--end or part of the project) ensures seamless support to our clients and gives us a firm edge--}}
                        {{--over our competitors.--}}
                    </h3>
                    {{--<a href="/" class="text-btn">Watch Video</a>--}}
                </div>
            </div>
        </section>

        <section id="services-projects">
            <div class="container">
                <div class="row">
                    <div class="content-column column-1 col-sm-12 col-md-12 col-lg-6">
                        <div class="text-content">
                            <h2>We Design solutions.</h2>

                            <p>We excel at providing economically viable, technically
                                superior and optimized solutions, collaborating with
                                leading solar manufacturers.</p>
                            <p>
                                With an enormous team experience of more than 1.5 GW’s in the design and development of
                                solar
                                power generating plants. We hold strong portfolio in the solar EPC segment , with
                                experienced design team, established supply chain and efficient project management team.
                            </p>
                        </div>

                        <div class="img-feature rellax" data-rellax-speed="2">
                            <img class="img-fluid" src="{{url('/media/images/home_feat1.jpg')}}" alt="">
                            <div class="line"></div>
                            <div class="feature-text">
                                <p>We helped Pennar Industries Limited (Our parent organization) convert 80% of their energy consumption into green energy with solar technology.
                                </p>
                            </div>
                        </div>
                        <div class="btn-container lg-only">
                            <a href="/services" class="text-btn-sm section-btn">Read about our services <span
                                        class="next-icon"><img
                                            src="{{url('/media/icons/icon_next.svg')}}"
                                            alt=""
                                            class="img-fluid"></span></a>

                            <a href="/projects" class="text-btn-sm section-btn">Browse all projects <span
                                        class="next-icon"><img
                                            src="{{url('/media/icons/icon_next.svg')}}"
                                            alt=""
                                            class="img-fluid"></span></a>
                        </div>

                    </div>
                    <div class="content-column column-2 col-sm-12 col-md-12 col-lg-6">
                        <div class="img-feature rellax">
                            <img class="img-fluid" src="{{url('/media/images/home_feat2.jpg')}}" alt="">
                            <div class="line"></div>
                            <div class="feature-text">
                                <p>

                                    We designed, Supplied & Erected India’s a water leak-proof Solar Car Port for SKODA factory in Aurangabad with a capacity of 1250KWp. We took it as an challenge and commissioned the Project in a record time of 35 Days with high standard Structure which can withstand the wind speed of 180mph.
                                    </p>
                            </div>
                        </div>

                        <div class="metric-boxes">
                            <div class="row">
                                <div class="metric-container col-6">
                                    <div class="metric-box box-1">
                                        <div class="number">200+ <span class="units">MW</span></div>
                                        <div class="title">Projects commissioned successfully</div>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="metric-container col-6">
                                    <div class="metric-box box-2">
                                        <div class="number">50+ <span class="units">MW</span></div>
                                        <div class="title">Projects currently in pipeline</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div href="" class="mobile-btns">
                    <a href="/projects" class="text-btn-sm mobile-only">Browse all projects</a>
                    <a href="/services" class="text-btn-sm mobile-only">Read about our services</a>
                </div>

            </div>
            <div class="special-feature">
                <div class="container">
                    <div class="row">
                        <div class="spl-feat-block col-sm-12 col-md-6 col-lg-6">
                            <div class="content-box">
                                <div class="spl-iln eco">
                                    <img src="{{url('/media/illustrations/eco_iln.png')}}" alt=""
                                         class="img-fluid">
                                </div>
                                <h3>We are <span class="highlight">for</span>  nature.</h3>
                                <p>Sgrid is committed to play a significant role in the solar power arena and spear
                                    heading the green revolution by combating global warming and climate change.</p>
                            </div>
                        </div>
                        <div class="spl-feat-block col-sm-12 col-md-6 col-lg-6">
                            <div class="content-box">
                                <div class="spl-iln innovation">
                                    <img src="{{url('/media/illustrations/innovation_iln.png')}}" alt=""
                                         class="img-fluid">
                                </div>
                                <h3>We Innovate</h3>
                                <p>We have our eyes firmly set on the future of the arena, thanks to our group of
                                    hard-working and committed research experts, we keep up to speed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>


        {{--<section id="philosophy" class="rellax" data-rellax-speed="2">--}}
        {{--<div class="container">--}}
        {{--<div class="row">--}}
        {{--<div class="col-sm-12 col-md-12 col-lg-6">--}}
        {{--<div class="metric-boxes">--}}
        {{--<div class="row">--}}
        {{--<div class="metric-container col-6">--}}
        {{--<div class="metric-box box-1">--}}
        {{--<div class="number">275+ <span class="units">MW</span></div>--}}
        {{--<div class="title">Projects commissioned successfully</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-6"></div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
        {{--<div class="col-6"></div>--}}
        {{--<div class="metric-container col-6">--}}
        {{--<div class="metric-box box-2">--}}
        {{--<div class="number">150+ <span class="units">MW</span></div>--}}
        {{--<div class="title">Projects currently in pipeline</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="services-desc col-sm-12 col-md-12 col-lg-6">--}}
        {{--<h2>We Design Solutions.</h2>--}}
        {{--<h4>We collaborate with high profile partners to build smart solutions that are economically--}}
        {{--viable, technically superior and optimised for the requirement.--}}
        {{--</h4>--}}
        {{--<a href="/services" class="text-btn-sm">Learn about our Services <span class="next-icon"><img--}}
        {{--src="{{url('/media/icons/icon_next.svg')}}"--}}
        {{--alt=""--}}
        {{--class="img-fluid"></span></a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</section>--}}
        {{--usp--}}
        {{--@include('partials.usp')--}}

        {{--What matters to us is the satisfaction of the people we work with and the tasks we commit to, be--}}
        {{--it end-to-end fulfillment (Turnkey projects) or being part of the project.--}}

        <section id="next-gen">
            <div class="iln-next-gen">
                <div class="icon"><img src="{{url('/media/illustrations/next_gen_iln_center.png')}}" alt=""
                                       class="img-fluid"></div>
            </div>
            <h2>Building the next generation of power infrastructure.</h2>

            <a href="/about" class="text-btn-sm">Learn about our Company <span class="next-icon"><img
                            src="{{url('/media/icons/icon_next.svg')}}"
                            alt=""
                            class="img-fluid"></span></a>
            @include('partials.client_list')
        </section>
    </div>

@endsection