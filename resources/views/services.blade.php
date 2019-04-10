@extends('layout')

@section('title')
    Saffrongrid | Services
@endsection

@section('content')
    <div id="services-page">

        <section id="page-header" class="text-center">
            <div class="page-iln"></div>
            <h2>We Design.</h2>
        </section>

        <section id="page-img" class="text-center">
            <img src="/media/images/about_header.jpg" class="img-fluid" alt="">
        </section>

        {{--Philosophy--}}
        <section id="philosophy" class>
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
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="text-content">
                            <h2>Our Philosophy</h2>
                            <p>Starting a company is lonely, and founders have to make difficult decisions every day
                                with
                                imperfect information. In our experience, the best safety net is the advice and
                                experience of
                                fellow entrepreneurs.</p>
                            <p>Whenever we get members of our community in a room, magic happens. That’s why our
                                Knowledge
                                Program’s robust events — ranging from cozy dinners to major summits — are designed to
                                get real,
                                vulnerable conversations started. People leave with new ideas and actions they can apply
                                immediately to keep growing and getting better. You won’t find any stick-on name tags
                                here — we
                                hate them.</p>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        {{--Solar--}}
        <section class="service-segment" id="solar">
            <div class="container">
                <div class="icon"></div>
                <div class="text-content">
                    <h2>Solar Power</h2>
                    <p>Cras dignissim pretium risus, quis ullamcorper leo efficitur ut. Cras condimentum, felis ac
                        hendrerit
                        mollis, libero lorem mollis eros, non vehicula quam magna mollis nulla. In pulvinar dictum
                        lectus id
                        venenatis. Morbi ut urna consectetur, laoreet nunc sed, pharetra ligula.</p>
                </div>

                <div class="pointers-list">
                    <div class="row">
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="pointer">
                                <div class="row">
                                    <div class="col-1"><span class="bullet">-</span></div>
                                    <div class="col-11">
                                        <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                            Aliquam
                                            fermentum nulla nibh, at blandit purus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-section">
                <div class="container">
                    <div class="row">
                        <div class="product col-sm-12 col-md-6">
                            <h3>Rooftop Installations</h3>
                            <p>Vestibulum congue libero eget neque luctus, posuere elementum urna molestie. Cras sed
                                lacinia est, quis vehicula urna. Ut nec sapien eu mi ullamcorper sagittis et et tortor.
                                Sed ac quam a sapien consectetur suscipit. Ut ut mauris ultricies, facilisis magna et,
                                tincidunt quam. Curabitur quis ipsum sed arcu congue condimentum.</p>
                        </div>
                        <div class="product col-sm-12 col-md-6">
                            <h3>Utility-Scale Installations</h3>
                            <p>Vestibulum congue libero eget neque luctus, posuere elementum urna molestie. Cras sed
                                lacinia est, quis vehicula urna. Ut nec sapien eu mi ullamcorper sagittis et et tortor.
                                Sed ac quam a sapien consectetur suscipit. Ut ut mauris ultricies, facilisis magna et,
                                tincidunt quam. Curabitur quis ipsum sed arcu congue condimentum.</p>
                        </div>
                    </div>
                    <a href="/" class="text-btn-sm">Learn about benefits using our calculator ></a>
                </div>
            </div>
        </section>
        {{--Railway--}}
        <section class="service-segment" id="railway">
            <div class="container">
                <div class="icon"></div>
                <div class="text-content">
                    <h2>Railway Overhead Electrification</h2>
                    <p>Cras dignissim pretium risus, quis ullamcorper leo efficitur ut. Cras condimentum, felis ac
                        hendrerit
                        mollis, libero lorem mollis eros, non vehicula quam magna mollis nulla. In pulvinar dictum
                        lectus id
                        venenatis. Morbi ut urna consectetur, laoreet nunc sed, pharetra ligula.</p>
                </div>

                <div class="pointers-list">
                    <div class="row">
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="pointer">
                                <div class="row">
                                    <div class="col-1"><span class="bullet">-</span></div>
                                    <div class="col-11">
                                        <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                            Aliquam
                                            fermentum nulla nibh, at blandit purus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-section"></div>
        </section>

        {{--TnD--}}
        <section class="service-segment" id="tnd">
            <div class="container">
                <div class="icon"></div>
                <div class="text-content">
                    <h2>Transmission & Distribution</h2>
                    <p>Cras dignissim pretium risus, quis ullamcorper leo efficitur ut. Cras condimentum, felis ac
                        hendrerit
                        mollis, libero lorem mollis eros, non vehicula quam magna mollis nulla. In pulvinar dictum
                        lectus id
                        venenatis. Morbi ut urna consectetur, laoreet nunc sed, pharetra ligula.</p>
                </div>

                <div class="pointers-list">
                    <div class="row">
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pointer col-sm-12 col-md-6">

                            <div class="row">
                                <div class="col-1"><span class="bullet">-</span></div>
                                <div class="col-11">
                                    <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                        Aliquam
                                        fermentum nulla nibh, at blandit purus.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="pointer">
                                <div class="row">
                                    <div class="col-1"><span class="bullet">-</span></div>
                                    <div class="col-11">
                                        <div class="pointer-text">Phasellus porttitor neque a felis lobortis dignissim.
                                            Aliquam
                                            fermentum nulla nibh, at blandit purus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-section">

            </div>
        </section>
        {{--innovation--}}
        <section id="innovation">
            <div class="container">
                <div class="head-text">
                    <h2>Innovation at Sgrid</h2>
                    <p>Starting a company is lonely, and founders have to make difficult decisions every day with imperfect
                        information. In our experience, the best safety net is the advice and experience of fellow
                        entrepreneurs.</p>
                </div>

                <div class="row">
                    <div class="product col-sm-12 col-md-6">
                        <h3>Floating Solar</h3>
                        <p>Whenever we get members of our community in a room, magic happens. That’s why our Knowledge
                            Program’s robust events — ranging from cozy dinners to major summits — are designed to get
                            real, vulnerable.</p>
                    </div>
                    <div class="product col-sm-12 col-md-6">
                        <h3>Power Banks</h3>
                        <p>Whenever we get members of our community in a room, magic happens. That’s why our Knowledge
                            Program’s robust events — ranging from cozy dinners to major summits — are designed to get
                            real, vulnerable.</p>
                    </div>
                </div>
                <a href="/" class="text-btn-sm">Get updates from Sgrid ></a>
            </div>
        </section>
        {{--turnkey feature--}}
        <div class="bg-feature">
            <div class="container">
                <div class="content-box">
                    <div class="h-box"></div>
                    <h3>
                        Vivamus vitae mauris accumsan, Turnkey blandit massa in, gravida orci.
                    </h3>
                </div>
            </div>
        </div>

    </div>
@endsection