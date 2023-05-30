<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}--}}
{{--        </style>--}}

{{--        <style>--}}
{{--            body {--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--            }--}}
{{--        </style>--}}

        <!-- Favicons -->
        <link href="landing/img/favicon.png" rel="icon">
        <link href="landing/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="landing/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="landing/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="landing/lib/animate/animate.min.css" rel="stylesheet">
        <link href="landing/lib/venobox/venobox.css" rel="stylesheet">
        <link href="landing/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="landing/css/style.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        <!--==========================
          Header
        ============================-->
        <header id="header">
            <div class="container">

                <div id="logo" class="pull-left">
                    <!-- Uncomment below if you prefer to use a text logo -->
                    <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                    <a href="#intro" class="scrollto"><img src="ctalogo.png" alt="" title=""></a>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#intro">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#speakers">Speakers</a></li>
{{--                        <li><a href="#schedule">Schedule</a></li>--}}
                        <li><a href="#venue">Venue</a></li>
{{--                        <li><a href="#hotels">Hotels</a></li>--}}
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#sponsors">Sponsors</a></li>
                        <li><a href="#contact">Contact</a></li>

                        @if (Route::has('login'))
                            <li class="hidden fixed top-0 right-0  sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>

                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            </li>
                                    @if (Route::has('register'))
                                       <li ><a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                    @endif
                                @endauth

                        @endif
{{--                        <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>--}}
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </header><!-- #header -->

        <!--==========================
          Intro Section
        ============================-->
        <section id="intro">
            <div class="intro-container wow fadeIn">
                <h1 class="mb-4 pb-0" style="color: #f82249">Conference<br>travel Application</h1>
{{--                <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>--}}
                <a href="#" class="venobox play-btn mb-4" data-vbtype="video"
                   data-autoplay="true"></a>
                <a href="#about" class="about-btn scrollto">About Us</a>
            </div>
        </section>

        <main id="main">

            <!--==========================
              About Section
            ============================-->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>About CTA</h2>
                            <p>Welcome to Conference Travel App, your go-to platform for seamless conference planning
                                and travel management. We understand the importance of attending conferences and the
                                challenges that come with it. That's why we've built this app to make your conference
                                experience effortless and enjoyable. Our mission is to simplify the process of finding,
                                organizing, and attending conferences around the world. Whether you're a business
                                professional, an industry expert, or a passionate learner, Conference Travel App is
                                designed to cater to your specific conference needs.</p>
                        </div>
                        <div class="col-lg-3">
                            <h3>Discover Conferences</h3>
                            <p>With our extensive database, you can explore a wide range of conferences across various
                                industries. From technology and business to healthcare and arts, we have a diverse
                                collection of events that cover all your interests. Stay updated with the latest
                                conferences and find the ones that align with your professional goals.</p>
                        </div>
                        <div class="col-lg-3">
                            <h3>Stay Informed</h3>
                            <p>Receive real-time updates and notifications about your selected conferences.
                                Get reminders for upcoming sessions, workshops, and keynotes.
                                Stay informed about any schedule changes, venue details, or special announcements.
                                Our app ensures that you never miss any important information related to your conferences.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==========================
              Speakers Section
            ============================-->
            <section id="speakers" class="wow fadeInUp">
                <div class="container">
                    <div class="section-header">
                        <h2>Event Speakers</h2>
                        <p>Here are some of our speakers</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="speaker">
                                <img src="landing/img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
                                <div class="details">
                                    <h3><a href="speaker-details.html">Brenden Legros</a></h3>
                                    <p>Human Resources Specialist</p>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="speaker">
                                <img src="landing/img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
                                <div class="details">
                                    <h3><a href="speaker-details.html">Hubert Hirthe</a></h3>
                                    <p>Neurosurgeon</p>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="speaker">
                                <img src="landing/img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
                                <div class="details">
                                    <h3><a href="speaker-details.html">Cole Emmerich</a></h3>
                                    <p>Corporate Lawyer</p>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="speaker">
                                <img src="landing/img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
                                <div class="details">
                                    <h3><a href="speaker-details.html">Jack Christiansen</a></h3>
                                    <p>Financial Analyst</p>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="speaker">
                                <img src="landing/img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
                                <div class="details">
                                    <h3><a href="speaker-details.html">Alejandrin Littel</a></h3>
                                    <p>Project Manager</p>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="speaker">
                                <img src="landing/img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
                                <div class="details">
                                    <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                                    <p>Marketing Manager</p>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!--==========================
              Schedule Section
            ============================-->
{{--            <section id="schedule" class="section-with-bg">--}}
{{--                <div class="container wow fadeInUp">--}}
{{--                    <div class="section-header">--}}
{{--                        <h2>Event Schedule</h2>--}}
{{--                        <p>Here is our event schedule</p>--}}
{{--                    </div>--}}

{{--                    <ul class="nav nav-tabs" role="tablist">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                    <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius--}}
{{--                        necessitatibus voluptatem quis labore perspiciatis quia.</h3>--}}

{{--                    <div class="tab-content row justify-content-center">--}}

{{--                        <!-- Schdule Day 1 -->--}}
{{--                        <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>09:30 AM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <h4>Registration</h4>--}}
{{--                                    <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>10:00 AM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/1.jpg" alt="Brenden Legros">--}}
{{--                                    </div>--}}
{{--                                    <h4>Keynote <span>Brenden Legros</span></h4>--}}
{{--                                    <p>Facere provident incidunt quos voluptas.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>11:00 AM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/2.jpg" alt="Hubert Hirthe">--}}
{{--                                    </div>--}}
{{--                                    <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>--}}
{{--                                    <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>12:00 AM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/3.jpg" alt="Cole Emmerich">--}}
{{--                                    </div>--}}
{{--                                    <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>--}}
{{--                                    <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>02:00 PM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/4.jpg" alt="Jack Christiansen">--}}
{{--                                    </div>--}}
{{--                                    <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>--}}
{{--                                    <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>03:00 PM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/5.jpg" alt="Alejandrin Littel">--}}
{{--                                    </div>--}}
{{--                                    <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>--}}
{{--                                    <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>04:00 PM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/6.jpg" alt="Willow Trantow">--}}
{{--                                    </div>--}}
{{--                                    <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>--}}
{{--                                    <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <!-- End Schdule Day 1 -->--}}

{{--                        <!-- Schdule Day 2 -->--}}
{{--                        <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>10:00 AM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/1.jpg" alt="Brenden Legros">--}}
{{--                                    </div>--}}
{{--                                    <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>--}}
{{--                                    <p>Facere provident incidunt quos voluptas.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>11:00 AM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/2.jpg" alt="Hubert Hirthe">--}}
{{--                                    </div>--}}
{{--                                    <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>--}}
{{--                                    <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>12:00 AM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/3.jpg" alt="Cole Emmerich">--}}
{{--                                    </div>--}}
{{--                                    <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>--}}
{{--                                    <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>02:00 PM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/4.jpg" alt="Jack Christiansen">--}}
{{--                                    </div>--}}
{{--                                    <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>--}}
{{--                                    <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>03:00 PM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/5.jpg" alt="Alejandrin Littel">--}}
{{--                                    </div>--}}
{{--                                    <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>--}}
{{--                                    <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>04:00 PM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/6.jpg" alt="Willow Trantow">--}}
{{--                                    </div>--}}
{{--                                    <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>--}}
{{--                                    <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <!-- End Schdule Day 2 -->--}}

{{--                        <!-- Schdule Day 3 -->--}}
{{--                        <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>10:00 AM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/2.jpg" alt="Hubert Hirthe">--}}
{{--                                    </div>--}}
{{--                                    <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>--}}
{{--                                    <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>11:00 AM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/3.jpg" alt="Cole Emmerich">--}}
{{--                                    </div>--}}
{{--                                    <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>--}}
{{--                                    <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>12:00 AM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/1.jpg" alt="Brenden Legros">--}}
{{--                                    </div>--}}
{{--                                    <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>--}}
{{--                                    <p>Facere provident incidunt quos voluptas.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>02:00 PM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/4.jpg" alt="Jack Christiansen">--}}
{{--                                    </div>--}}
{{--                                    <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>--}}
{{--                                    <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>03:00 PM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/5.jpg" alt="Alejandrin Littel">--}}
{{--                                    </div>--}}
{{--                                    <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>--}}
{{--                                    <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row schedule-item">--}}
{{--                                <div class="col-md-2"><time>04:00 PM</time></div>--}}
{{--                                <div class="col-md-10">--}}
{{--                                    <div class="speaker">--}}
{{--                                        <img src="landing/img/speakers/6.jpg" alt="Willow Trantow">--}}
{{--                                    </div>--}}
{{--                                    <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>--}}
{{--                                    <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <!-- End Schdule Day 2 -->--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--            </section>--}}

            <!--==========================
              Venue Section
            ============================-->
            <section id="venue" class="wow fadeInUp">

                <div class="container-fluid">

                    <div class="section-header">
                        <h2>Event Venue</h2>
                        <p>Event venue location info and gallery</p>
                    </div>



                </div>

                <div class="container-fluid venue-gallery-container">
                    <div class="row no-gutters">

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="landing/img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                                    <img src="landing/img/venue-gallery/1.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="landing/img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                                    <img src="landing/img/venue-gallery/2.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="landing/img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                                    <img src="landing/img/venue-gallery/3.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="landing/img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                                    <img src="landing/img/venue-gallery/4.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="landing/img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                                    <img src="landing/img/venue-gallery/5.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="landing/img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                                    <img src="landing/img/venue-gallery/6.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="landing/img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                                    <img src="landing/img/venue-gallery/7.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="venue-gallery">
                                <a href="landing/img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                                    <img src="landing/img/venue-gallery/8.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

            <!--==========================
              Hotels Section
            ============================-->
{{--            <section id="hotels" class="section-with-bg wow fadeInUp">--}}

{{--                <div class="container">--}}
{{--                    <div class="section-header">--}}
{{--                        <h2>Hotels</h2>--}}
{{--                        <p>Her are some nearby hotels</p>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}

{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="hotel">--}}
{{--                                <div class="hotel-img">--}}
{{--                                    <img src="landing/img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <h3><a href="#">Hotel 1</a></h3>--}}
{{--                                <div class="stars">--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <p>0.4 Mile from the Venue</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="hotel">--}}
{{--                                <div class="hotel-img">--}}
{{--                                    <img src="landing/img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <h3><a href="#">Hotel 2</a></h3>--}}
{{--                                <div class="stars">--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star-half-full"></i>--}}
{{--                                </div>--}}
{{--                                <p>0.5 Mile from the Venue</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="hotel">--}}
{{--                                <div class="hotel-img">--}}
{{--                                    <img src="landing/img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <h3><a href="#">Hotel 3</a></h3>--}}
{{--                                <div class="stars">--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <p>0.6 Mile from the Venue</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </section>--}}

            <!--==========================
              Gallery Section
            ============================-->
            <section id="gallery" class="wow fadeInUp">

                <div class="container">
                    <div class="section-header">
                        <h2>Gallery</h2>
                        <p>Check our gallery from the recent events</p>
                    </div>
                </div>

                <div class="owl-carousel gallery-carousel">
                    <a href="landing/img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="landing/img/gallery/1.jpg" alt=""></a>
                    <a href="landing/img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="landing/img/gallery/2.jpg" alt=""></a>
                    <a href="landing/img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="landing/img/gallery/3.jpg" alt=""></a>
                    <a href="landing/img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="landing/img/gallery/4.jpg" alt=""></a>
                    <a href="landing/img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="landing/img/gallery/5.jpg" alt=""></a>
                    <a href="landing/img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="landing/img/gallery/6.jpg" alt=""></a>
                    <a href="landing/img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="landing/img/gallery/7.jpg" alt=""></a>
                    <a href="landing/img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="landing/img/gallery/8.jpg" alt=""></a>
                </div>

            </section>

            <!--==========================
              Sponsors Section
            ============================-->
            <section id="sponsors" class="section-with-bg wow fadeInUp">

                <div class="container">
                    <div class="section-header">
                        <h2>Sponsors</h2>
                    </div>

                    <div class="row no-gutters sponsors-wrap clearfix">

                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="sponsor-logo">
                                <img src="landing/img/sponsors/1.png" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="sponsor-logo">
                                <img src="landing/img/sponsors/2.png" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="sponsor-logo">
                                <img src="landing/img/sponsors/3.png" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="sponsor-logo">
                                <img src="landing/img/sponsors/4.png" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="sponsor-logo">
                                <img src="landing/img/sponsors/5.png" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="sponsor-logo">
                                <img src="landing/img/sponsors/6.png" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="sponsor-logo">
                                <img src="landing/img/sponsors/7.png" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="sponsor-logo">
                                <img src="landing/img/sponsors/8.png" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>

                </div>

            </section>




            <!--==========================
              Subscribe Section
            ============================-->
            <section id="subscribe">
                <div class="container wow fadeInUp">
                    <div class="section-header">
                        <h2>Newsletter</h2>
                        <p>subscribe for updates regarding upcoming conferences and other vital information.</p>
                    </div>

                    <form method="POST" action="#">
                        <div class="form-row justify-content-center">
                            <div class="col-auto">
                                <input type="text" class="form-control" placeholder="Enter your Email">
                            </div>
                            <div class="col-auto">
                                <button type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>

            <!--==========================
              Buy Ticket Section
            ============================-->
{{--            <section id="buy-tickets" class="section-with-bg wow fadeInUp">--}}
{{--                <div class="container">--}}

{{--                    <div class="section-header">--}}
{{--                        <h2>Buy Tickets</h2>--}}
{{--                        <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="card mb-5 mb-lg-0">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>--}}
{{--                                    <h6 class="card-price text-center">$150</h6>--}}
{{--                                    <hr>--}}
{{--                                    <ul class="fa-ul">--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>--}}
{{--                                        <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>--}}
{{--                                        <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>--}}
{{--                                        <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>--}}
{{--                                    </ul>--}}
{{--                                    <hr>--}}
{{--                                    <div class="text-center">--}}
{{--                                        <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="card mb-5 mb-lg-0">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>--}}
{{--                                    <h6 class="card-price text-center">$250</h6>--}}
{{--                                    <hr>--}}
{{--                                    <ul class="fa-ul">--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>--}}
{{--                                        <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>--}}
{{--                                        <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>--}}
{{--                                    </ul>--}}
{{--                                    <hr>--}}
{{--                                    <div class="text-center">--}}
{{--                                        <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Pro Tier -->--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>--}}
{{--                                    <h6 class="card-price text-center">$350</h6>--}}
{{--                                    <hr>--}}
{{--                                    <ul class="fa-ul">--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>--}}
{{--                                        <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>--}}
{{--                                    </ul>--}}
{{--                                    <hr>--}}
{{--                                    <div class="text-center">--}}
{{--                                        <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <!-- Modal Order Form -->--}}
{{--                <div id="buy-ticket-modal" class="modal fade">--}}
{{--                    <div class="modal-dialog" role="document">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h4 class="modal-title">Buy Tickets</h4>--}}
{{--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <form method="POST" action="#">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" class="form-control" name="your-name" placeholder="Your Name">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" class="form-control" name="your-email" placeholder="Your Email">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <select id="ticket-type" name="ticket-type" class="form-control" >--}}
{{--                                            <option value="">-- Select Your Ticket Type --</option>--}}
{{--                                            <option value="standard-access">Standard Access</option>--}}
{{--                                            <option value="pro-access">Pro Access</option>--}}
{{--                                            <option value="premium-access">Premium Access</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="text-center">--}}
{{--                                        <button type="submit" class="btn">Buy Now</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div><!-- /.modal-content -->--}}
{{--                    </div><!-- /.modal-dialog -->--}}
{{--                </div><!-- /.modal -->--}}

{{--            </section>--}}

            <!--==========================
              Contact Section
            ============================-->
            <section id="contact" class="section-bg wow fadeInUp">

                <div class="container">

                    <div class="section-header">
                        <h2>Contact Us</h2>
                    </div>

                    <div class="row contact-info">

                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="ion-ios-location-outline"></i>
                                <h3>Address</h3>
                                <address>A108 Adam Street, NY 535022, USA</address>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="ion-ios-telephone-outline"></i>
                                <h3>Phone Number</h3>
                                <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="ion-ios-email-outline"></i>
                                <h3>Email</h3>
                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                            </div>
                        </div>

                    </div>

                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>
            </section><!-- #contact -->

        </main>

        <!--==========================
          Footer
        ============================-->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 footer-info">
                            <img src="ctalogo.png" alt="TheEvenet">
                            <p>
                                Welcome to Conference Travel App, your go-to platform for seamless conference planning
                                and travel management. We understand the importance of attending conferences and the
                                challenges that come with it. That's why we've built this app to make your conference
                                experience effortless and enjoyable.
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Contact Us</h4>
                            <p>
                                A108 Adam Street <br>
                                New York, NY 535022<br>
                                United States <br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>

                            <div class="social-links">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>CTA</strong>.
                </div>
                <div class="credits">

                    Designed by <a href="#">Frank Agukwe</a>
                </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="landing/lib/jquery/jquery.min.js"></script>
        <script src="landing/lib/jquery/jquery-migrate.min.js"></script>
        <script src="landing/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="landing/lib/easing/easing.min.js"></script>
        <script src="landing/lib/superfish/hoverIntent.js"></script>
        <script src="landing/lib/superfish/superfish.min.js"></script>
        <script src="landing/lib/wow/wow.min.js"></script>
        <script src="landing/lib/venobox/venobox.min.js"></script>
        <script src="landing/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Form JavaScript File -->
        <script src="landing/contactform/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="landing/js/main.js"></script>
    </body>
</html>
