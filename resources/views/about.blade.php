@extends('layout')

@section('title')
    Saffrongrid | About
@endsection

@section('content')
    <div id="about-page">

        <section id="page-header" class="text-center animated fadeIn rellax">
            <div class="page-iln">
                <img src="{{url('/media/illustrations/about_iln.png')}}" alt="" class="img-fluid">
            </div>
            <h2>A unique set of experts committed to delivering only the best.</h2>
        </section>

        <section class="bg-feature video-block">
            <div class="background-image ">
                {{--<img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">--}}
                <video loop autoplay class="embed-responsive-item">
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
                    <h3>What we stand for:</h3>
                    <h4>At SGrid, we want to be known for our longevity and the impact that we would make in the lives
                        of the people in the coming 100 years.</h4>
                    <h4>We strive to build futuristic capabilities and enhance our competence to handle complex problems
                        within the power infrastructure arena. We would want to occupy an indispensable position in the
                        market with our body of work and consistently take up projects that empower people and their
                        lives. At the same time, helping India reach it's sustainable goals.
                    </h4>
                </div>

                <section id="page-img" class="text-center rellax">
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
                    <h3 class="quote">“Change is the only constant of life. We at Saffrongrid believe about the need to
                        constantly adapt to change. Within the energy sector, we not only stay relevant with the times
                        we live in but also place a foot ahead in the future and stay open to consistent
                        evolution.”</h3>
                    <p class="quote-sign">Mohan Reddy</p>
                    <p class="quote-sign">CEO</p>

                    <div class="metric-box box-1">
                        <div class="number">275+ <span class="units">MW</span></div>
                        <div class="title">Projects commissioned successfully</div>
                    </div>
                    <div class="metric-box box-2">
                        <div class="number">150+ <span class="units">MW</span></div>
                        <div class="title">Projects currently in pipeline</div>
                    </div>
                </div>
            </div>
        </section>

        {{--Turnkey feature--}}

        @include('partials.usp')

        {{--Team--}}
        <section id="team" class="rellax">
            <div class="container">
                <div class="row">
                    <h2>Our Team</h2>

                    <div class="col-4">
                        <div class="spacer"></div>
                        <div class="team-member"></div>
                        <div class="team-member"></div>

                    </div>
                    <div class="col-4">
                        <div class="team-member"></div>
                        <div class="team-member"></div>
                        <div class="team-member"></div>
                    </div>
                    <div class="col-4">
                        <div class="spacer"></div>
                        <div class="team-member"></div>
                        <div class="team-member"></div>
                    </div>
                    <div class="careers-cta">
                        <h3>Looking for career opportunities?</h3>
                        <a class="text-btn-sm" href="/careers">Careers ></a>
                    </div>
                </div>

            </div>
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
                        {{--<div class="team-member">Mohan Reddy Dasari -CEO</div>--}}
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

        @include('partials.partner')

    </div>
@endsection