@extends('layout')

@section('title')
    Saffrongrid | Contact Us
@endsection

@section('content')
    <div id="about-page">


        <div id="map">
            <div class="map-container">
                <div class="contact-details text-center">
                    <div class="container">
                        <div class="row">
                            <div class="ct-column col-sm-12 col-md-4">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="ct-column col-sm-12 col-md-4">
                                <span class="email">info@sgrid.in</span> <br/>
                                +91 9876578745
                            </div>
                            <div class="ct-column col-sm-12 col-md-4">
                                DHFLVC Building <br/>
                                Silicon towers <br/>
                                3rd Floor, West Wing <br/>
                                Kondapur, Hyderabad <br/>
                                Telangana IN 500084. <br/>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{--Careers CTA--}}
        @include('partials.partner')
    </div>
@endsection