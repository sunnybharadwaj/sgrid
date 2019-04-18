@extends('layout')

@section('title')
    Saffrongrid | Projects
@endsection

@section('content')
    <div id="projects-page">
        <section id="page-header" class="text-center">
            <div class="page-iln">
                <img src="{{url('/media/illustrations/projects_iln.png')}}" alt="" class="img-fluid">
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
                                    <img class="img-fluid" src="{{url('/media/images/project_1.jpg')}}" alt="">
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
                                    <img class="img-fluid" src="{{url('/media/images/project_2.jpg')}}" alt="">
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
                                    <img class="img-fluid" src="{{url('/media/images/project_3.jpg')}}" alt="">
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
                                {{--<a href="/">View Gallery</a>--}}
                                {{--<a href="/">Read Case Study</a>--}}
                            </div>
                        </div>

                        <div class="project-img col-sm-12 col-md-6">
                            <section class="bg-feature">
                                <div class="background-image rellax">
                                    <img class="img-fluid" src="{{url('/media/images/project_4.jpg')}}" alt="">
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section>
            @include('partials.client_list')
        </section>

    </div>

@endsection