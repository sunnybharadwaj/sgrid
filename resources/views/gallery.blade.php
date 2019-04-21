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
                    <img src="/media/images/about_header.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/cta_bg.png" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/home_feat1.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/about_midsection.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/project_1.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/services_solar.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/cta_bg.png" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/home_feat1.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/cta_bg.png" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/home_feat1.jpg" class="img-fluid" alt="">
                </div>
                <div class="item">
                    <img src="/media/images/about_midsection.jpg" class="img-fluid" alt="">
                </div>



            </div>
        </div>

    </div>
@endsection