@extends ('anasayfa.template')

@section('icerik')
    <div role="main" class="main">
        <section class="section section-tertiary section-no-border pb-md mt-none">
            <div class="container">
                <div class="row mt-xl">
                    <div class="col-md-10 col-md-offset-2 pt-xlg mt-xlg align-right">
                        <h1 class="text-uppercase font-weight-light mt-xl text-color-primary">Hizmetler</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pt-sm mb-xl">
                <div class="col-md-3">
                    <aside class="sidebar">

                        <ul class="nav nav-list mb-xl show-bg-active">
                            <li><a href="demo-construction-services.html">genel bakış</a></li>
                            <li><a href="demo-construction-services-detail.html">  İnşaat öncesi</a></li>
                            <li class="active"><a href="demo-construction-services-detail.html">  Genel yapı</a></li>
                            <li><a href="demo-construction-services-detail.html">su tesisatı</a></li>
                            <li><a href="demo-construction-services-detail.html">boyama</a></li>
                        </ul>




                        <h4 class="pt-xl mb-md text-color-dark">bizimle iletişime geçin</h4>
                        <p>Size nasıl yardımcı olabileceğimizi öğrenmek için bizimle iletişime geçin veya bizi arayın.</p>

                        <form id="contactForm" action="php/contact-form.php" method="POST" class="mb-xlg">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Your name *</label>
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Your email address *</label>
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Subject</label>
                                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Message *</label>
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary mb-xl" data-loading-text="Loading...">

                                    <div class="alert alert-success hidden" id="contactSuccess">
                                        Message has been sent to us.
                                    </div>

                                    <div class="alert alert-danger hidden" id="contactError">
                                        Error sending your message.
                                    </div>
                                </div>
                            </div>
                        </form>

                    </aside>

                </div>
                <div class="col-md-9">
                    @foreach($services as $service)

                    <h2 class="mb-sm">{{$service->hizmet_basligi}}</h2>

                    <img class="img-responsive pull-right ml-xlg mb-xl mt-xl" src="img/demos/construction/icons/construction.png" alt="" />

                    <p class="lead mb-xl mt-lg">{{$service->hizmet_icerik}}</p>

                    <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

                    <div class="row">
                        <div class="col-md-5">
                            <p class="pb-xl">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat. Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare.</p>
                        </div>
                        <div class="col-md-7">
                            <div class="nivo-slider pb-xl mb-xl">
                                <div class="slider-wrapper theme-default">
                                    <div id="nivoSlider" class="nivoSlider mt-none mb-xlg">
                                        <img src="img/demos/construction/slides/slide-construction-small-1.jpg" data-thumb="img/demos/construction/slides/slide-construction-small-1.jpg" alt="" />
                                        <img src="img/demos/construction/slides/slide-construction-small-2.jpg" data-thumb="img/demos/construction/slides/slide-construction-small-2.jpg" alt="" />
                                        <img src="img/demos/construction/slides/slide-construction-small-3.jpg" data-thumb="img/demos/construction/slides/slide-construction-small-3.jpg" alt="" />
                                        <img src="img/demos/construction/slides/slide-construction-small-4.jpg" data-thumb="img/demos/construction/slides/slide-construction-small-4.jpg" alt="" />
                                    </div>
                                    <div id="htmlcaption" class="nivo-html-caption"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

                    <h4 class="mt-xlg mb-md">Our Process</h4>

                    <ul class="list list-icons list-primary mt-xl mb-xlg">
                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fa fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fa fa-check"></i> Amet orci quis arcu vestibulum vestibulum.</li>
                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fa fa-check"></i> Orci quis arcu vestibulum vestibulum.</li>
                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fa fa-check"></i> Fuscesit amet orci quis arcu vestibulum vestibulum.</li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection