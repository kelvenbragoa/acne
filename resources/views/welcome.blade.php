@extends('layouts.master')
@section('content')

<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h4>ACNE</h4>
            <h1>ASSOCIAÇÃO CRIANÇA NOSSA ESPERANÇA</h1>
            <p>Contribuindo para a promoção dos direitos humanos das crianças e da rapariga.</p>
            {{-- <a href="" class="default-btn">Join With Us</a> --}}
        </div>
    </div>
</section><!-- /Hero Section -->

<section class="promo-section-2 padding bd-bottom">
       <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{asset('template/img/icon-1.png')}}" alt="prmo icon">
                        <h3>Nossa Visão</h3>
                        <p>Criar um mundo saudável e seguro para crianças vulneráveis, através de advocacia, aconselhamento, criação de condições para melhoria da qualidade de vida das comunidades, em particular para as crianças, adolescentes e jovens.</p>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{asset('template/img/icon-2.png')}}" alt="prmo icon">
                        <h3>Nossa Missão</h3>
                        <p>Melhorar a qualidade de vida das crianças vulneráveis, adolescentes e jovens nas comunidades, Vilas e Localidades do nosso país.</p>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{asset('template/img/icon-3.png')}}" alt="prmo icon">
                        <h3>Nossos Valores</h3>
                        <p>Falta da descrição dos valores da associação.</p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
</section><!-- /Promo Section -->

<section class="causes-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Causas Recentes</h2>
            <span class="heading-border"></span>
            <p>Contribuindo para a promoção dos direitos humanos das crianças e da rapariga</p>
        </div><!-- /Section Heading -->
        <div class="causes-wrap row">
            <div class="col-md-4 xs-padding">
                <div class="causes-content">
                   <div class="causes-thumb">
                        <img src="{{asset('template/img2/1.jpg')}}" alt="causes">
                        
                       
                   </div>
                    <div class="causes-details">
                        <h3>Visita a comunidade.</h3>
                        <p>Visita a comunidade na provincia de sofala distrito de buzi!</p>
                       
                    </div>
                </div>
            </div><!-- /Causes-1 -->
            <div class="col-md-4 xs-padding">
                <div class="causes-content">
                   <div class="causes-thumb">
                        <img src="{{asset('template/img2/2.jpg')}}" alt="causes">
                        
                       
                   </div>
                    <div class="causes-details">
                        <h3>Visita a comunidade.</h3>
                        <p>Visita a comunidade na provincia de sofala distrito de buzi!</p>
                       
                    </div>
                </div>
            </div><!-- /Causes-1 -->

            <div class="col-md-4 xs-padding">
                <div class="causes-content">
                   <div class="causes-thumb">
                        <img src="{{asset('template/img2/3.jpg')}}" alt="causes">
                        
                       
                   </div>
                    <div class="causes-details">
                        <h3>Visita a comunidade.</h3>
                        <p>Visita a comunidade na provincia de sofala distrito de buzi!</p>
                       
                    </div>
                </div>
            </div><!-- /Causes-1 -->
        </div>
    </div>
</section><!-- /Causes Section -->

{{-- <section class="about-section bd-bottom shape circle padding">
    <div class="container">
        <div class="row">
           <div class="col-md-4 xs-padding">
                <div class="profile-wrap">
                    <img class="profile" src="img/profile.jpg')}}" alt="profile">
                    <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                    <img src="{{asset('template/img/sign.png')}}" alt="sign">
                </div>
            </div>
            <div class="col-md-8 xs-padding">
                <div class="about-wrap row">
                    <div class="col-md-6 xs-padding">
                        <img src="{{asset('template/img/history.jpg')}}" alt="about-thumb">
                        <h3>Our History</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor.</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <img src="{{asset('template/img/mission.jpg')}}" alt="about-thumb">
                        <h3>Our Mission</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor.</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Causes Section --> --}}

{{-- <section class="campaigns-section bd-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 xs-padding">
                <div class="campaigns-wrap">
                    <h4>Featured Campaigns</h4>
                    <h2>Featured project to built a School.</h2>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">35%</span></div>
                    </div>
                    <div class="donation-box">
                        <h3><i class="ti-bar-chart"></i>Goal: $450000</h3>
                        <h3><i class="ti-thumb-up"></i>Raised: $55000</h3>
                    </div>
                    <a href="#" class="default-btn">Donate Now</a>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="video-wrap">
                    <img src="{{asset('template/img/video.jpg')}}" alt="video">
                    <div class="play">
                        <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="ti-control-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Featured Campaigns Section --> --}}

{{-- <section class="team-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Meet Out Volunteers</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div class="team-wrapper row">
            <div class="col-lg-12 sm-padding">
                <div class="team-wrap row">
                    <div class="col-md-3 xs-padding">
                        <div class="team-details">
                           <img src="{{asset('template/img/team-1.jpg')}}" alt="team">
                            <div class="hover">
                                <h3>Jonathan Smith <span>Communicator</span></h3>
                            </div>
                        </div>
                    </div><!-- /Team-1 -->
                    <div class="col-md-3 xs-padding">
                        <div class="team-details">
                           <img src="{{asset('template/img/team-2.jpg')}}" alt="team">
                            <div class="hover">
                                <h3>Angelina Rose <span>Certified Reader</span></h3>
                            </div>
                        </div>
                        
                    </div><!-- /Team-2 -->
                    <div class="col-md-3 xs-padding">
                        <div class="team-details">
                            <img src="{{asset('template/img/team-3.jpg')}}" alt="team">
                            <div class="hover">
                                <h3>Taylor Swift <span>Event Creator</span></h3>
                            </div>
                        </div>
                    </div><!-- /Team-3 -->
                    <div class="col-md-3 xs-padding">
                        <div class="team-details">
                           <img src="{{asset('template/img/team-4.jpg')}}" alt="team">
                            <div class="hover">
                                <h3>Michel Brown <span>Internet Specialist</span></h3>
                            </div>
                        </div>
                    </div><!-- /Team-4 -->
                </div>
            </div>
        </div>
    </div>
</section><!-- /Team Section --> --}}

{{-- <section id="counter" class="counter-section">
    <div class="container">
        <ul class="row counters">
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-money"></i>
                    <h3 class="counter">85389</h3>
                    <h4 class="text-white">Money Donated</h4>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-face-smile"></i>
                    <h3 class="counter">10693</h3>
                    <h4 class="text-white">Volunteer Around The World</h4>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-user"></i>
                    <h3 class="counter">50177</h3>
                    <h4 class="text-white">People Impacted</h4>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-comments"></i>
                    <h3 class="counter">669</h3>
                    <h4 class="text-white">Positive Feedbacks</h4>
                </div>
            </li>
        </ul>
    </div>
</section><!-- Counter Section --> --}}

{{-- <section class="events-section bg-grey bd-bottom padding">
   <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Upcoming Events</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div id="event-carousel" class="events-wrap owl-Carousel">
            <div class="events-item">
                <div class="event-thumb">
                   <img src="{{asset('template/img/events-1.jpg')}}" alt="events">
                </div>
                <div class="event-details">
                    <h3>Let's talk about the poor children.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-1 -->
            <div class="events-item">
                <div class="event-thumb">
                   <img src="{{asset('template/img/events-2.jpg')}}" alt="events">
                </div>
                <div class="event-details">
                    <h3>Insure clean water to everyone in Africa.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-2 -->
            <div class="events-item">
                <div class="event-thumb">
                   <img src="{{asset('template/img/events-3.jpg')}}" alt="events">
                </div>
                <div class="event-details">
                    <h3>Nepal Earthquake Clean Water Initiative.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-3 -->
        </div>
   </div>
</section><!-- Events Section --> --}}

{{-- <section class="testimonial-section bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>What People Say</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                   <img src="{{asset('template/img/team-1.jpg')}}" alt="profile">
                    <h4>Jonathan Smith <span>Marketer</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                   <img src="{{asset('template/img/team-2.jpg')}}" alt="profile">
                    <h4>Angelina Rose <span>Designer</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                   <img src="{{asset('template/img/team-3.jpg')}}" alt="profile">
                    <h4>Taylor Swift <span>Developer</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                   <img src="{{asset('template/img/team-4.jpg')}}" alt="profile">
                    <h4>Michel Brown <span>Programer</span></h4>
                </div>
            </div>
        </div>
    </div>
</section><!-- Testimonial Section --> --}}

{{-- <section class="blog-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Recent Stories</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <img src="{{asset('template/img/home-blog-1.jpg')}}" alt="blog post">
                            <div class="blog-content">
                                <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                <h3><a href="#">The History of Donation Told</a></h3>
                                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                <a href="#" class="post-meta">Read More</a>
                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <img src="{{asset('template/img/home-blog-2.jpg')}}" alt="blog post">
                            <div class="blog-content">
                                <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                <h3><a href="#">Help the Comunity</a></h3>
                                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                <a href="#" class="post-meta">Read More</a>
                            </div>
                        </div>
                    </div><!-- Post 2 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <img src="{{asset('template/img/home-blog-3.jpg')}}" alt="blog post">
                            <div class="blog-content">
                                <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                <h3><a href="#">Charity Ever Rule the World?</a></h3>
                                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                <a href="#" class="post-meta">Read More</a>
                            </div>
                        </div>
                    </div><!-- Post 3 -->
                </div>
            </div><!-- Blog Posts -->
        </div>
    </div>
</section><!-- Blog Section --> --}}

{{-- <div class="sponsor-section bd-bottom">
    <div class="container">
        <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
            <li class="sponsor-item">
                <img src="{{asset('template/img/sponsor-1.png')}}" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="{{asset('template/img/sponsor-2.png')}}" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="{{asset('template/img/sponsor-3.png')}}" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="{{asset('template/img/sponsor-4.png')}}" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="{{asset('template/img/sponsor-5.png')}}" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="{{asset('template/img/sponsor-6.png')}}" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="{{asset('template/img/sponsor-7.png')}}" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="{{asset('template/img/sponsor-8.png')}}" alt="sponsor-image">
            </li>
        </ul>
    </div>
</div><!-- ./Sponsor Section --> --}}




@endsection