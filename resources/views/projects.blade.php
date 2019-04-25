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


                    <div class="project-list">
                        @foreach ($solarProjects as $project)
                        <div class="project-item">
                            <div class="project-wrapper">
                                <div class="project-details row">
                                    <div class="col-7">{{$project->client}}</div>
                                    <div class="attr col-2">{{$project->capacity}}</div>
                                    <div class="attr col-3">{{$project->location}}</div>
                                </div>
                                <div class="project-description">
                                    <p>{{$project->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

            </div>

            <div class="container">
                <h3>Railway OHE Projects</h3>

                    <div class="project-list">
                        @foreach ($oheProjects as $project)
                        <div class="project-item">
                            <div class="project-wrapper">
                                <div class="project-details row">
                                    <div class="col-7">{{$project->client}}</div>
                                    <div class="attr col-2">{{$project->capacity}}</div>
                                    <div class="attr col-3">{{$project->location}}</div>
                                </div>
                                <div class="project-description">
                                    <p>{{$project->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

            </div>

            {{--@include('partials.client_list')--}}
        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/siema@1.5.1/dist/siema.min.js"></script>
    <script>

        var mySiema = new Siema({
            duration: 700,
            loop: true,
            draggable: true,
            easing: 'ease-out'
        });

        setInterval(() => mySiema.next(), 2000);
    </script>
@endsection