@extends('layout')

@section('title')
    Saffrongrid | About
@endsection

@section('content')
    <div id="about-page">

        <section id="page-header" class="text-center animated fadeIn rellax">
            <div class="page-iln animated fadeDown">
                <img src="{{url('/media/illustrations/about_iln.png')}}" alt="" class="img-fluid">
            </div>
            <h2 class="animated fadeIn">A unique set of experts committed to delivering only the best.</h2>
        </section>

        <section class="bg-feature video-block">
            <div class="background-image ">
                {{--<img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">--}}
                <video loop autoplay controls class="embed-responsive-item lg-only">
                    <source src="{{url('/media/videos/no_gold.mp4')}}" type="video/mp4">
                </video>
                <video loop autoplay class="embed-responsive-item mobile-only md-show" >
                    <source src="{{url('/media/videos/no_gold.mp4')}}" type="video/mp4">
                </video>
            </div>
        </section>

        {{--<div class="video-frame embed-responsive">--}}
        {{--<video loop autoplay class="embed-responsive-item">--}}
        {{--<source src="{{url('/media/videos/no_gold.mp4')}}" type="video/mp4">--}}
        {{--</video>--}}
        {{--</div>--}}


        <section id="about-intro">
            <div class="container">
                <div class="text-content">

                    <h4 class="intro-head">At Sgrid, we want to be known for our longevity and the impact that we would make in the lives
                        of the people in the coming 100 years.</h4>
                    <h4>We strive to build futuristic capabilities and enhance our competence to handle complex problems
                        within the power infrastructure arena. We would want to occupy an indispensable position in the
                        market with our body of work and consistently take up projects that empower people and their
                        lives. At the same time, helping India reach it's sustainable goals.
                    </h4>
                </div>

                <section id="page-img" class="text-center rellax lg-only">
                    <div class="img-container">
                        <div class="img-block rellax">
                            <img src="{{url('/media/images/about_header.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </section>
                {{--<div id="feat-img-center" class="rellax">--}}
                {{--<div class="feature-img">--}}
                {{--<div class="image-frame">--}}
                {{--<div class="image-container rellax">--}}
                {{--<img src="{{url('/media/images/about_midsection.jpg')}}" alt="">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

            </div>

        </section>

        <section id="ceo-word">
            <div class="container">

                <div class="content-box">
                    <h2 class="ceo-word-head">Word from the CEO</h2>
                    <h3 class="quote">“Change is the only constant of life. We at Saffrongrid believe about the need to
                        constantly adapt to change. Within the energy sector, we not only stay relevant with the times
                        we live in but also place a foot ahead in the future and stay open to consistent
                        evolution.”</h3>
                    <p class="quote-sign">Mohan Reddy</p>
                    <p class="quote-sign">CEO</p>

                    <div class="lg-only">
                        <div class="metric-box box-1">
                            <div class="number">200+ <span class="units">MW</span></div>
                            <div class="title">Projects commissioned successfully</div>
                        </div>
                        <div class="metric-box box-2">
                            <div class="number">50+ <span class="units">MW</span></div>
                            <div class="title">Projects currently in pipeline</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        {{--Turnkey feature--}}

        @include('partials.usp')

        {{--Team--}}
        <section id="team" class="rellax">
            <div class="container">

                <h2 class="text-center">Our Team</h2>
                <div class="row">
                    <div class="column col-sm-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <img src="{{url('/media/temp/temp_profile.jpg')}}" alt="" class="img-fluid">
                            <div class="teamcard-overlay">
                                <div class="text">
                                    <h4>Mohan Reddy Dasari</h4>
                                    <p>CEO</p>
                                </div>

                                {{--linkedin link--}}
                            </div>

                        </div>
                    </div>

                    <div class="column col-sm-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <img src="{{url('/media/temp/temp_profile.jpg')}}" alt="" class="img-fluid">
                            <div class="teamcard-overlay">
                                <div class="text">
                                    <h4>Prasoon Chaudhary</h4>
                                    <p>Head - BD &amp; Procurement</p>
                                </div>

                                {{--linkedin link--}}
                            </div>

                        </div>
                    </div>
                    <div class="column col-sm-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <img src="{{url('/media/temp/temp_profile.jpg')}}" alt="" class="img-fluid">
                            <div class="teamcard-overlay">
                                <div class="text">
                                    <h4>Krishnaiah Indla</h4>
                                    <p>Head - Railways, T&amp;D</p>
                                </div>

                                {{--linkedin link--}}
                            </div>

                        </div>
                    </div>
                    <div class="column col-sm-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <img src="{{url('/media/temp/temp_profile.jpg')}}" alt="" class="img-fluid">
                            <div class="teamcard-overlay">
                                <div class="text">
                                    <h4>Harish Makke</h4>
                                    <p>Head - New business Initiatives</p>
                                </div>

                                {{--linkedin link--}}
                            </div>

                        </div>
                    </div>
                    <div class="column col-sm-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <img src="{{url('/media/temp/temp_profile.jpg')}}" alt="" class="img-fluid">
                            <div class="teamcard-overlay">
                                <div class="text">
                                    <h4>Narendra Pulivarthi</h4>
                                    <p>Head - Operations</p>
                                </div>

                                {{--linkedin link--}}
                            </div>

                        </div>
                    </div>

                    <div class="careers-cta">
                        <h3>Looking for career opportunities?</h3>
                        <a class="text-btn-sm" href="/careers">Careers ></a>
                    </div>
                </div>

            </div>
        </section>

        <section id="clients">
            <div class="container">
                <div class="header row">
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="header-text">
                            <h2>Our Clients Speak: </h2>
                            <p>Our zeal has always been to empower the people whom we work with and we're keen
                                listeners. Our clients get minimal escalations and intrusions, given we're hands-on with
                                the project and provide seamless support to the clients through its execution. </p>
                        </div>

                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="illustration ">
                            <img class="img-fluid" src="{{url('/media/illustrations/clients_iln.png')}}" alt="">
                        </div>
                    </div>

                    {{--<div class="video-block col-sm-12 col-md-6">--}}

                    {{--</div>--}}


                </div>


                <div class="quote-list">
                    <div class="quote-block">
                        <div class="h-box"></div>
                        <h3 class="quote">“We have found Sgrid to be extremely innovative in terms of its projective
                            execution besides ensuring timeliness in terms of their delivery. Be it the timely
                            procurement of material, the quality of their projects or their adherence to deadlines, we
                            are immensely happy to have collaborated with them.”</h3>
                        <div class="sign">
                            {{--<p>Morbi ut urna</p>--}}
                            <p>Cleantech Solar Energy</p>
                        </div>
                    </div>

                    <div class="quote-block">
                        <div class="h-box"></div>
                        <h3 class="quote">“We truly value our association with Sgrid, which has been extremely proactive
                            and responsive to our needs for the project. Their systematic and organised approach to work
                            has benefited us.”</h3>
                        <div class="sign">
                            {{--<p>Morbi ut urna</p>--}}
                            <p>Matrix Green Energy Private Ltd.</p>
                        </div>
                    </div>

                    <div class="quote-block">
                        <div class="h-box"></div>
                        <h3 class="quote">“The Sgrid team has been meticulous with its eye for detailing in the project.
                            They've been professional in their dealings and have kept us thoroughly informed about the
                            progress of the project and the construction of the transmission line upto 66 kV.”</h3>
                        <div class="sign">
                            {{--<p>Morbi ut urna</p>--}}
                            <p>Sunsure Energy Private Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            @include('partials.client_list')
        </section>


        {{--<section id="team" class="rellax">--}}
        {{--<div class="container">--}}
        {{--<div class="row">--}}
        {{--<h2>Our Team</h2>--}}





        {{--<div class="col-4">--}}
        {{--<div class="spacer"></div>--}}
        {{--<div class="team-member">Prasoon Chaudhary -Head,BD&Procurement</div>--}}
        {{--<div class="team-member">Harish Makke-Head,New business Initiatives</div>--}}

        {{--</div>--}}
        {{--<div class="col-4">--}}

        {{--<div class="team-member">Manoj Cherukuri</div>--}}
        {{--\--}}

        {{--</div>--}}
        {{--<div class="col-4">--}}
        {{--<div class="spacer"></div>--}}
        {{--<div class="team-member">Krishnaiah Indla -Head, Railways & T&D</div>--}}
        {{--<div class="team-member">Narendra Pulivarthi -Head,Operations</div>--}}
        {{--</div>--}}
        {{--<div class="careers-cta">--}}
        {{--<h3>Looking for career opportunities?</h3>--}}
        {{--<a class="text-btn-sm" href="/careers">Careers ></a>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--</div>--}}
        {{--</section>--}}


    </div>
@endsection