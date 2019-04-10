@extends('layout')

@section('title')
    Saffrongrid | About
@endsection

@section('content')
    <div id="about-page">

        <section id="page-header" class="text-center">
            <div class="page-iln"></div>
            <h2>Cras diginassium pretium risius.</h2>
        </section>

        <section id="page-img" class="text-center">
            <img src="/media/images/about_header.jpg" class="img-fluid" alt="">
        </section>


        <section id="about-intro">
            <div class="container">
                <div class="text-content">
                    <h3>Nam justo elit, lobortis sed elementum eu, ultricies sed libero. </h3>
                    <h4>Cras dignissim pretium risus, quis ullamcorper leo efficitur ut. Cras condimentum, felis ac
                        hendrerit
                        mollis, libero lorem mollis eros, non vehicula quam magna mollis nulla. In pulvinar dictum
                        lectus id
                        venenatis. Morbi ut urna consectetur, laoreet nunc sed, pharetra ligula.</h4>
                </div>
                <div id="feat-img-center">
                    <div class="feature-img">

                    </div>
                </div>
            </div>

        </section>

        <section id="ceo-word">
            <div class="container">
                <div class="content-box">
                    <h3 class="quote">“Duis ut venenatis arcu, quis ullamcorper lorem. Ut sit amet pharetra quam, ut
                        feugiat
                        velit. Aenean sapien ante, vehicula vel ex eu”</h3>
                    <p class="quote-sign">Morbi ut urna</p>
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
        <section id="team">
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

        @include('partials.partner')
    </div>
@endsection