@extends('layout')

@section('title')
    Saffrongrid | Projects
@endsection

@section('content')
    <div id="projects-page">
        <section id="page-header" class="text-center">
            <div class="page-iln"></div>
            <h2>Morbi ut urna consectetur.</h2>
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
                                <span>March 2016</span> <span class="separator">.</span> <span class="location">Telangana - 3 Locations</span>
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
                        </div>
                    </div>


                </div>
                <div class="project-block">
                    <div class="row">
                        <div class="project-text col-sm-12 col-md-6">
                            <div class="project-name">
                                <h3>New Era Ventures Pvt. Ltd.</h3>
                            </div>
                            <div class="details">
                                <span>March 2016</span> <span class="separator">.</span> <span class="location">Telangana - 3 Locations</span>
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
                        </div>
                    </div>


                </div>
                <div class="project-block">
                    <div class="row">
                        <div class="project-text col-sm-12 col-md-6">
                            <div class="project-name">
                                <h3>New Era Ventures Pvt. Ltd.</h3>
                            </div>
                            <div class="details">
                                <span>March 2016</span> <span class="separator">.</span> <span class="location">Telangana - 3 Locations</span>
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
                            <p>In tincidunt tempus nunc, nec cursus enim ornare ut. Vestibulum aliquet eleifend nisl,
                                eget vulputate ipsum iaculis vel. Etiam scelerisque orci luctus, hendrerit purus in,
                                tempor elit.</p>
                        </div>

                    </div>

                    <div class="video-block col-sm-12 col-md-6">

                    </div>


                </div>


                <div class="quote-list">
                    <div class="quote-block">
                        <h3 class="quote">“Curabitur malesuada turpis tincidunt neque tempor, sit amet tincidunt felis
                            dapibus. Ut in porta quam, id semper nulla. Proin id faucibus nulla.”</h3>
                        <div class="sign">
                            <p>Morbi ut urna</p>
                            <p>CEO, U Corporation</p>
                        </div>
                    </div>

                    <div class="quote-block">
                        <h3 class="quote">“Curabitur malesuada turpis tincidunt neque tempor, sit amet tincidunt felis
                            dapibus. Ut in porta quam, id semper nulla. Proin id faucibus nulla.”</h3>
                        <div class="sign">
                            <p>Morbi ut urna</p>
                            <p>CEO, U Corporation</p>
                        </div>
                    </div>

                    <div class="quote-block">
                        <h3 class="quote">“Curabitur malesuada turpis tincidunt neque tempor, sit amet tincidunt felis
                            dapibus. Ut in porta quam, id semper nulla. Proin id faucibus nulla.”</h3>
                        <div class="sign">
                            <p>Morbi ut urna</p>
                            <p>CEO, U Corporation</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="clients-logos">
            <div class="container">
                <div class="text-center">
                    <h2>Our Clients</h2>
                    <h3>In tincidunt tempus nunc, nec cursus enim ornare ut. Vestibulum aliquet eleifend nisl,
                        eget vulputate ipsum iaculis vel. Etiam scelerisque orci luctus, hendrerit purus in,
                        tempor elit.</h3>
                    <img id="non-mob-clients" src="{{url('/media/logos/client_logos.png')}}" alt=""
                         class="ui fluid image">
                </div>
            </div>

        </section>

        @include('partials.partner')

    </div>
@endsection