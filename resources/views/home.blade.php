@extends('layout')

@section('title')
    Saffrongrid | Home
@endsection

@section('content')
    <div id="home-page">

        <section id="intro">
            <div class="container">
                <div class="intro-text">
                    <h2>In a fermentum odio, hendrerit semper purus.</h2>
                    <h4>Duis in imperdiet metus. Donec at enim vulputate
                        diam suscipit bibendum cursus eu neque.</h4>
                    <a href="#" class="std-btn">GET IN TOUCH</a>
                </div>
            </div>
        </section>

        <section id="bg-feature">
            <div class="container">
                <div class="content-box">
                    <div class="h-box"></div>
                    <h3>
                        Vivamus vitae mauris accumsan, Turnkey blandit massa in, gravida orci.
                    </h3>
                    <a href="/" class="text-btn">Watch Video</a>
                </div>

            </div>

        </section>

        <section id="services">
            <div class="container text-block">
                <div class="row">
                    <div class="col-5">
                        <h2>We Design Solutions</h2>
                        <h4>Ut sit amet pharetra quam, ut feugiat velit.
                            Aenean sapien ante, vehicula vel ex eu, rutrum
                            posuere lectus. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.</h4>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6">
                        <div class="service-elem">
                            <div class="row">
                                <div class="col-2">
                                    <div class="elem-icon"></div>
                                </div>
                                <div class="col-10">
                                    <div class="elem-text">
                                        <h4 class="service-head">Solar</h4>
                                        <div class="service-desc">Ut sit amet pharetra quam, ut feugiat velit. Aenean
                                            sapien ante, vehicula vel ex eu, rutrum posuere lectus. Lorem ipsum dolor
                                            sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service-elem">
                            <div class="row">
                                <div class="col-2">
                                    <div class="elem-icon"></div>
                                </div>
                                <div class="col-10">
                                    <div class="elem-text">
                                        <h4 class="service-head">Railway Overhead Electrification</h4>
                                        <div class="service-desc">Ut sit amet pharetra quam, ut feugiat velit. Aenean
                                            sapien ante, vehicula vel ex eu, rutrum posuere lectus. Lorem ipsum dolor
                                            sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service-elem">
                            <div class="row">
                                <div class="col-2">
                                    <div class="elem-icon"></div>
                                </div>
                                <div class="col-10">
                                    <div class="elem-text">
                                        <h4 class="service-head">Transmission & Distribution</h4>
                                        <div class="service-desc">Ut sit amet pharetra quam, ut feugiat velit. Aenean
                                            sapien ante, vehicula vel ex eu, rutrum posuere lectus. Lorem ipsum dolor
                                            sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Carousel--}}
            <div class="feature-img">
                <img class="img-fluid" src="{{url('/media/images/skoda_feat@2x.jpg')}}" alt="">
            </div>
        </section>

       {{--usp--}}
        @include('partials.usp')

        <section id="next-gen">
            <div class="iln-next-gen"></div>
            <h2>Building the next generation of power infrastructure.</h2>

            <a href="/" class="text-btn-sm">Learn about our Company ></a>

        </section>



    </div>

@endsection