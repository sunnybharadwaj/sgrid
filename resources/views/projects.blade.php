@extends('layout')

@section('title')
    Saffrongrid | Projects
@endsection

@section('content')
    <div id="projects-page">
        <section id="page-header" class="text-center">
            <div class="page-iln">
                <img src="{{url('/media/illustrations/about_iln.png')}}" alt="" class="img-fluid">
            </div>
            <h2>Our clients know we’re up for a challenge.</h2>
        </section>

        {{--Projects--}}
        <section id="projects">
            <div class="container">
                <div class="row">
                    <h2>Projects</h2>
                </div>
                <div class="project-block">
                    <div class="row">
                        <div class="project-text col-sm-12 col-md-6">
                            <div class="project-name">
                                <h3>New Era Ventures Pvt. Ltd.</h3>
                            </div>
                            <div class="details">
                                <span>March 2017</span> <span class="separator">.</span> <span class="location">Telangana - 3 Locations</span>
                            </div>
                            <div class="type">
                                <h4>Type</h4>
                                <p>Solar: Utility-Scale</p>
                            </div>

                            <div class="capacity">
                                <h4>Capacity</h4>
                                <p>28 <span class="units">MW</span></p>
                            </div>

                            <div class="buttons">
                                <a href="/">View Gallery</a>
                                {{--<a href="/">Read Case Study</a>--}}
                            </div>
                        </div>

                        <div class="project-img col-sm-12 col-md-6">
                            <section class="bg-feature">
                                <div class="background-image rellax">
                                    <img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">
                                </div>
                            </section>
                        </div>
                    </div>


                </div>
                <div class="project-block">
                    <div class="row">
                        <div class="project-text col-sm-12 col-md-6">
                            <div class="project-name">
                                <h3>Matrix Green Energy Pvt. Ltd.</h3>
                            </div>
                            <div class="details">
                                <span>January 2018</span> <span class="separator">.</span> <span class="location">Karnataka</span>
                            </div>
                            <div class="type">
                                <h4>Type</h4>
                                <p>Solar: Utility-Scale</p>
                            </div>

                            <div class="capacity">
                                <h4>Capacity</h4>
                                <p>18.5 <span class="units">MW</span></p>
                            </div>

                            <div class="buttons">
                                <a href="/">View Gallery</a>
                                {{--<a href="/">Read Case Study</a>--}}
                            </div>
                        </div>

                        <div class="project-img col-sm-12 col-md-6">
                            <section class="bg-feature">
                                <div class="background-image rellax">
                                    <img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">
                                </div>
                            </section>
                        </div>
                    </div>


                </div>
                <div class="project-block">
                    <div class="row">
                        <div class="project-text col-sm-12 col-md-6">
                            <div class="project-name">
                                <h3>Fourth Partner Energy Pvt.Ltd</h3>
                            </div>
                            <div class="details">
                                <span>September 2018</span> <span class="separator">.</span> <span class="location">Aurangabad</span>
                            </div>
                            <div class="type">
                                <h4>Type</h4>
                                <p>Solar: Rooftop</p>
                            </div>

                            <div class="capacity">
                                <h4>Capacity</h4>
                                <p>1.15 <span class="units">MW</span></p>
                            </div>

                            <div class="buttons">
                                <a href="/">View Gallery</a>
                                {{--<a href="/">Read Case Study</a>--}}
                            </div>
                        </div>

                        <div class="project-img col-sm-12 col-md-6">
                            <section class="bg-feature">
                                <div class="background-image rellax">
                                    <img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="project-block">
                    <div class="row">
                        <div class="project-text col-sm-12 col-md-6">
                            <div class="project-name">
                                <h3>Sunsure Energy Pvt. Ltd.</h3>
                            </div>
                            <div class="details">
                                <span>March 2018</span> <span class="separator">.</span> <span class="location">Karnataka</span>
                            </div>
                            <div class="type">
                                <h4>Type</h4>
                                <p>T &amp; D Switchyard</p>
                            </div>

                            <div class="capacity">
                                <h4>Capacity</h4>
                                <p>66 <span class="units">kV</span></p>
                            </div>

                            <div class="buttons">
                                <a href="/">View Gallery</a>
                                {{--<a href="/">Read Case Study</a>--}}
                            </div>
                        </div>

                        <div class="project-img col-sm-12 col-md-6">
                            <section class="bg-feature">
                                <div class="background-image rellax">
                                    <img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="clients">
            <div class="container">
                <div class="header row">
                    <div class="col-sm-12 col-md-6">
                        <div class="header-text">
                            <h2>What our Clients say</h2>
                            <p>Our zeal has always been to empower the people whom we work with and we're keen listeners. Our clients get minimal escalations and intrusions, given we're hands-on with the project and provide seamless support to the clients through its execution. </p>
                        </div>

                    </div>

                    <div class="video-block col-sm-12 col-md-6">

                    </div>


                </div>


                <div class="quote-list">
                    <div class="quote-block">
                        <h3 class="quote">“We have found SGrid to be extremely innovative in terms of its projective execution besides ensuring timeliness in terms of their delivery. Be it the timely procurement of material, the quality of their projects or their adherence to deadlines, we are immensely happy to have collaborated with them.”</h3>
                        <div class="sign">
                            {{--<p>Morbi ut urna</p>--}}
                            <p>Cleantech Solar Energy</p>
                        </div>
                    </div>

                    <div class="quote-block">
                        <h3 class="quote">“We truly value our association with SGrid, which has been extremely proactive and responsive to our needs for the project. Their systematic and organised approach to work has benefited us.”</h3>
                        <div class="sign">
                            {{--<p>Morbi ut urna</p>--}}
                            <p>Azure Power India Pvt. Ltd.</p>
                        </div>
                    </div>

                    <div class="quote-block">
                        <h3 class="quote">“The SGrid team has been meticulous with its eye for detailing in the project. They've been professional in their dealings and have kept us thoroughly informed about the progress of the project and the construction of the transmission line upto 66 Kv.”</h3>
                        <div class="sign">
                            {{--<p>Morbi ut urna</p>--}}
                            <p>NTPC (National Thermal Power Corporation) Limited</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="clients-logos">
            <div class="container">
                <div class="text-center">
                    <h2>Our Clients</h2>
                    {{--<h3>Our zeal has always been to empower the people whom we work with and we're keen listeners. Our clients get minimal escalations and intrusions, given we're hands-on with the project and provide seamless support to the clients through its execution.</h3>--}}
                    <img id="non-mob-clients" src="{{url('/media/logos/client_logos.png')}}" alt=""
                         class="ui fluid image">
                </div>
            </div>
        </section>

        @include('partials.partner')

    </div>
@endsection