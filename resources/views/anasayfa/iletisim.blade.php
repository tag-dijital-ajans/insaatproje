@extends ('anasayfa.template')

@section('icerik')

    <div role="main" class="main">
        <section class="section section-tertiary section-no-border pb-md mt-none">
            <div class="container">
                <div class="row mt-xl">
                    <div class="col-md-10 col-md-offset-2 pt-xlg mt-xlg align-right">
                        <h1 class="text-uppercase font-weight-light mt-xl text-color-primary">İLETİŞİM</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pt-xl mb-xl">
                <div class="col-md-7">

                    <h2 class="mb-none">Bize Mesaj Gönderin</h2>

                    <p class="lead mb-xl mt-xs">Size nasıl yardımcı olabileceğimizi öğrenmek için bizimle iletişime geçin veya bizi arayın.</p>

                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                        <strong>Başarılı!</strong> Mesajınız Başarılı Bir Şekilde Gönderildi.
                    </div>

                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                        <strong>Hata!</strong> Mesajınız Gönderilirken Bir Hata Oluştu.
                        <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                    </div>

                    <form id="contactForm" action="php/contact-form.php" method="POST">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Adınız" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" placeholder=" E-mailiniz" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Konu" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea maxlength="5000" placeholder="Mesaj" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Mesajı Gönder" class="btn btn-primary mb-xlg" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-4 col-md-offset-1">

                    <h4 class="text-color-dark mb-xs pb-md">İş Yeri Haritası</h4>

                    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                    <div id="googlemaps" class="google-map small">{!! $ayar->tag_manager_script !!}</div>


                    <ul class="list list-icons mt-xlg mb-xlg">
                        <li><i class="icon-pin icons"></i> <strong>Adres:</strong> {{$ayar->firma_adres}}</li>
                        <li><i class="icon-call-end icons"></i> <strong>Telefon:</strong> {{$ayar->telefon}}</li>
                        <li><i class="icon-envelope icons"></i> <strong>E-mail:</strong> <a href="{{$ayar->email}}">{{$ayar->email}}</a></li>
                    </ul>

                </div>
            </div>

        </div>
    </div>

    <!--A Design by W3layouts
 Author: W3layout
 Author URL: http://w3layouts.com
 License: Creative Commons Attribution 3.0 Unported
 License URL: http://creativecommons.org/licenses/by/3.0/
 -->






   {{-- <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url(/anasayfa/images/bg-05.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Bizimle İletişime Geçin
            </h2>

            <div class="flex-wr-c-c">
                <a href="/iletisim" class="breadcrumb-item">
                    Anasayfa
                </a>

                <span class="breadcrumb-item">
					 Bizimle İletişime Geçin
				</span>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="bg-0 p-t-95 p-b-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-6 p-b-60">
                    <h3 class="t1-m-5 cl-3 m-b-44">
                        Bize Mesaj Gönderin
                    </h3>

                    <form id="contact-form" class="validate-form" method="post" action="{{route('iletisimformu.gondeer')}}" name="contact">
                        {{csrf_field()}}
                        <div class="m-b-15 validate-input" data-validate = "Name is required">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="ad" placeholder="Adınız" required>
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="Email Adresiniz" required>
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Phone is required">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="konu" placeholder="Konu Başlığı" required>
                        </div>

                        <div class="m-b-30 validate-input" data-validate = "Message is required">
                            <textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="mesaj" placeholder="Mesajınız" required></textarea>
                        </div>

                        <button class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15">
                            Gönder
                        </button>
                    </form>
                </div>

                <div class="col-sm-10 col-md-6 p-b-60">
                    <div class="p-l-30 p-l-0-sr767">
                        <h3 class="t1-m-5 cl-3 m-b-38">
                            İletişim bilgilerimiz
                        </h3>

                        <p class="t1-s-2 cl-6 m-b-9">
{{$ayar->tag_manager_kod}}
                        </p>

                        <ul class="p-t-11">
                            <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									{{$ayar->firma_adres}}
								</span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									{{$ayar->email}}
								</span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									{{$ayar->telefon}}
								</span>
                                <span class="size-w-3 cl-5">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
                                <span class="size-w-4">
									   (+90) 538 922 73 47
								</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <div class="map">
        {!! $ayar->tag_manager_script !!}
        </div>--}}
@endsection

@section('css')

@endsection


@section('js')


@endsection