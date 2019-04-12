@extends('layout')

@section('title')
    Saffrongrid | Home
@endsection

@section('content')
    <div id="home-page">

        <section id="intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="intro-text">
                            <h2 class="animated fadeDown">In a fermentum odio, hendrerit semper purus.</h2>
                            <h4 class="animated fadeIn">Duis in imperdiet metus. Donec at enim vulputate
                                diam suscipit bibendum cursus eu neque.</h4>

                            <div class="services-header animated fadeIn">
                                <div class=".container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="service">
                                                <div class="icon"><img src="{{url('/media/icons/solar.svg')}}" alt=""
                                                                       class="ui fluid image"></div>
                                                <div class="text">Solar EPC <br/> Utility-Scale &amp; Rooftop</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="service">
                                                <div class="icon"><img src="{{url('/media/icons/tnd.svg')}}" alt=""
                                                                       class="ui fluid image">
                                                </div>
                                                <div class="text">Transmission &amp; Distribution Systems</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="service">
                                                <div class="icon"><img src="{{url('/media/icons/ohe.svg')}}" alt=""
                                                                       class="ui fluid image">
                                                </div>
                                                <div class="text">Railway Overhead Electrification</div>
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

        <section class="bg-feature">
            <div class="background-image rellax">
                <img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">
            </div>

            <div class="container">
                <div class="content-box">
                    <div class="h-box"></div>
                    <h3>
                        Vivamus vitae mauris accumsan, Turnkey blandit massa in, gravida orci.
                    </h3>
                    {{--<a href="/" class="text-btn">Watch Video</a>--}}
                </div>
            </div>
        </section>

        {{--<section id="services">--}}
        {{--<div class="container text-block">--}}
        {{--<div class="row">--}}
        {{--<div class="col-5">--}}
        {{--<h2>We Design Solutions</h2>--}}
        {{--<h4>Ut sit amet pharetra quam, ut feugiat velit.--}}
        {{--Aenean sapien ante, vehicula vel ex eu, rutrum--}}
        {{--posuere lectus. Lorem ipsum dolor sit amet,--}}
        {{--consectetur adipiscing elit.</h4>--}}
        {{--</div>--}}
        {{--<div class="col-1"></div>--}}
        {{--<div class="col-6">--}}
        {{--<div class="service-elem">--}}
        {{--<div class="row">--}}
        {{--<div class="col-2">--}}
        {{--<div class="elem-icon"></div>--}}
        {{--</div>--}}
        {{--<div class="col-10">--}}
        {{--<div class="elem-text">--}}
        {{--<h4 class="service-head">Solar</h4>--}}
        {{--<div class="service-desc">Ut sit amet pharetra quam, ut feugiat velit. Aenean--}}
        {{--sapien ante, vehicula vel ex eu, rutrum posuere lectus. Lorem ipsum dolor--}}
        {{--sit amet, consectetur adipiscing elit.--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<div class="service-elem">--}}
        {{--<div class="row">--}}
        {{--<div class="col-2">--}}
        {{--<div class="elem-icon"></div>--}}
        {{--</div>--}}
        {{--<div class="col-10">--}}
        {{--<div class="elem-text">--}}
        {{--<h4 class="service-head">Railway Overhead Electrification</h4>--}}
        {{--<div class="service-desc">Ut sit amet pharetra quam, ut feugiat velit. Aenean--}}
        {{--sapien ante, vehicula vel ex eu, rutrum posuere lectus. Lorem ipsum dolor--}}
        {{--sit amet, consectetur adipiscing elit.--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<div class="service-elem">--}}
        {{--<div class="row">--}}
        {{--<div class="col-2">--}}
        {{--<div class="elem-icon"></div>--}}
        {{--</div>--}}
        {{--<div class="col-10">--}}
        {{--<div class="elem-text">--}}
        {{--<h4 class="service-head">Transmission & Distribution</h4>--}}
        {{--<div class="service-desc">Ut sit amet pharetra quam, ut feugiat velit. Aenean--}}
        {{--sapien ante, vehicula vel ex eu, rutrum posuere lectus. Lorem ipsum dolor--}}
        {{--sit amet, consectetur adipiscing elit.--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--Carousel--}}
        {{--<div class="feature-img">--}}
        {{--<img class="img-fluid" src="{{url('/media/images/skoda_feat@2x.jpg')}}" alt="">--}}
        {{--</div>--}}
        {{--</section>--}}

        <section id="philosophy" class="rellax" data-rellax-speed="4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="metric-boxes">
                            <div class="row">
                                <div class="metric-container col-6">
                                    <div class="metric-box box-1">
                                        <div class="number">275+ <span class="units">MW</span></div>
                                        <div class="title">Projects commissioned successfully</div>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="metric-container col-6">
                                    <div class="metric-box box-2">
                                        <div class="number">150+ <span class="units">MW</span></div>
                                        <div class="title">Projects currently in pipeline</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-desc col-sm-12 col-md-12 col-lg-6">
                        <h2>We Design Solutions</h2>
                        <h4>Ut sit amet pharetra quam, ut feugiat velit.
                            Aenean sapien ante, vehicula vel ex eu, rutrum
                            posuere lectus. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.</h4>
                        <a href="/" class="text-btn-sm">Learn about our Services></a>
                    </div>
                </div>


            </div>
        </section>
        {{--usp--}}
        @include('partials.usp')

        <section id="next-gen">
            <div class="iln-next-gen">
                <div class="icon"><img src="{{url('/media/illustrations/next_gen_iln.png')}}" alt=""
                                       class="img-fluid"></div>
            </div>
            <h2>Building the next generation of power infrastructure.</h2>

            <a href="/" class="text-btn-sm">Learn about our Company ></a>

        </section>


    </div>

@endsection