<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Sgrid | Solar EPC</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<h1>Sgrid</h1>

{{--Navigation--}}
<nav>
    {{--logo--}}

    {{--nab-list--}}
    Projects
    Company
    Clients
    Contact Us
</nav>

{{--Header--}}
<header>
    {{--logo--}}
    {{--title-statement--}}
    <h2 id="title-statement">
        Professional, in every <span class="highlight">sense</span>.
    </h2>
    {{--about-us--}}
    <p class="body-1 about-us">
        A portfolio company of Pennar Group serving as the EPC division. With more than 5 years of experience in design
        and development of Solar plants, we hold a strong portfolio in
    </p>
    {{--services--}}
    {{--header-img--}}
</header>
{{--Projects--}}
<div id="projects">
    <div class="project">
        <div class="head-bar"></div>
        <div class="project-img"></div>
        <div class="project-content">
            <h5 class="date">March 2017</h5>
            <h5 class="category">SOLAR: UTILITY-SCALE</h5>
            <h4 class="title">New Era Ventures Pvt. Ltd.</h4>
            <div class="location">Telangana</div>
            <div class="metric">
                <h5 class="heading">CAPACITY</h5>
                <div class="value"><h3 class="number">28</h3>
                    <p class="units body-1">MW</p></div>
            </div>
            <div class="photo-link"></div>
        </div>
    </div>

    <div class="project">
        <div class="head-bar"></div>
        <div class="project-img"></div>
        <div class="project-content">
            <h5 class="date">January 2018</h5>
            <h5 class="category">SOLAR: UTILITY-SCALE</h5>
            <h4 class="title">Matrix Green Energy Pvt. Ltd.</h4>
            <div class="location">Karnataka</div>
            <div class="metric">
                <h5 class="heading">CAPACITY</h5>
                <div class="value"><h3 class="number">18.5</h3>
                    <p class="units body-1">MW</p></div>
            </div>
            <div class="photo-link"></div>
        </div>
    </div>

    <div class="project">
        <div class="head-bar"></div>
        <div class="project-img"></div>
        <div class="project-content">
            <h5 class="date">September 2019</h5>
            <h5 class="category">SOLAR: ROOFTOP</h5>
            <h4 class="title">Fourth Partner Energy Pvt. Ltd.</h4>
            <div class="location">Aurangabad</div>
            <div class="metric">
                <h5 class="heading">CAPACITY</h5>
                <div class="value"><h3 class="number">1.15</h3>
                    <p class="units body-1">MW</p></div>
            </div>
            <div class="photo-link"></div>
        </div>
    </div>

    <div class="project">
        <div class="head-bar"></div>
        <div class="project-img"></div>
        <div class="project-content">
            <h5 class="date">March 2018</h5>
            <h5 class="category">T&D - SWITCHYARD</h5>
            <h4 class="title">Sunsure Energy Pvt. Ltd.</h4>
            <div class="location">Karnataka</div>
            <div class="metric">
                <h5 class="heading">CAPACITY</h5>
                <div class="value"><h3 class="number">66</h3>
                    <p class="units body-1">kV</p></div>
            </div>
            <div class="photo-link"></div>
        </div>
    </div>




</div>


{{--Company--}}
<div id="company">
    <div class="left-section">
        <h3>We provide economically viable, technically superior and optimized solutions collaborating with leading
            solar
            manufacturers.</h3>
        <p class="body-1">
            As a young, fast-growing and well funded, financially supported EPC company specializing in Solar, we take
            up turnkey projects of your requried scale. We are quickly growing into many more sectors and maintain a pan
            India presence.
        </p>
    </div>
    <div class="right-section">
        <div class="metric-1">
            <div class="value"><span class="number">200+</span> <span class="units">MW</span></div>
            <div class="metric-title">Projects Commissioned Successfully</div>
        </div>
        <div class="metric-2">
            <div class="value"><span class="number">150+</span> <span class="units">MW</span></div>
            <div class="metric-title">Projects in Pipeline</div>
        </div>
    </div>

</div>

{{--Clients--}}

{{--Contact Us--}}
<div id="cta">
    <h3>Do you have any queries or want to get in touch regarding a project?</h3>
    <p class="body-2">Please fill the below form and we will get back
        to you as soon as we can</p>
    <form class="ui form">
        <div class="field">
            <label>Name</label>
            <input type="text" name="full-name" placeholder="Full Name">
        </div>
        <div class="field">
            <label>E-mail</label>
            <input type="email" name="email" placeholder="E-mail">
        </div>
        <div class="filed">
            <label>Subject</label>
            <textarea  rows="2"></textarea>
        </div>


        <div class="field">
            <label>Message</label>
            <textarea></textarea>
        </div>

        <button class="ui button" type="submit">Submit</button>
    </form>
</div>

{{--Footer--}}
<footer>

</footer>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>
