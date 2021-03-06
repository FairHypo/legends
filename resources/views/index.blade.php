@extends('layout.mainlayout')

@section('content')

    <!-- Press Coverage -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="in-press press-wired">
                        <a href="{{ route('chatter.home') }}">Intelligence is the ability to adapt to change. P.S. ~Legends~ are cool!</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="in-press press-mashable">
                        <a href="{{ route('chatter.home') }}">Это самая крутая команда со времен Бонни и Клайда</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="in-press press-techcrunch">
                        <a href="{{ route('chatter.home') }}">Мы плёхо говорить по-русски, но знаем точно ~Legends~ - четкие.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Press Coverage -->

    <!-- Services -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper">
                        <img src="{{ asset('/img/service-icon/hr.png') }}" alt="Прием в клан">
                        <h3>Прием в клан</h3>
                        <p>Узнайте о правилах приема, пройдите собеседование в ТС, вступите в гильдию и получите доступ к клановому разделу.</p>
                        <a href="{{ url('/forums/category/hr') }}" class="btn">Подробнее</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper">
                        <img src="{{ asset('/img/service-icon/master.png') }}" alt="Интервью с мастером">
                        <h3>Интервью с мастером</h3>
                        <p>Dream_Ко, мастер клана ~Legends~, делится планами по развитию гильдии и рассказывает о своем игровом опыте.</p>
                        <a href="{{ route('interview') }}" class="btn">Подробнее</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper">
                        <img src="{{ asset('/img/service-icon/deep.png') }}" alt="Дипломатия">
                        <h3>Дипломатия</h3>
                        <p>Мы мирная ПВЕ-гильдия. Но если все же случился неприятный инцидент - добро пожаловать в соответствующий раздел.</p>
                        <a href="{{ url('/forums/category/killemall') }}" class="btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    {{--<!-- Call to Action Bar -->
    <div class="section section-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="calltoaction-wrapper">
                        <h3>It's a free multipurpose Bootstrap 3 template!</h3> <a href="http://www.dragdropsite.com" class="btn btn-orange">Download here!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call to Action Bar -->

    <!-- Testimonials -->
    <div class="section">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="row">
                <!-- Testimonial -->
                <div class="testimonial col-md-4 col-sm-6">
                    <!-- Author Photo -->
                    <div class="author-photo">
                        <img src="img/user1.jpg" alt="Author 1">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <!-- Quote -->
                            <p class="quote">
                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut."
                            </p>
                            <!-- Author Info -->
                            <cite class="author-info">
                                - Name Surname,<br>Managing Director at <a href="#">Some Company</a>
                            </cite>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
                <!-- End Testimonial -->
                <div class="testimonial col-md-4 col-sm-6">
                    <div class="author-photo">
                        <img src="img/user5.jpg" alt="Author 2">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <p class="quote">
                                "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
                            </p>
                            <cite class="author-info">
                                - Name Surname,<br>Managing Director at <a href="#">Some Company</a>
                            </cite>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
                <div class="testimonial col-md-4 col-sm-6">
                    <div class="author-photo">
                        <img src="img/user2.jpg" alt="Author 3">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <p class="quote">
                                "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
                            </p>
                            <cite class="author-info">
                                - Name Surname,<br>Managing Director at <a href="#">Some Company</a>
                            </cite>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Pricing Table -->
    <div class="section">
        <div class="container">
            <h2>Pricing</h2>
            <div class="row">
                <!-- Pricing Plans Wrapper -->
                <div class="pricing-wrapper col-md-12">
                    <!-- Pricing Plan -->
                    <div class="pricing-plan">
                        <!-- Pricing Plan Ribbon -->
                        <div class="ribbon-wrapper">
                            <div class="price-ribbon ribbon-red">Popular</div>
                        </div>
                        <h2 class="pricing-plan-title">Starter</h2>
                        <p class="pricing-plan-price">FREE</p>
                        <!-- Pricing Plan Features -->
                        <ul class="pricing-plan-features">
                            <li><strong>1</strong> user</li>
                            <li><strong>Unlimited</strong> projects</li>
                            <li><strong>2GB</strong> storage</li>
                        </ul>
                        <a href="index.html" class="btn">Order Now</a>
                    </div>
                    <!-- End Pricing Plan -->
                    <div class="pricing-plan">
                        <h2 class="pricing-plan-title">Advanced</h2>
                        <p class="pricing-plan-price">$49<span>/mo</span></p>
                        <ul class="pricing-plan-features">
                            <li><strong>10</strong> users</li>
                            <li><strong>Unlimited</strong> projects</li>
                            <li><strong>20GB</strong> storage</li>
                        </ul>
                        <a href="index.html" class="btn">Order Now</a>
                    </div>
                    <!-- Promoted Pricing Plan -->
                    <div class="pricing-plan pricing-plan-promote">
                        <h2 class="pricing-plan-title">Premium</h2>
                        <p class="pricing-plan-price">$99<span>/mo</span></p>
                        <ul class="pricing-plan-features">
                            <li><strong>Unlimited</strong> users</li>
                            <li><strong>Unlimited</strong> projects</li>
                            <li><strong>100GB</strong> storage</li>
                        </ul>
                        <a href="index.html" class="btn">Order Now</a>
                    </div>
                    <div class="pricing-plan">
                        <!-- Pricing Plan Ribbon -->
                        <div class="ribbon-wrapper">
                            <div class="price-ribbon ribbon-green">New</div>
                        </div>
                        <h2 class="pricing-plan-title">Mega</h2>
                        <p class="pricing-plan-price">$199<span>/mo</span></p>
                        <ul class="pricing-plan-features">
                            <li><strong>Unlimited</strong> users</li>
                            <li><strong>Unlimited</strong> projects</li>
                            <li><strong>100GB</strong> storage</li>
                        </ul>
                        <a href="index.html" class="btn">Order Now</a>
                    </div>
                </div>
                <!-- End Pricing Plans Wrapper -->
            </div>
        </div>
    </div>
    <!-- End Pricing Table -->

    <!-- Our Clients -->
    <div class="section">
        <div class="container">
            <h2>Our Clients</h2>
            <div class="clients-logo-wrapper text-center row">
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/canon.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/cisco.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/dell.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/ea.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/ebay.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/facebook.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/google.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/hp.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/microsoft.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/mysql.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/sony.png" alt="Client Name"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/yahoo.png" alt="Client Name"></a></div>
            </div>
        </div>
    </div>
    <!-- End Our Clients -->--}}

@endsection

<b></b>