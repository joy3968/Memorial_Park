<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <!-- Title-->
    <title>추모 공원</title>
    <!-- Description-->
    <meta name="description" content="Personal Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/img/favicons/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("img/favicons/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("img/favicons/favicon-16x16.png") }}">
    <!-- Web fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
    <!-- CSS vendors-->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap-custom.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/ionicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/tiny-slider.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/lity.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/simplebar.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/jquery.mb.YTPlayer.min.css") }}">
    <!-- Main CSS-->
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
    <!-- CSS Color scheme-->
    <link id="color-scheme" rel="stylesheet" href="{{ asset("assets/css/colors/main-darkgreen.css") }}">
    <!-- Custom CSS (Add your custom CSS styles to this file)-->
    <link rel="stylesheet" href="{{ asset("assets/css/custom.css") }}">
</head>

<body class="theme-dark">
<!-- Preloader-->
<div class="preloader">
    <div class="preloader-block">
        <div class="preloader-icon"><span class="loading-dot loading-dot-1"></span><span class="loading-dot loading-dot-2"></span><span class="loading-dot loading-dot-3"></span></div>
    </div>
</div>
<div id="overlay-effect"></div>
<!-- Navbar-->
<nav class="navbar-expand-md navbar fixed-top" id="navbar"><a class="navbar-brand" data-scroll="" href="#home-area">
        <!-- Navbar Logo-->
        <img class="img-fluid" src="{{ asset("assets/img/ribbon_logo.png") }}" alt="Logo">
{{--        <span class="text-white">추모 공원</span>--}}
    </a>
    <span class="navbar-menu ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" role="button"><span class="btn-line"></span></span>
    <div class="collapse navbar-collapse order-1 order-lg-0" id="navbarSupportedContent">
        <!-- Navbar menu-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#about">그는 누구인가?</a></li>
            <li class="nav-item"><a class="nav-link" href="#resume">그의 발자취</a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio">추억 전시관</a></li>
            <li class="nav-item"><a class="nav-link" href="#blog">추모관</a></li>
{{--            <li class="nav-item"><a class="nav-link" href="#contact">제휴 문의</a></li>--}}
        </ul>
    </div>
</nav>
<!-- Home-->
<section class="home-area element-cover-bg" id="home" style="background-image: url('{{ asset("assets/img/home.jpg") }}')">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-lg-8 home-content text-center">
                <h1 class="home-name">당신과의 <span>추억들.</span></h1>
                <h4 class="cd-headline clip home-headline"> <span class="cd-words-wrapper single-headline"><b class="is-visible">잊지 않겠습니다.</b><b>기억하겠습니다.</b><b>간직하겠습니다.</b></span></h4>
            </div>
        </div>
    </div>
    <div class="fixed-wrapper">
        <!-- Languages list-->
        <div class="fixed-block block-left">
            <ul class="list-unstyled languages-list">
                <li><a href="#0"><span class="single-language">온라인</span></a></li>
                <li><a href="#0"><span class="single-language">추모 공원</span></a></li>
            </ul>
        </div>
        <!-- Social media icons-->
        <div class="fixed-block block-right">
            <ul class="list-unstyled social-icons">
                <li><a href="#0"><i class="icon ion-logo-twitter"></i></a></li>
                <li><a href="#0"><i class="icon ion-logo-facebook"></i></a></li>
                <li><a href="#0"><i class="icon ion-logo-linkedin"></i></a></li>
                <li><a href="#0"><i class="icon ion-logo-github"></i></a></li>
                <li><a href="#0"><i class="icon ion-logo-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- About lightbox-->
<div class="lightbox-wrapper" id="about" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">가장 빠른 사나이</p>
                                <h2 class="section-title">네이치</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Info section-->
                    <div class="info-section single-section">
                        <div class="row align-items-center">
                            <!-- Picture part-->
                            <div class="col-12 col-lg-5 info-img"><img class="img-fluid img-thumbnail" src="{{ asset("assets/img/info-img.jpg") }}" alt="About Picture"></div>
                            <!-- Content part-->
                            <div class="col-12 col-lg-7 info-content">
                                <div class="content-block">
                                    <h2 class="content-subtitle">그는 누구인가?</h2>
                                    <h6 class="content-title">자신의 목숨보다 남의 목숨을 더 소중히 여겼던 사람</h6>
                                    <div class="content-description">
                                        <p>"애인이고, 아버지이고, 그리고 의사로서 우리에게 큰 영향을 끼친 이는 더 이상 우리와 함께하지 않습니다. 네이치은 의료계에서 오랜 시간을 보내며 많은 환자들의 건강과 삶을 돌보고 왔습니다. 그는 전문성과 소명감으로 가득 찬 의사로서, 환자들과 가족들에게 따뜻한 위로와 지지를 주었습니다. 그의 애정 어린 직업적 의무감과 인간적인 마음은 많은 사람들에게 희망과 치유의 힘을 안겨주었습니다. 네이치은 우리에게 끊임없는 영감과 배움을 선사하며, 그의 기억은 우리 모두의 마음 속에서 계속해서 살아갈 것입니다. 그를 잊지 않고, 그의 가치와 업적을 기리며, 그의 영원한 품안에 편안히 쉬기를 기원합니다."</p>
                                    </div>
                                    <address class="content-info">
                                        <div class="row">
                                            <div class="col-12 col-md-6 single-info"><span>Name:</span>
                                                <p>네이치</p>
                                            </div>
                                            <div class="col-12 col-md-6 single-info"><span>Email:</span>
                                                <p><a href="mailto:emma@example.com">emma@example.com</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 single-info"><span>Lifespan:</span>
                                                <p>1930 - 2018</p>
                                            </div>
                                            <div class="col-12 col-md-6 single-info"><span>From:</span>
                                                <p>Korea</p>
                                            </div>
                                        </div>
                                    </address>
                                    <div class="d-block d-sm-flex align-items-center"><a class="btn content-download button-main button-scheme" href="#0" role="button">Download CV</a>
                                        <ul class="list-unstyled list-inline content-follow">
                                            <li class="list-inline-item"><a href="#0"><i class="icon ion-logo-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#0"><i class="icon ion-logo-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="#0"><i class="icon ion-logo-linkedin"></i></a></li>
                                            <li class="list-inline-item"><a href="#0"><i class="icon ion-logo-github"></i></a></li>
                                            <li class="list-inline-item"><a href="#0"><i class="icon ion-logo-facebook"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services section-->
                    <div class="services-section single-section">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading">
                                    <p class="section-description">Services i offer to my clients</p>
                                    <h2 class="section-title">가장 좋아하는 것</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Single service-->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-service"><i class="icon service-icon ion-logo-css3"></i>
                                    <h6 class="service-title">Design Trends</h6>
                                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <!-- Single service-->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-service"><i class="icon service-icon ion-md-images"></i>
                                    <h6 class="service-title">PSD Design</h6>
                                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <!-- Single service-->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-service"><i class="icon service-icon ion-logo-ionic"></i>
                                    <h6 class="service-title">Customer Support</h6>
                                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <!-- Single service-->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-service"><i class="icon service-icon ion-logo-wordpress"></i>
                                    <h6 class="service-title">Web Development</h6>
                                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <!-- Single service-->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-service"><i class="icon service-icon ion-md-move"></i>
                                    <h6 class="service-title">Fully Responsive</h6>
                                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <!-- Single service-->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-service"><i class="icon service-icon ion-ios-rocket"></i>
                                    <h6 class="service-title">Branding</h6>
                                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials section-->
                    <div class="testimonials-section single-section">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading">
                                    <p class="section-description">What my clients think about me</p>
                                    <h2 class="section-title">그가 남긴 어록들</h2>
                                </div>
                            </div>
                        </div>
                        <div class="my-slider">
                            <div class="slider-item">
                                <!-- Single review-->
                                <div class="single-review swiper-slide">
                                    <div class="review-header d-flex justify-content-between">
                                        <div class="review-client">
                                            <div class="media"><img class="img-fluid rounded-circle client-avatar" src="{{ asset("assets/img/client-1.jpg") }}" alt="Client">
                                                <div class="client-details">
                                                    <h6 class="client-name">Julia Sakura</h6><span class="client-role">Envato Customer</span>
                                                </div>
                                            </div>
                                        </div><i class="icon ion-md-quote review-icon"></i>
                                    </div>
                                    <p class="review-content">Emma did an excellent creative job, addressing our request quickly, and also providing her own graphic insight, being open to feedback and changes or edits when they arose. She worked with us the entire way. Highly recommended.</p>
                                </div>
                            </div>
                            <div class="slider-item">
                                <!-- Single review-->
                                <div class="single-review swiper-slide">
                                    <div class="review-header d-flex justify-content-between">
                                        <div class="review-client">
                                            <div class="media"><img class="img-fluid rounded-circle client-avatar" src="img/client-2.jpg" alt="Client">
                                                <div class="client-details">
                                                    <h6 class="client-name">John Santana</h6><span class="client-role">Entrepreneur</span>
                                                </div>
                                            </div>
                                        </div><i class="icon ion-md-quote review-icon"></i>
                                    </div>
                                    <p class="review-content">Emma did an excellent creative job, addressing our request quickly, and also providing her own graphic insight, being open to feedback and changes or edits when they arose. She worked with us the entire way. Highly recommended.</p>
                                </div>
                            </div>
                            <div class="slider-item">
                                <!-- Single review-->
                                <div class="single-review swiper-slide">
                                    <div class="review-header d-flex justify-content-between">
                                        <div class="review-client">
                                            <div class="media"><img class="img-fluid rounded-circle client-avatar" src="img/client-3.jpg" alt="Client">
                                                <div class="client-details">
                                                    <h6 class="client-name">Maria Wilson</h6><span class="client-role">Envato Customer</span>
                                                </div>
                                            </div>
                                        </div><i class="icon ion-md-quote review-icon"></i>
                                    </div>
                                    <p class="review-content">Emma did an excellent creative job, addressing our request quickly, and also providing her own graphic insight, being open to feedback and changes or edits when they arose. She worked with us the entire way. Highly recommended.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing section-->
{{--                    <div class="pricing-section single-section">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="section-heading">--}}
{{--                                    <p class="section-description">Get started with my services</p>--}}
{{--                                    <h2 class="section-title">Choose a Plan</h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <!-- Single plan-->--}}
{{--                            <div class="col-lg-4">--}}
{{--                                <div class="single-plan mb-4 mb-sm-5"><i class="plan-icon icon ion-md-egg"></i>--}}
{{--                                    <h3 class="plan-type">Standard</h3>--}}
{{--                                    <h2 class="plan-price">$19/month</h2>--}}
{{--                                    <ul class="list-unstyled plan-list">--}}
{{--                                        <li>Mobile App Design</li>--}}
{{--                                        <li>Responsive Design</li>--}}
{{--                                        <li>Database Development</li>--}}
{{--                                        <li>Web Design</li>--}}
{{--                                        <li>24/7 Support</li>--}}
{{--                                    </ul><a class="btn button-main button-scheme plan-btn" href="#0" role="button">Get Standard</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Single plan-->--}}
{{--                            <div class="col-lg-4">--}}
{{--                                <div class="single-plan mb-4 mb-sm-5"><i class="plan-icon icon ion-ios-rocket"></i>--}}
{{--                                    <h3 class="plan-type">Professional</h3>--}}
{{--                                    <h2 class="plan-price">$29/month</h2>--}}
{{--                                    <ul class="list-unstyled plan-list">--}}
{{--                                        <li>Mobile App Design</li>--}}
{{--                                        <li>Responsive Design</li>--}}
{{--                                        <li>Database Development</li>--}}
{{--                                        <li>Web Design</li>--}}
{{--                                        <li>24/7 Support</li>--}}
{{--                                    </ul><a class="btn button-main button-scheme plan-btn" href="#0" role="button">Get Pro</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Single plan-->--}}
{{--                            <div class="col-lg-4">--}}
{{--                                <div class="single-plan mb-4 mb-sm-5"><i class="plan-icon icon ion-logo-ionic"></i>--}}
{{--                                    <h3 class="plan-type">Business</h3>--}}
{{--                                    <h2 class="plan-price">$39/month</h2>--}}
{{--                                    <ul class="list-unstyled plan-list">--}}
{{--                                        <li>Mobile App Design</li>--}}
{{--                                        <li>Responsive Design</li>--}}
{{--                                        <li>Database Development</li>--}}
{{--                                        <li>Web Design</li>--}}
{{--                                        <li>24/7 Support</li>--}}
{{--                                    </ul><a class="btn button-main button-scheme plan-btn" href="#0" role="button">Get Business</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Resume lightbox-->
<div class="lightbox-wrapper" id="resume" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">고인의 발자취를 보며 그를 떠올려보세요.</p>
                                <h2 class="section-title">그의 발자취</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Resume section-->
                    <div class="resume-section single-section">
                        <div class="row">
                            <!-- Education part-->
                            <div class="col-12 col-md-6">
                                <div class="col-block education">
                                    <h3 class="col-title">Education</h3>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">출생</h5><span class="item-details">서울에서 출생 / 1995</span>
                                        <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">서울대 입학</h5><span class="item-details">University of Tokyo / 2008 - 2010</span>
                                        <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">서울대 졸업</h5><span class="item-details">Harvard University / 2012 - 2015</span>
                                        <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience part-->
                            <div class="col-12 col-md-6">
                                <div class="col-block experience">
                                    <h3 class="col-title">Experience</h3>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">결혼</h5><span class="item-details">Adobe / 2015 - 2017</span>
                                        <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">출산</h5><span class="item-details">Google / 2017 - 2018</span>
                                        <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">입원</h5><span class="item-details">Discord / 2019 - Present</span>
                                        <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Skills section-->
{{--                    <div class="skills-section single-section">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="section-heading">--}}
{{--                                    <p class="section-description">My level of knowledge in some tools</p>--}}
{{--                                    <h2 class="section-title">My Skills</h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 col-md-6">--}}
{{--                                <div class="single-skill" data-percentage="95">--}}
{{--                                    <div class="skill-info"><span class="skill-name">HTML/CSS</span><span class="skill-percentage"></span></div>--}}
{{--                                    <div class="progress skill-progress">--}}
{{--                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-skill" data-percentage="80">--}}
{{--                                    <div class="skill-info"><span class="skill-name">Web Design</span><span class="skill-percentage"></span></div>--}}
{{--                                    <div class="progress skill-progress">--}}
{{--                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-skill" data-percentage="90">--}}
{{--                                    <div class="skill-info"><span class="skill-name">JavaScript</span><span class="skill-percentage"></span></div>--}}
{{--                                    <div class="progress skill-progress">--}}
{{--                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-6">--}}
{{--                                <div class="single-skill" data-percentage="90">--}}
{{--                                    <div class="skill-info"><span class="skill-name">React JS</span><span class="skill-percentage"></span></div>--}}
{{--                                    <div class="progress skill-progress">--}}
{{--                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-skill" data-percentage="95">--}}
{{--                                    <div class="skill-info"><span class="skill-name">Express.js</span><span class="skill-percentage"></span></div>--}}
{{--                                    <div class="progress skill-progress">--}}
{{--                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-skill" data-percentage="80">--}}
{{--                                    <div class="skill-info"><span class="skill-name">TypeScript</span><span class="skill-percentage"></span></div>--}}
{{--                                    <div class="progress skill-progress">--}}
{{--                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- Video section-->
                    <div class="video-section single-section">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6 content-part">
                                <h3 class="video-title">고인의 마지막 인사</h3>
                                <p class="video-description">"저의 시간이 다가가고 있지만, 이 세상에서의 모든 경험과 만남은 저에게 큰 기쁨과 의미를 주었습니다. 제 가족과 사랑하는 이들에게 감사의 말씀을 전하며, 이별은 잠시일 뿐 우리의 영혼은 영원히 연결되어 있을 것이라 믿습니다. 부디 제가 떠난 후에도 서로를 위로하고 사랑하며 행복한 인생을 살아가주길 바랍니다. 이젠 저의 마지막 인사를 전하며, 감사하고 사랑합니다."</p>
{{--                                <p class="video-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium qui aspernatur unde mollitia, in laborum.</p>--}}
                            </div>
                            <div class="col-12 col-lg-6 video-part"><a class="media-lightbox" href="https://www.youtube.com/watch?v=doteMqP6eSc" data-lightbox>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <div class="embed-responsive-item element-cover-bg"><span class="play-wrapper"><i class="icon ion-md-play"></i></span></div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio lightbox-->
<div class="lightbox-wrapper" id="portfolio" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">고인과의 추억을 공유하세요</p>
                                <h2 class="section-title">추억 전시관</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio section-->
                    <div class="portfolio-section single-section">
                        <div class="row">
                            <!-- Filter nav-->
                            <div class="col-12">
                                <ul class="list-inline filter-control" role="group" aria-label="Filter Control">
                                    <li class="list-inline-item tab-active" data-filter="*">전체</li>
                                    <li class="list-inline-item" data-filter=".brand">함께 찍은 추억들</li>
                                    <li class="list-inline-item" data-filter=".design">그의 사진들</li>
                                    <li class="list-inline-item" data-filter=".photos">그가 좋아했었던 모든 것</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Thumbnail list-->
                        <div class="portfolio-grid row">
                            <!-- Single item-->
                            <div class="single-item col-6 col-lg-4 design"><a class="portfolio-item" href="{{ asset("assets/img/item-1.jpeg") }}" data-lightbox>
                                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{ asset("assets/img/item-1.jpeg") }}">
                                        <div class="item-content">
                                            <h6 class="content-title">Label Tag Mockup</h6><span class="content-more">More Info</span>
                                        </div>
                                    </div>
                                </a></div>
                            <!-- Single item-->
                            <div class="single-item col-6 col-lg-4 photos"><a class="portfolio-item" href="{{ asset("assets/img/item-3.jpeg") }}" data-lightbox>
                                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{ asset("assets/img/item-3.jpeg" )}}">
                                        <div class="item-content">
                                            <h6 class="content-title">3D Bag Mockup</h6><span class="content-more">More Info</span>
                                        </div>
                                    </div>
                                </a></div>
                            <!-- Single item-->
                            <div class="single-item col-6 col-lg-4 design"><a class="portfolio-item" href="{{ asset("assets/img/item-2.jpeg") }}" data-lightbox>
                                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{ asset("assets/img/item-2.jpeg") }}">
                                        <div class="item-content">
                                            <h6 class="content-title">Modern Bag Design</h6><span class="content-more">More Info</span>
                                        </div>
                                    </div>
                                </a></div>
                            <!-- Single item-->
                            <div class="single-item col-6 col-lg-4 brand"><a class="portfolio-item" href="{{ asset("assets/img/item-4.jpeg") }}" data-lightbox>
                                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{ asset("assets/img/item-4.jpeg") }}">
                                        <div class="item-content">
                                            <h6 class="content-title">Coffee Cup Design</h6><span class="content-more">More Info</span>
                                        </div>
                                    </div>
                                </a></div>
                            <!-- Single item-->
                            <div class="single-item col-6 col-lg-4 brand"><a class="portfolio-item" href="{{ asset("assets/img/item-5.jpeg") }}" data-lightbox>
                                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{ asset("assets/img/item-5.jpeg") }}">
                                        <div class="item-content">
                                            <h6 class="content-title">T-Shirt Design</h6><span class="content-more">More Info</span>
                                        </div>
                                    </div>
                                </a></div>
                            <!-- Single item-->
                            <div class="single-item col-6 col-lg-4 photos"><a class="portfolio-item" href="{{ asset("assets/img/item-6.jpeg") }}" data-lightbox>
                                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{ asset("assets/img/item-6.jpeg") }}">
                                        <div class="item-content">
                                            <h6 class="content-title">Packaging Box Mockup</h6><span class="content-more">More Info</span>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog lightbox-->
<div class="lightbox-wrapper" id="blog" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">네이치 님에게 따뜻한 추모의 글을 남겨주세요.</p>
                                <h2 class="section-title">추모관</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog section-->
                    <div class="blog-section single-section">
                        <div class="row justify-content-center">
                            <!-- Single post-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="img/post-1.jpg" alt="Blog post"><span class="content-date">친구, 공민우</span></a>
                                    <div class="card-body post-content"><a href="#0">
                                            <h5 class="card-title content-title">영원한 향기</h5>
                                        </a>
                                        <p class="card-text content-description">네이치은 우리에게 떠나갔지만, 그의 희소식이 우리 마음 속에 영원한 향기로 남을 것입니다. 그의 따뜻한 웃음과 지혜로운 조언은 우리의 삶에 영감을 주었고, 그의 도움과 사랑은 우리를 지지해주었습니다. 네이치을 추억하며 그의 소중한 기억을 영원히 간직하겠습니다.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single post-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="img/post-2.jpg" alt="Blog post"><span class="content-date">친구, 이현진</span></a>
                                    <div class="card-body post-content"><a href="#0">
                                            <h5 class="card-title content-title">무한한 사랑과 감사</h5>
                                        </a>
                                        <p class="card-text content-description">네이치은 우리에게 무한한 사랑과 감사를 심어주었습니다. 그의 따뜻한 마음과 헌신적인 성품은 우리를 위해 언제나 흔쾌히 흘려주었습니다. 이제 그는 더 이상 우리와 함께하지 않지만, 우리는 그를 추억하며 그가 세상에 남긴 빛나는 흔적을 계속해서 따라갈 것입니다.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single post-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="img/post-3.jpg" alt="Blog post"><span class="content-date">친구, 임현주</span></a>
                                    <div class="card-body post-content"><a href="#0">
                                            <h5 class="card-title content-title">고마움을 담아</h5>
                                        </a>
                                        <p class="card-text content-description">네이치은 우리에게 무한한 고마움을 남겼습니다. 그의 노력과 헌신은 우리에게 큰 영감을 주었고, 그의 따뜻한 마음은 우리에게 힘과 위로를 줬습니다. 그를 추억하며, 그의 공헌과 사랑을 담아 그의 품안에서 평화롭게 쉬어가길 기원합니다.</p>
                                    </div>
                                </div>
                            </div><!-- Single post-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="img/post-4.jpg" alt="Blog post"><span class="content-date">친구, 권민아</span></a>
                                    <div class="card-body post-content"><a href="#0">
                                            <h5 class="card-title content-title">보고싶습니다.</h5>
                                        </a>
                                        <p class="card-text content-description">네이치은 오랜 시간 동안 힘들게 달려온 긴 여정을 마치고 이제 쉼을 찾았습니다. 그의 헌신과 열정은 우리에게 큰 자부심을 주었고, 그의 삶은 우리에게 영원한 보탬이 되었습니다. 이제 네이치은 편안한 곳에서 안식을 찾았으며, 우리는 항상 그를 기억하며 감사와 경의의 마음을 전합니다.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single post-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="img/post-5.jpg" alt="Blog post"><span class="content-date">오빠, 김기훈</span></a>
                                    <div class="card-body post-content"><a href="#0">
                                            <h5 class="card-title content-title">오랜만에 찾아뵙습니다.</h5>
                                        </a>
                                        <p class="card-text content-description">네이치은 우리 삶의 특별한 이야기의 주인공이었습니다. 그의 웃음과 눈빛은 우리에게 기쁨을 주었고, 그의 지혜와 사랑은 우리에게 영감을 주었습니다. 그를 기리며, 그의 이야기를 전해가며 우리는 그가 남긴 흔적을 세상에 묻어갈 것입니다.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single post-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="img/post-6.jpg" alt="Blog post"><span class="content-date">언니, 유영지</span></a>
                                    <div class="card-body post-content"><a href="#0">
                                            <h5 class="card-title content-title">그립습니다.</h5>
                                        </a>
                                        <p class="card-text content-description">네이치은 마치 손끝에서 흘려나오는 따뜻한 선율처럼 우리에게 사랑과 희망을 전달해주었습니다. 그의 관심과 배려는 우리를 향한 큰 선물이었고, 그의 의지와 용기는 우리에게 용기를 주었습니다. 네이치의 빛나는 추억을 기억하며, 그의 선율이 우리의 마음에 영원히 울려퍼지길 바랍니다.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact lightbox-->
<div class="lightbox-wrapper" id="contact" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Feel free to contact me anytimes</p>
                                <h2 class="section-title">Get in Touch</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact section-->
                    <div class="contact-section single-section">
                        <div class="row">
                            <!-- Contact form-->
                            <div class="col-12 col-lg-7">
                                <form class="contact-form" id="contact-form" action="php/contact.php">
                                    <h4 class="content-title">Message Me</h4>
                                    <div class="row">
                                        <div class="col-12 col-md-6 form-group"><input class="form-control" id="contact-name" type="text" name="name" placeholder="Name" required=""></div>
                                        <div class="col-12 col-md-6 form-group"><input class="form-control" id="contact-email" type="email" name="email" placeholder="Email" required=""></div>
                                        <div class="col-12 form-group"><input class="form-control" id="contact-subject" type="text" name="subject" placeholder="Subject" required=""></div>
                                        <div class="col-12 form-group form-message"><textarea class="form-control" id="contact-message" name="message" placeholder="Message" rows="5" required=""></textarea></div>
                                        <div class="col-12 form-submit"><button class="btn button-main button-scheme" id="contact-submit" type="submit">Send Message</button>
                                            <p class="contact-feedback"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Contact info-->
                            <div class="col-12 col-lg-5">
                                <div class="contact-info">
                                    <h4 class="content-title">Contact Info</h4>
                                    <p class="info-description">Always available for freelance work if the right project comes along, Feel free to contact me!</p>
                                    <ul class="list-unstyled list-info">
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-logo-ionic"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Name</h6><span class="info-value">Emma Smith</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-map"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Location</h6><span class="info-value">4155 Mann Island, Liverpool, United Kingdom.</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-call"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Call Me</h6><span class="info-value"><a href="tel:+441632967704">+44 1632 967704</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-send"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Email Me</h6><span class="info-value"><a href="mailto:emma@example.com">emma@example.com</a></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts-->
<script src="{{ asset("assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assets/js/imagesloaded.pkgd.min.js") }}"></script>
<script src="{{ asset("assets/js/isotope.pkgd.min.js") }}"></script>
<script src="{{ asset("assets/js/animatedModal.js") }}"></script>
<script src="{{ asset("assets/js/tiny-slider.js") }}"></script>
<script src="{{ asset("assets/js/lity.min.js") }}"></script>
<script src="{{ asset("assets/js/simplebar.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.mb.YTPlayer.min.js") }}"></script>
<script src="{{ asset("assets/js/main.js") }}"></script>
<!-- Custom JS (Add your custom JS scripts to this file)-->
<script src="{{ asset("assets/js/custom.js") }}"></script>
</body>

</html>
