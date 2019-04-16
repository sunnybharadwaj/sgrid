@extends('layout')

@section('title')
    Saffrongrid | Services
@endsection

@section('content')
    <div id="services-page">
        <div class="container">
            <section id="page-head">
                <h2 class="">Careers at Sgrid</h2>
                <p></p>
                {{--<a href="/" class="std-btn">Apply Now</a>--}}
            </section>
        </div>

        {{--<section class="bg-feature">--}}
            {{--<div class="background-image ">--}}
                {{--<img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">--}}
                {{--<video loop autoplay class="embed-responsive-item">--}}
                    {{--<source src="{{url('/media/videos/gold.mp4')}}" type="video/mp4">--}}
                {{--</video>--}}
            {{--</div>--}}

            {{--<div class="container">--}}
                {{--<div class="content-box">--}}
                    {{--<div class="h-box"></div>--}}
                    {{--<h3>--}}
                        {{--Our integrated, people-centric and systematic approach to handling large scale projects (end to end or part of the project) ensures seamless support to our clients and gives us a firm edge over our competitors.--}}
                    {{--</h3>--}}
                    {{--<a href="/" class="text-btn">Watch Video</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}

        <section id="job-cta">
            <div class="container">
                <div class="intro-text">
                    <h2>Why work with us?</h2>
                    {{--<p>Starting a company is lonely, and founders have to make difficult decisions every day with imperfect--}}
                        {{--information.</p>--}}
                </div>


                <div class="row">
                    <div class="job-feature col-sm-12 col-md-6">
                        <h3>Entrepreneurial Atmosphere</h3>
                        <p>We are a people-driven company where we own the work we take up and function as a collaborative unit. We value the opinions of our employees, clients and are always keen to improvise with time.</p>
                    </div>
                    <div class="job-feature col-sm-12 col-md-6">
                        <h3>Integrity</h3>
                        <p>Integrity is a virtue that we truly value and strongly hold onto. This transcends from a personal to a professional level and we sincerely believe, this reflects in the way we work as a company.</p>
                    </div>
                    <div class="job-feature col-sm-12 col-md-6">
                        <h3>Ambitious</h3>
                        <p>We are constantly driven by the ambition to succeed, not only with the projects we undertake but also in making a difference to the society on several counts. Be prepared to work on a very large scale of projects.</p>
                    </div>
                    <div class="job-feature col-sm-12 col-md-6">
                        <h3>Inclusivity</h3>
                        <p>We are open to hearing suggestions, responses, and opinions that people around us have to say or share. Our targets remain our focus and we consider every input that comes our way in ensuring effective results.</p>
                    </div>
                </div>
                {{--<a href="/" class="std-btn">Apply Now</a>--}}
                {{--<a href="/" class="std-btn">Get updates</a>--}}

                <div class="cta-text text-center">
                    <h4>If you are interested in working with us, please email your resume and supporting documents to </h4>
                    <h3>careers@sgrid.in</h3>
                </div>
            </div>


        </section>


    </div>
@endsection