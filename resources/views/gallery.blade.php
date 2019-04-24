@extends('layout')

@section('title')
    Saffrongrid | Gallery
@endsection

@section('content')
    <div id="gallery-page">
        <section class="intro">
            <div class="container text-center">
                <h2>Projects Gallery</h2>
            </div>
        </section>



        <div id="img-container">
            <div class="container masonry image-list">
                {{--todo:focus buttons--}}
                {{--<div class="focus-btns">--}}
                    {{--<div class="focus-btn focus-prev">--}}
                        {{--<span class="angle-icon prev-icon">--}}
                            {{--<img src="{{url('/media/icons/icon_next.svg')}}"--}}
                                 {{--alt=""--}}
                                 {{--class="img-fluid">--}}
                        {{--</span>--}}
                    {{--</div>--}}
                    {{--<div class="focus-btn focus-next">--}}
                        {{--<span class="angle-icon ">--}}
                            {{--<img src="{{url('/media/icons/icon_next.svg')}}"--}}
                                    {{--alt=""--}}
                                    {{--class="img-fluid">--}}
                        {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="item">
                    <img src="/media/images/projects/gallery/1.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/2.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/3.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/4.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/5.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/6.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/7.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/8.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/9.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/10.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/11.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/12.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/13.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/14.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/15.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/16.jpeg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/projects/gallery/17.jpg" class="img-fluid" alt="">
                </div>




            </div>
        </div>

    </div>
@endsection