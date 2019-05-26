<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <link rel="stylesheet" href="{{ asset('preus/assets/bootstrap/css/bootstrap.min.css') }}" type="text/css" >
    <link rel="stylesheet" href="{{ asset('preus/assets/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('preus/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('preus/assets/css/odometer-theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('preus/assets/css/style.css') }}">

    <script src="{{ asset('preus/assets/js/jquery-3.3.1.min.js')}}" defer></script>
	<script src="{{ asset('preus/assets/js/popper.min.js')}}" defer></script>
	<script src="{{ asset('preus/assets/bootstrap/js/bootstrap.min.js')}}" defer></script>
    <script src="{{ asset('preus/assets/js/imagesloaded.pkgd.min.js')}}" defer></script>
	<script src="{{ asset('preus/assets/js/isInViewport.jquery.js')}}" defer></script>
	<script src="{{ asset('preus/assets/js/jquery.magnific-popup.min.js')}}" defer></script>
	<script src="{{ asset('preus/assets/js/scrolla.jquery.min.js')}}" defer></script>
	<script src="{{ asset('preus/assets/js/jquery.validate.min.js')}}" defer></script>
	<script src="{{ asset('preus/assets/js/jquery-validate.bootstrap-tooltip.min.js')}}" defer></script>
	<script src="{{ asset('preus/assets/js/odometer.min.js')}}" defer></script>
	<script src="{{ asset('preus/assets/js/owl.carousel.min.js')}}" defer></script>
    <script src="{{ asset('preus/assets/js/particles.min.js')}}" defer></script>
    <script src="{{ asset('preus/assets/js/custom.js')}}" defer></script>

	<title>Jonathan Berlemont</title>

</head>
<body class="has-loading-screen">

<div class="ts-page-wrapper">
    <!--Brand Navigation
    ====================================================================================================================
    -->
    <div id="brand-navigation">

        <div class="container">

            <div id="brand">
                <button class="navbar-toggler d-block d-xl-none" type="button">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <div style="display: flex!important; align-items: center!important">
                        <p style="color: white !important; margin:0">Jonathan B.</p>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <!--Main Left Navigation
    ====================================================================================================================
    -->
    <div id="main-navigation">
        <nav class="navbar navbar-dark">
            <ul class="navbar-nav">

                <!--NAVIGATION
                ========================================================================================================
                -->

                    <li class="nav-item">
                        <a class="nav-link" href="#works">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#my-skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experiences">Experiences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ts-footer-main">Contact</a>
                    </li>

                </li>
            </ul>
        </nav>
    </div>

               

    <!--Content
    ====================================================================================================================
    -->
    <div class="ts-content">
        <!--HERO HEADER
        ================================================================================================================
        ================================================================================================================
        -->
        <header id="ts-hero" class="ts-height--100vh ts-has-overlay text-white">

            <div class="container">

                <h1 data-animate="ts-reveal">
                    <span class="wrapper">
                        <span>I am</span>
                    </span>
                    <br>
                    <span class="wrapper">
                        <span data-ts-delay=".05s">Jonathan Berlemont</span>
                    </span>
                </h1>

                <h4 class="mb-0" data-animate="ts-fadeInUp" data-ts-delay=".1s">Full Stack Web Developer</h4>

            </div>

            <div class="ts-background" data-bg-parallax="scroll" data-bg-parallax-speed="3">
                <div id="ts-particles" class="ts-background-image ts-parallax-element ts-z-index__1"></div>
                <div class="ts-img-into-bg ts-background-image ts-parallax-element">
                    <img src="/preus/assets/img/bg-office.jpg" alt="">
                </div>
            </div>

        </header>

        <!--MAIN CONTENT
        ================================================================================================================
        ================================================================================================================
        -->
        <main id="ts-content">

            <!--Blockquote
            ============================================================================================================
            -->
            <section id="blockquote" class="ts-block">
                <div class="container">

                    <blockquote class="blockquote">
                        <h2>I am a young full-stack web developer focusing on the back-end side of development, even though I can do both.</h2>
                        <footer class="blockquote-footer">My main tools are PHP and Laravel</footer>
                    </blockquote>

                </div>
            </section>

            <!--Works
            ============================================================================================================
            -->
            <section id="works">
                <div class="container-fluid px-0">

                    <div class="row no-gutters ts-gallery">

                        @foreach (App\Project::latest()->take(6)->get() as $project)
                            <div class="col-md-6 col-lg-4">
                                <a target="_blank" href="{{$project->github}}" class="card ts-gallery__item ts-floated-description" data-animate="ts-fadeInUp">
                                    <div class="ts-gallery__item-description">
                                        <h5>{{$project->title}} <span style="font-size: 15px">(took {{$project->time_taken}} {{str_plural('week', $project->time_taken)}})</span></h5>
                                        <h3>{{$project->most_used_language}}</h3>
                                    </div>
                                    <div class="ts-background ts-img-into-bg">
                                        <img src="/storage/projects/{{$project->image}}" alt="">
                                    </div>
                                </a>
                            </div>
                            <!--end gallery item-->
                        @endforeach

                    </div>
                </div>
            </section>

            <!--Features
            ============================================================================================================
            -->
            <section id="features" class="ts-block text-white text-center text-sm-left">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="ts-feature">
                                <img src="/img/muscle.png" alt="" class="mb-5" style="width: 50px; filter: invert(1)">
                                <h4>Speed & Efficiency</h4>
                                <p>If you manage to pop my interest with your project, I will fully give myself into it and produce quality work in no time!</p>
                            </div>
                        </div>
                        <!--end Feature-->

                        <div class="col-md-4">
                            <div class="ts-feature">
                                <img src="/img/clock.png" alt="" class="mb-5" style="width: 50px; filter: invert(1)">
                                <h4>Reliable & Ponctual</h4>
                                <p>I will always deliver your product on time!</p>
                                <p style="font-style: italic">"A wizard is never late, nor is he early, he arrives precisely when he means to." </p>
                                <p style="text-align: right !important; font-size: 15px">Gandalf The Grey</p>
                            </div>
                        </div>
                        <!--end Feature-->

                        <div class="col-md-4">
                            <div class="ts-feature">
                                <img src="/img/idea.png" alt="" class="mb-5" style="width: 50px; filter: invert(1)">
                                <h4>Creative</h4>
                                <p>I will always find a way to make your dream feature come true and with an interesting and practical design!</p>
                            </div>
                        </div>
                        <!--end Feature-->

                    </div>
                </div>

                <div class="ts-background ts-bg-black">
                    <div class="ts-background-image ts-background-repeat ts-opacity__10 ts-img-into-bg">
                        <img src="/preus/assets/img/bg__pattern--topo-white.png" alt="">
                    </div>
                </div>
            </section>


            <!--Skills
            ============================================================================================================
            -->
            <section id="my-skills" class="ts-block">
                <div class="container">

                    <div class="ts-title">
                        <h2>My Skills</h2>
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-4">
                            <p>
                                Like I said before, I am a full-stack developer but I have a huge preference for back-end, using PHP and Laravel. I can nevertheless produce quality front-end material.
                            </p>
                            <a href="contact__default.html" class="ts-link ts-underline">Contact Me</a>
                        </div>
                        <!--end Paragraph-->

                        <div class="col-md-6">

                            @foreach (App\Skill::orderBy('priority')->take(5)->inRandomOrder()->get() as $skill)
                                <div class="progress" data-progress-width="{{$skill->percentage}}%">
                                    <h5 class="ts-progress-title">{{$skill->name}}</h5>
                                    <figure class="ts-progress-value"></figure>
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            <!--end Skill-->
                            @endforeach

                        </div>
                    </div>
                    <!--end .row-->
                </div>
                <!--end .container-->
            </section>

            <!--Call to action
            ============================================================================================================
            -->
            <section class="py-5 ts-bg-black text-white text-center text-md-left">
                <div class="container py-0 py-sm-0 my-5">
                    <div class="row ts-align__vertical">

                        <div class="col-md-6 mb-3 mb-md-0">
                            <h2>Do You Love What You See?</h2>
                        </div>

                        <div class="col-md-6">
                            <a href="mailto:berlemontjonathan@gmail.com" class="btn btn-outline-light float-md-right">Contact me now</a>
                        </div>

                    </div>
                </div>
            </section>

            <!--Promo numbers
            ============================================================================================================
            -->
            <section class="ts-block ts-background-repeat" data-bg-image="/preus/assets/img/bg__pattern--dot.png">
                <div class="container ts-promo-numbers">
                    <div class="row">

                        <div class="col-sm-6 col-md-3">
                            <div class="ts-promo-number text-center">
                                <figure class="odometer" data-odometer-final="{{App\Skill::where('type', 'language')->count()}}">0</figure>
                                <h5>Known Languages / Frameworks</h5>
                            </div>
                        </div>
                        <!--end Promo number-->

                        <div class="col-sm-6 col-md-3">
                            <div class="ts-promo-number text-center">
                                <figure class="odometer" data-odometer-final="{{App\Skill::where('type', 'technology')->count()}}">0</figure>
                                <h5>Known Web Technologies</h5>
                            </div>
                        </div>
                        <!--end Promo number-->

                        <div class="col-sm-6 col-md-3">
                            <div class="ts-promo-number text-center">
                                <figure class="odometer" data-odometer-final="{{App\Project::all()->count()}}">0</figure>
                                <h5>Projects</h5>
                            </div>
                        </div>
                        <!--end Promo number--> 

                        <div class="col-sm-6 col-md-3">
                            <div class="ts-promo-number text-center">
                                <figure class="odometer" data-odometer-final="{{(now()->year - 2018)}}">0</figure>
                                <h5>{{str_plural('Year', (now()->year - 2018))}} Experience</h5>
                            </div>
                        </div>
                        <!--end Promo number-->

                    </div>
                </div>
            </section>

            <!--Our Experience
            ============================================================================================================
            -->
            <section id="experiences" class="ts-block">
                <div class="container">

                    <div class="ts-title">
                        <h2>My Experience</h2>
                    </div>

                    <div class="row">

                        <div class="col-md-4 mb-5">
                            <img src="/img/DSC_0011b_Fotor.jpg" class="w-100" alt="">
                        </div>

                        <div class="col-md-6">
                            <ul class="list list-text list-dashed">

                                @foreach (App\Experience::latest()->take(3)->get() as $experience)
                                    
                                    <li data-animate="ts-fadeInRight" data-ts-delay=".{{$loop->index}}s">
                                        <h5 class="opacity-30"><strong>{{$experience->years}}</strong></h5>
                                        <h4>{{$experience->job}} @ {{$experience->where}}</h4>
                                        <p>
                                            {{$experience->description}}
                                        </p>
                                    </li>
                                    <!--end Experience block-->
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </section>

            

        </main>
        <!--end #content-->

        <!--FOOTER
        ================================================================================================================
        ================================================================================================================
        -->
        <footer id="ts-footer">
            <section id="ts-footer-main">
                <div class="container">

                    <div class="ts-title">
                        <h2>About Me</h2>
                    </div>

                    <div class="row">

                        <div class="col-md-5">
                            <p>
                                Trained in Molengeek amongst many other developers, I quickly found interest for Web Developing. It has since then been a real passion. Hard working during the day on my projects as well as after my working hours, out of pure pleasure. 
                            </p>
                            <a target="_blank" href="/img/CV_Jonathan_Berlemont.pdf" class="ts-link ts-underline mb-5 mb-md-0 d-inline-block">My CV</a>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <address class="ts-text-muted---white">
                                Drève Sainte Anne 76
                                <br>
                                1020 Bruxelles
                                <br>
                                <br>
                                <strong>Tel:</strong> +3 470 64 31 95
                                <br>
                                <strong>Email:</strong> <a href="mailto:berlemontjonathan@gmail.com">berlemontjonathan@gmail.com</a>
                                <br>
                            </address>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <nav class="nav flex-column">
                                <a class="nav-link" target="_blank" href="https://www.facebook.com/jonathan.berlemont">Facebook</a>
                                <a class="nav-link" target="_blank" href="https://github.com/JonathanBerlemont">GitHub</a>
                                <a class="nav-link" target="_blank" href="https://www.linkedin.com/in/jonathan-berlemont-079207186/">LinkedIn</a>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>

            <section>
                <div class="container py-5">
                    <small>© 2019 All Rights Reserved</small>
                </div>
            </section>

        </footer>
        <!--end #footer-->

    </div>
    <!--end page-->

</div>

	

</body>
</html>
