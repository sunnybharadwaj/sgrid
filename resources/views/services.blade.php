@extends('layout')

@section('title')
    Saffrongrid | Services
@endsection

@section('content')
    <div id="services-page">

        <section id="page-header" class="text-center">
            <div class="page-iln">
                <img src="{{url('/media/illustrations/services_iln.png')}}" alt="" class="img-fluid">
            </div>
            <h2>Complex problems, Smart Solutions.</h2>
        </section>

        {{--<section id="page-img" class="text-center">--}}
        {{--<img src="/media/images/about_header.jpg" class="img-fluid" alt="">--}}
        {{--</section>--}}

        <div id="feat-img-center" class="rellax">
            <div class="feature-img">
                <div class="image-frame">
                    <div class="image-container rellax">
                        <img src="{{url('/media/images/about_midsection.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>


        <div id="key-points">
            Highest Engineering Standards with experienced in-house
            design team

            Continuous Innovation in Floating & Battery Energy Storage
            system

            Quality and certified products

            Partnership with Tier 1 equipment suppliers

            Timely project completion within the estimated budget

            Quality Execution plans with Safety Management
        </div>

        {{--Philosophy--}}
        {{--<section id="philosophy" class>--}}
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
                    {{--<div class="col-sm-12 col-md-12 col-lg-6">--}}
                        {{--<div class="text-content">--}}
                            {{--<h2>Our Philosophy</h2>--}}
                            {{--<p>The energy sector is one of the foremost indicators of a country's economic growth. India--}}
                                {{--taps into its energy from a gamut of sources, including gas, water, oil, coal besides--}}
                                {{--solar power. And the demand for electricity in the country is more imminent than ever--}}
                                {{--before.</p>--}}
                            {{--<p>This is enough proof for us to showcase the importance that renewable energy holds, with--}}
                                {{--regard to our country's future. This also welcomes an opportunity to explore several--}}
                                {{--projects in the energy sector, which the Government and private sectors are unleashing--}}
                                {{--to good potential. Our services are in absolute coherence with the aims of the country--}}
                                {{--and the globe and the hope for a sustainable future.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</section>--}}

        {{--Solar--}}
        <section class="service-segment" id="solar">
            <div class="container">
                <div class="icon">
                    <img src="{{url('/media/icons/solar.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="text-content">
                    <h2>Solar Power</h2>
                    <p>With India's vast solar energy potential (of about 5,000 trillion kWh per year incident on its
                        land), there can be no better time than now on efficiently harnessing its power for our energy
                        needs. Besides its ability to generate power on a distributed basis, solar could indeed change
                        the future course of the country. It also happens to be the most secure of all our energy
                        sources besides being easily available.</p>
                </div>

                <div class="pointers-list">
                    <div class="row">
                        <div class="pointer col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-1 bullet"></div>
                                <div class="col-11">
                                    <div class="pointer-text"> We served <span class="font-weight bold">Airport Authority of India (AAI)</span> in setting up a 1000 KWp solar power plant for TIRUPATI Airport
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1 bullet"></div>
                                <div class="col-11">
                                    <div class="pointer-text">SGrid bid on behalf of PEBS PENNAR in collaboration with Raychem RPG Group
                                        in NLC Tender for setting up a project of 20 MW.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1 bullet"></div>
                                <div class="col-11">
                                    <div class="pointer-text">SGrid was awarded for setting up Solar Power Plants at all the Jawahar Navodaya Vidyalaya schools of Andhra Pradesh with which SGrid reached to Nine (09) Districts
                                        of Andhra Pradesh to remove Carbon Footprints. Cumulative Capacity of 1.0 MWp was installed here.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <section class="bg-feature service-list-img">
                <div class="background-image rellax">
                    <img class="img-fluid" src="{{url('/media/images/services_solar.jpg')}}" alt="">
                </div>
            </section>
            <div class="feature-section">
                <div class="container">
                    <div class="row">
                        <div class="product col-sm-12 col-md-6">
                            <h3>Rooftop Installations</h3>
                            <p>Our services with solar rooftop installation include its conceptualisation, seamless
                                execution in addition to the handling of operations and maintenance of the systems. This
                                method of harnessing solar energy is indeed the path that would help the country emerge
                                as a globally competent solar superpower.</p>
                        </div>
                        <div class="product col-sm-12 col-md-6">
                            <h3>Utility-Scale Installations</h3>
                            <p>We enable utility-scale solar installation, thereby creating devices that generate
                                optimum, clean energy with long-term efficiency. This affirms our commitment to
                                addressing the issue of climate change and the development of clean energy.
                            </p>
                        </div>
                    </div>
                    {{--<a href="/" class="text-btn-sm">Learn about benefits using our calculator ></a>--}}
                </div>
            </div>
        </section>
        {{--Railway--}}
        <section class="service-segment" id="railway">
            <div class="container">
                <div class="icon">
                    <img src="{{url('/media/icons/ohe.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="text-content">
                    <h2>Railway Overhead Electrification</h2>
                    <p>Staying true to the aim of complete electrification of Indian Railways by the next decade, we
                        design and provide overhead electrification in the railways sector. As part of our services, our
                        highly qualified team also undertakes traction sub-station and electrical works including
                        building and station yard lighting utilising the latest technologies in the market.
                    </p>
                </div>

                <div class="pointers-list">
                    <div class="row">
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1 bullet"></div>
                                <div class="col-11">
                                    <div class="pointer-text">Recently awarded 83 TKM of Railway OHE projects based out
                                        of two locations in Madhya Pradesh by Western Railways.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1 bullet"></div>
                                <div class="col-11">
                                    <div class="pointer-text">Turnkey(end to end) solutions are offered in this space
                                        and undertake traction substation and general electrical works.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="bg-feature service-list-img">
                <div class="background-image rellax">
                    <img class="img-fluid" src="{{url('/media/images/services_ohe.jpg')}}" alt="">
                </div>
            </section>
        </section>

        {{--TnD--}}
        <section class="service-segment" id="tnd">
            <div class="container">
                <div class="icon">
                    <img src="{{url('/media/icons/tnd.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="text-content">
                    <h2>Transmission & Distribution</h2>
                    <p>We design and engineer an entire project considering all parameters that'll ensure a seamless
                        system integration. We plan, design transmission lines and switchyards and provide distribution
                        services of primary voltage distribution lines for our clients.
                    </p>
                </div>

                <div class="pointers-list">
                    <div class="row">
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1 bullet"></div>
                                <div class="col-11">
                                    <div class="pointer-text">Experience in constructing transmission lines and
                                        switchyards upto 132 Kv
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-1 bullet"></div>
                                <div class="col-11">
                                    <div class="pointer-text">Currently undertaking two projects on 220 Kv switchyards,
                                        commissioned by NTPC Ltd
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-1 bullet"></div>
                                <div class="col-11">
                                    <div class="pointer-text">A dedicated research team working on the understanding of
                                        battery storage system.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="bg-feature service-list-img">
                <div class="background-image rellax">
                    <img class="img-fluid" src="{{url('/media/images/services_tnd.jpg')}}" alt="">
                </div>
            </section>
        </section>
        {{--innovation--}}
        <section id="innovation">
            <div class="container">
                <div class="head-text">
                    <h2>Innovation at Sgrid</h2>
                    <p>We're not only a team that's entrenched in the current day scenario of power infrastructure but
                        have our eyes firmly set on the future of the arena, thanks to our group of hard-working and
                        committed research experts.
                    </p>
                    <div class="illustration rellax">
                        <img class="img-fluid" src="{{url('/media/illustrations/innovation_iln.png')}}" alt="">
                    </div>
                </div>

                <div class="row product-list">
                    <div class="product col-sm-12 col-md-6">
                        <h3>Floating Solar</h3>
                        <p>Based on the concept of a solar array floating on a waterbody, floating solar panels are a
                            unique dimension to renewable energy, with immense potential to create a far-widening impact
                            in the future. Our team is currently working on its feasibility pertaining to our country's
                            waterbodies, understanding its harnessing potential and the scope to ensure a healthier
                            environment.
                        </p>
                    </div>
                    <div class="product col-sm-12 col-md-6">
                        <h3>Energy Storage Systems</h3>
                        <p>An aspect as significant as harnessing solar power is also the ability to store the energy.
                            Power banks are bound to change the way we look at solar energy and its optimum utilisation
                            in the future. And our team is up to its task of staying ahead of the game!
                        </p>
                    </div>
                </div>
                <a href="/" class="text-btn-sm">Get updates from Sgrid ></a>
            </div>
        </section>
        {{--turnkey feature--}}
        <section class="bg-feature cta">
            <div class="background-image rellax">
                <img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">
            </div>

            <div class="container">
                <div class="text-content">
                    <h3>What matters to us is the satisfaction of the people we work with and the tasks we commit to, be
                        it the entire project, end-to-end fulfillment or being a small part in the project
                        execution.</h3>
                    <a href="/" class="std-btn">Work with us</a>
                </div>
            </div>
        </section>

    </div>


@endsection


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