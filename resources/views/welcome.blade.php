<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Sgrid | Solar EPC</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

{{--Navigation--}}
<nav>
    {{--logo--}}
    <div class="logo-container">
        <img class="ui fluid image" src="{{url('/media/sgrid_logo.jpg')}}" alt="">
    </div>

    {{--nav-list--}}
    <div class="nav-btn">
        <img src="{{url('/media/icons/menu.svg')}}" alt="" class="ui fluid image">
    </div>
    <div class="nav-list">
        <span><a class="nav-elem" href="#projects">Projects</a></span>
        <span><a class="nav-elem" href="#projects">Company</a></span>
        <span><a class="nav-elem" href="#projects">Clients</a></span>
        <span><a class="nav-elem" href="#projects">Contact Us</a></span>
    </div>
</nav>

{{--Header--}}
<header>
    <div class="ui grid">
        <div class="left-side nine wide column">
            {{--logo--}}
            <div class="logo-container">
                <img class="ui fluid image" src="{{url('/media/sgrid_logo.jpg')}}" alt="">
            </div>

            {{--title-statement--}}
            <h2 id="title-statement">
                Professional, in every <span class="highlight">sense</span>.
            </h2>
            {{--about-us--}}
            <p class="body-1 about-us">
                Sgrid or Saffrongrid is a portfolio company of Pennar Group serving as the EPC division. With more than
                5
                years of experience in
                design
                and development of Solar plants, we hold a strong portfolio in
            </p>
            {{--services--}}
            <div class="services">
                <div class="ui three column grid">
                    <div class="column">
                        <div class="service">
                            <div class="icon"><img src="{{url('/media/icons/solar.svg')}}" alt=""
                                                   class="ui fluid image"></div>
                            <div class="text">Solar EPC <br/> Utility-Scale &amp; Rooftop</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="service">
                            <div class="icon"><img src="{{url('/media/icons/tnd.svg')}}" alt="" class="ui fluid image">
                            </div>
                            <div class="text">Transmission &amp; Distribution Systems</div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="service">
                            <div class="icon"><img src="{{url('/media/icons/ohe.svg')}}" alt="" class="ui fluid image">
                            </div>
                            <div class="text">Railway Overhead Electrification</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-side seven wide column">

            <img class="ui fluid image" src="{{url('/media/sites/hero_img.jpg')}}" alt="">
        </div>
    </div>


</header>
{{--Projects--}}


<div id="projects">
    <div class="ui four column grid">
        <div class="project column">
            <div class="head-bar"></div>
            <div class="project-img">
                <img src="{{url('/media/sites/project_1.jpg')}}" alt="" class="ui fluid image">
            </div>
            <div class="project-content">
                <h4 class="title">New Era Ventures Pvt. Ltd.</h4>
                <h5 class="category">Solar: Utility - Scale</h5>
                <h5 class="date">March 2017 - Telangana</h5>
                <div class="location"></div>
                <div class="metric">
                    <h5 class="heading">CAPACITY</h5>
                    <div class="value"><h3 class="number">28</h3>
                        <span class="units body-1">MW</span></div>
                </div>
                <div class="photo-link"></div>
            </div>
        </div>


        <div class="project column">
            <div class="head-bar"></div>
            <div class="project-img">
                <img src="{{url('/media/sites/project_2.jpg')}}" alt="" class="ui fluid image">
            </div>
            <div class="project-content">
                <h4 class="title">Matrix Green Energy Pvt. Ltd.</h4>
                <h5 class="category">Solar: Utility - Scale</h5>
                <h5 class="date">January 2018 - Karnataka</h5>
                <div class="location"></div>
                <div class="metric">
                    <h5 class="heading">CAPACITY</h5>
                    <div class="value"><h3 class="number">18.5</h3>
                        <span class="units body-1">MW</span></div>
                </div>
                <div class="photo-link"></div>
            </div>
        </div>

        <div class="project column">
            <div class="head-bar"></div>
            <div class="project-img">
                <img src="{{url('/media/sites/project_3.jpg')}}" alt="" class="ui fluid image">
            </div>
            <div class="project-content">
                <h4 class="title">Fourth Partner Energy Pvt. Ltd.</h4>
                <h5 class="category">Solar: Rooftop</h5>
                <h5 class="date">September '19 - Aurangabad</h5>
                <div class="location"></div>
                <div class="metric">
                    <h5 class="heading">CAPACITY</h5>
                    <div class="value"><h3 class="number">1.15</h3>
                        <span class="units body-1">MW</span></div>
                </div>
                <div class="photo-link"></div>
            </div>
        </div>


        <div class="project column">
            <div class="head-bar"></div>
            <div class="project-img">
                <img src="{{url('/media/sites/project_4.jpg')}}" alt="" class="ui fluid image">
            </div>
            <div class="project-content">
                <h4 class="title">Sunsure Energy Pvt. Ltd.</h4>
                <h5 class="category">T&D Switchyard</h5>
                <h5 class="date">March 2018 - Karnataka</h5>
                <div class="location"></div>
                <div class="metric">
                    <h5 class="heading">CAPACITY</h5>
                    <div class="value"><h3 class="number">28</h3>
                        <span class="units body-1">MW</span></div>
                </div>
                <div class="photo-link"></div>
            </div>
        </div>
    </div>
</div>


{{--Company--}}
<div id="company">
    <div class="ui two column grid">
        <div class="nine wide column">
            <div class="left-section">
                <h3>We provide economically viable, technically superior and optimized solutions collaborating with
                    leading
                    solar
                    manufacturers.</h3>
                <p class="body-1">
                    As a young, fast-growing and well funded, financially supported EPC company specializing in Solar,
                    we take
                    up turnkey projects of your required scale. We are quickly growing into many more sectors and
                    maintain a pan
                    India presence.
                </p>
            </div>
        </div>
        <div class="seven wide column">
            <div class="right-section">
                <div class="metric">
                    <div class="value"><span class="number">200+</span> <span class="units">MW</span></div>
                    <div class="metric-title">Projects Commissioned Successfully</div>
                </div>
                <div class="metric">
                    <div class="value"><span class="number">150+</span> <span class="units">MW</span></div>
                    <div class="metric-title">Projects in Pipeline</div>
                </div>
            </div>
        </div>
    </div>


</div>

{{--Clients--}}
<div id="clients">
    <h5>OUR CLIENTS</h5>
    <img src="{{url('/media/logos/client_logos.png')}}" alt="" class="ui fluid image">
</div>

{{--Contact Us--}}
<div id="cta">
    <div class="text">
        <h3>Do you have any queries or want to get in touch regarding a project?</h3>
        <p class="body-2">Please fill in your details and we will get back
            to you as soon as we can.</p>
    </div>

    <form class="ui form">
        <div class="field">
            <label>Name</label>
            <input type="text" name="full-name">
        </div>
        <div class="field">
            <label>E-mail</label>
            <input type="email" name="email">
        </div>
        <div class="field">
            <label>Subject</label>
            <textarea rows="1"></textarea>
        </div>


        <div class="field">
            <label>Message</label>
            <textarea rows="3"></textarea>
        </div>

        <div class="btn">
            <button class="ui button" type="submit">Submit</button>
        </div>


    </form>
</div>

{{--Footer--}}
<footer>
    <p>Copyright &copy; 2018 Saffrongrid Limited</p>
</footer>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>
