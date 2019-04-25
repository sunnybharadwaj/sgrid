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

        <section class="bg-feature video-block">
            <div class="background-image ">
                {{--<img class="img-fluid" src="{{url('/media/images/home_feature.jpg')}}" alt="">--}}
                <video loop autoplay controls class="embed-responsive-item">
                    <source src="{{url('/media/videos/tnd.mp4')}}" type="video/mp4">
                </video>
            </div>
        </section>

        {{--Projects--}}
        <section id="carousel">
            <div class="container text-center">
                {{--Carousel--}}

                <div class="custom-carousel siema">

                    <div class="carousel-block">
                        <img src="{{url('/media/images/projects/feature/2.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-block">
                        <img src="{{url('/media/images/projects/feature/3.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-block">
                        <img src="{{url('/media/images/projects/feature/4.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-block">
                        <img src="{{url('/media/images/projects/feature/5.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-block">
                        <img src="{{url('/media/images/projects/feature/6.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-block">
                        <img src="{{url('/media/images/projects/feature/1.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <a href="/gallery" class="text-btn-sm center-btn">View Gallery</a>
            </div>
        </section>


        <section id="projects-list">
            <div class="container">
                <h3>Solar Projects</h3>

                <div class="row heading-row">
                    <div class="col-sm-12 col-md-12 col-lg-5">

                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        Location
                    </div>

                    <div class="col-sm-3 col-md-3 col-lg-2">Capacity</div>
                    <div class="col-sm-3 col-md-3 col-lg-2">Date</div>
                </div>


                <div class="project-element">
                    <div class="project-content row">
                        <div class="col-md-12 col-lg-5">
                            <div class="project-name">
                                <p>New Ero Enviro Ventures Pvt. Ltd.</p>
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="project-row location-name">Peddalingapur</div>
                            <div class="project-row location-name">Kowdipally</div>
                            <div class="project-row location-name">Manakondur</div>


                        </div>

                        <div class="col-md-3 col-lg-2">
                            <div class="project-row project-capacity">12 MW</div>
                            <div class="project-row project-capacity">10 MW</div>
                            <div class="project-row project-capacity">8 MW</div>


                        </div>
                        <div class="col-md-3 col-lg-2">
                            <div class="project-row project-date">March 2016</div>
                            <div class="project-row project-date">March 2018</div>
                            <div class="project-row project-date">February 2018</div>
                        </div>

                    </div>
                    <div class="h-bar"></div>
                </div>
                <div class="project-element">
                    <div class="project-content row">
                        <div class="col-md-12 col-lg-5">
                            <div class="project-name">
                                <p>New Ero Enviro Ventures Pvt. Ltd.</p>
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="project-row location-name">Peddalingapur</div>
                            <div class="project-row location-name">Kowdipally</div>
                            <div class="project-row location-name">Manakondur</div>


                        </div>

                        <div class="col-md-3 col-lg-2">
                            <div class="project-row project-capacity">12 MW</div>
                            <div class="project-row project-capacity">10 MW</div>
                            <div class="project-row project-capacity">8 MW</div>


                        </div>
                        <div class="col-md-3 col-lg-2">
                            <div class="project-row project-date">March 2016</div>
                            <div class="project-row project-date">March 2018</div>
                            <div class="project-row project-date">February 2018</div>
                        </div>

                    </div>
                    <div class="h-bar"></div>
                </div>





            </div>

            {{--@include('partials.client_list')--}}
        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/siema@1.5.1/dist/siema.min.js"></script>
    <script>

        var mySiema = new Siema({
            duration:700,
            loop: true,
            draggable: true,
            easing: 'ease-out'
        });

        setInterval(() => mySiema.next(), 2000);
    </script>
@endsection