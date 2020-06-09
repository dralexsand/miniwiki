@extends('layouts.home')

@section('content')
    @include('layouts.parts.header')

    <div role="main" class="main">

        @include('layouts.parts.page_header_about')

        <div class="container pb-1">

            <div class="row pt-4">
                <div class="col">
                    <div class="overflow-hidden mb-3">
                        <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation animated maskUp appear-animation-visible"
                            data-appear-animation="maskUp" style="animation-delay: 100ms;">
                            <span>The New Way to </span>
                            <span class="word-rotator-words bg-primary" style="width: 144.783px;">
										<b class="is-hidden">Success</b>
										<b class="is-visible">Advance</b>
										<b class="is-hidden">Progress</b>
									</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-10">
                    <div class="overflow-hidden">
                        <p class="lead mb-0 appear-animation animated maskUp appear-animation-visible"
                           data-appear-animation="maskUp" data-appear-animation-delay="250"
                           style="animation-delay: 250ms;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque
                            imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span>
                            pulvinar. Sociis natoque penatibus et magnis dis parturient montes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 appear-animation animated fadeIn appear-animation-visible"
                     data-appear-animation="fadeIn" data-appear-animation-delay="450" style="animation-delay: 450ms;">
                    <a href="#" class="btn btn-modern btn-primary mt-1">Join Our Team!</a>
                </div>
            </div>
        </div>
        <section class="section section-default border-0 my-5 appear-animation animated fadeIn appear-animation-visible"
                 data-appear-animation="fadeIn" data-appear-animation-delay="750" style="animation-delay: 750ms;">
            <div class="container py-4">

                <div class="row align-items-center">
                    <div class="col-md-6 appear-animation animated fadeInLeftShorter appear-animation-visible"
                         data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000"
                         style="animation-delay: 1000ms;">
                        <div class="owl-carousel owl-theme nav-inside mb-0 owl-loaded owl-drag owl-carousel-init"
                             data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}"
                             style="height: auto;">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(-1650px, 0px, 0px); transition: all 0s ease 0s; width: 3300px;">
                                    <div class="owl-item cloned" style="width: 540px; margin-right: 10px;">
                                        <div>
                                            <img alt="" class="img-fluid"
                                                 src="img/generic/generic-corporate-3-2-full.jpg">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 540px; margin-right: 10px;">
                                        <div>
                                            <img alt="" class="img-fluid"
                                                 src="img/generic/generic-corporate-3-3-full.jpg">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 540px; margin-right: 10px;">
                                        <div>
                                            <img alt="" class="img-fluid"
                                                 src="img/generic/generic-corporate-3-2-full.jpg">
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 540px; margin-right: 10px;">
                                        <div>
                                            <img alt="" class="img-fluid"
                                                 src="img/generic/generic-corporate-3-3-full.jpg">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 540px; margin-right: 10px;">
                                        <div>
                                            <img alt="" class="img-fluid"
                                                 src="img/generic/generic-corporate-3-2-full.jpg">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 540px; margin-right: 10px;">
                                        <div>
                                            <img alt="" class="img-fluid"
                                                 src="img/generic/generic-corporate-3-3-full.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"></button>
                                <button type="button" role="presentation" class="owl-next"></button>
                            </div>
                            <div class="owl-dots">
                                <button role="button" class="owl-dot"><span></span></button>
                                <button role="button" class="owl-dot active"><span></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                                data-appear-animation="maskUp" data-appear-animation-delay="1200"
                                style="animation-delay: 1200ms;">Who <strong class="font-weight-extra-bold">We
                                    Are</strong></h2>
                        </div>
                        <p class="appear-animation animated fadeInUpShorter appear-animation-visible"
                           data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400"
                           style="animation-delay: 1400ms;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius,
                            elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia
                            vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                        <p class="mb-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                           data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600"
                           style="animation-delay: 1600ms;">Consectetur adipiscing elit. Aliquam iaculis sit amet enim
                            ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
                    </div>
                </div>

            </div>
        </section>

        <div class="container">

            <div class="row mt-5 py-3">
                <div class="col-md-6">
                    <div class="toggle toggle-primary toggle-simple m-0" data-plugin-toggle="">
                        <section class="toggle active mt-0">
                            <label>Our Vision</label>
                            <div class="toggle-content" style="display: block;">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque
                                    eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.
                                    Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. Etiam nec
                                    viverra arcu. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>Our Mission</label>
                            <div class="toggle-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit
                                    imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam
                                    tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit
                                    amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere
                                    auctor.</p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="progress-bars">
                        <div class="progress-label">
                            <span class="text-1">HTML/CSS</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%"
                                 style="width: 100%;">
                                <span class="progress-bar-tooltip" style="opacity: 1;">100%</span>
                            </div>
                        </div>
                        <div class="progress-label">
                            <span class="text-1">Design</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%"
                                 data-appear-animation-delay="300" style="width: 85%;">
                                <span class="progress-bar-tooltip" style="opacity: 1;">85%</span>
                            </div>
                        </div>
                        <div class="progress-label">
                            <span class="text-1">WordPress</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%"
                                 data-appear-animation-delay="600" style="width: 75%;">
                                <span class="progress-bar-tooltip" style="opacity: 1;">75%</span>
                            </div>
                        </div>
                        <div class="progress-label">
                            <span class="text-1">Photoshop</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%"
                                 data-appear-animation-delay="900" style="width: 85%;">
                                <span class="progress-bar-tooltip" style="opacity: 1;">85%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col py-4">
                    <hr class="solid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-md-auto text-center">

                    <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-2">Our <strong
                            class="font-weight-extra-bold">History</strong></h2>
                    <p>How we started, lorem ipsum dolor sit amet, consectetur adipiscing elit ac laoreet libero.</p>

                    <section class="timeline" id="timeline">
                        <div class="timeline-body">
                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">2018</h3>
                            </div>

                            <article
                                class="timeline-box left text-left appear-animation animated fadeIn appear-animation-visible"
                                data-appear-animation="fadeIn" data-appear-animation-delay="200"
                                style="animation-delay: 200ms;">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <img alt="" class="img-fluid" src="img/history/history-3.jpg">
                                    <h3 class="font-weight-bold text-3 mt-3 mb-1">New Office</h3>
                                    <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Fusce elementum, nulla vel pellentesque consequat, ante.</p>
                                </div>
                            </article>

                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">2012</h3>
                            </div>

                            <article
                                class="timeline-box right text-left appear-animation animated fadeIn appear-animation-visible"
                                data-appear-animation="fadeIn" data-appear-animation-delay="400"
                                style="animation-delay: 400ms;">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <img alt="" class="img-fluid" src="img/history/history-2.jpg">
                                    <h3 class="font-weight-bold text-3 mt-3 mb-1">New Partners</h3>
                                    <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Fusce elementum, nulla vel pellentesque consequat.</p>
                                </div>
                            </article>

                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">2006</h3>
                            </div>

                            <article
                                class="timeline-box left text-left appear-animation animated fadeIn appear-animation-visible"
                                data-appear-animation="fadeIn" data-appear-animation-delay="600"
                                style="animation-delay: 600ms;">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <img alt="" class="img-fluid" src="img/history/history-1.jpg">
                                    <h3 class="font-weight-bold text-3 mt-3 mb-1">Foundation</h3>
                                    <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Fusce elementum, nulla vel consequat, ante.</p>
                                </div>
                            </article>
                        </div>
                    </section>

                </div>
            </div>

        </div>

        <section class="section section-default border-0 my-5">
            <div class="container py-4">

                <div class="row">
                    <div class="col pb-4 text-center">
                        <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-2">Meet <strong
                                class="font-weight-extra-bold">Our Team</strong></h2>
                        <p>Rockstars lorem ipsum dolor sit amet, consectetur adipiscing elit ac laoreet libero.</p>
                    </div>
                </div>
                <div class="row pb-4 mb-2">
                    <div
                        class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible"
                        data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="img/team/team-1.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">John Doe</span>
												<span class="thumb-info-type">CEO</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="http://www.facebook.com"><i
                                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i
                                                    class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                    <div
                        class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                        style="animation-delay: 200ms;">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="img/team/team-2.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Jessica Doe</span>
												<span class="thumb-info-type">Marketing</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="http://www.facebook.com"><i
                                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i
                                                    class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                    <div
                        class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation animated fadeInRightShorter appear-animation-visible"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"
                        style="animation-delay: 400ms;">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="img/team/team-3.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Rick Edward Doe</span>
												<span class="thumb-info-type">Developer</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="http://www.facebook.com"><i
                                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i
                                                    class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-sm-6 col-lg-3 appear-animation animated fadeInRightShorter appear-animation-visible"
                         data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"
                         style="animation-delay: 600ms;">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="img/team/team-4.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Melinda Wolosky</span>
												<span class="thumb-info-type">Design</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="http://www.facebook.com"><i
                                                    class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i
                                                    class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row py-5 my-5">
                <div class="col">

                    <div class="owl-carousel owl-theme mb-0 owl-loaded owl-drag owl-carousel-init"
                         data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}"
                         style="height: auto;">

                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(-1585px, 0px, 0px); transition: all 0.25s ease 0s; width: 3489px;">
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-3.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-5.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-6.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-1.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-3.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-5.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-6.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-1.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-3.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-5.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-6.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 158.571px;">
                                    <div>
                                        <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"></button>
                            <button type="button" role="presentation" class="owl-next"></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    @include('layouts.parts.footer')
@endsection
