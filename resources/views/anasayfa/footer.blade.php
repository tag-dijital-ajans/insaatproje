<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/">
                    <img alt="Porto" class="img-responsive logo" width="110" src="/{{$ayar->favicon}}">
                </a>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6 mb-sm">
                        <h4> Linkler</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list list-footer-nav">
                            @foreach($menuler as $menu)
                            <li>
                                <a href="/">
                                    {{$menu->menu_baslik}}
                                 </a>
                             </li>
                            @endforeach
                             <li>
                               <a href="{{route('projeleri.goster')}}">

                                     Projeler
                                 </a>
                             </li>
                                <li>
                                    <a href="{{route('hakkimizda.goster')}}">
                                        Hakkımızda
                                    </a>
                                </li>

                         </ul>
                     </div>
                     <div class="col-md-6">
                         <ul class="list list-footer-nav">

                             <li>
                                 <a href="{{route('iletisim.formu')}}">
                                     İletişim
                                 </a>
                             </li>
                             <li class="dropdown">
                                 <a class="dropdown-toggle" href="{{route('haberler.goster')}}">
                                     Haberler
                                 </a>
                             </li>
                             <li class="dropdown">
                                 <a class="dropdown-toggle" href="{{route('galeriler.goster')}}">
                                     Galeri
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-md-5">
                 <h4>Bülten</h4>

                 <div class="newsletter">

                     <div class="alert alert-success hidden" id="newsletterSuccess">
                         <strong>Success!</strong> You've been added to our email list.
                     </div>

                     <div class="alert alert-danger hidden" id="newsletterError"></div>

                     <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                         <div class="input-group">
                             <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                             <span class="input-group-btn">
                                             <button class="btn btn-default" type="submit"><i class="icon-paper-plane icons"></i></button>
                                         </span>
                         </div>
                     </form>

                 </div>

                 <p><i class="fa fa-phone"></i> {{$ayar->telefon}} <i class="fa fa-envelope ml-sm"></i> <a href="{{$ayar->email}}">{{$ayar->email}}</a></p>

            </div>
        </div>

        <div class="footer-copyright">
            <div class="row">
                <div class="col-md-12 center">
                    <p>© Copyright 2019. Tüm Hakları Saklıdır.</p>
                </div>
            </div>
        </div>

    </div>
</footer>

{{--
    <!-- Footer -->
    <footer>
        <div class="parallax100 kit-overlay1 p-t-35 p-b-10" style="background-image: url(/anasayfa/images/bg-03.jpg);">
            <div class="container">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e p-b-6 m-b-18">
                            <a href="#">
                                <img class="max-s-full" src="/{{$ayar->logo}}" width="140"height="75" alt="IMG">
                            </a>
                        </div>

                        <div>
                            <p class="t1-s-2 cl-13 p-b-17">
                                   {{$ayar->tag_manager_kod}}
                            </p>

                            <div class="flex-wr-s-c p-t-10">
                                <a href="{{$ayar->facebook}}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-google-plus"></i>
                                </a>

                                <a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-instagram"></i>
                                </a>

                                <a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e m-b-18">
                            <h4 class="t1-m-3 text-uppercase cl-0">
                                İletişim
                            </h4>
                        </div>

                        <ul>
                            <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
								<span class="size-w-3">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									{{$ayar->firma_adres}}
								</span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
								<span class="size-w-3">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									{{$ayar->email}}
								</span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
								<span class="size-w-3">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									{{$ayar->telefon}}
									<br>
									05389227347
								</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e m-b-18">
                            <h4 class="t1-m-3 text-uppercase cl-0">
                               Linkler
                            </h4>
                        </div>

                        <div class="flex-wr-s-s">

                            <ul class="w-50">

                                --}}
{{--@foreach($menuler as $menu)
                                <li class="kit-list1 p-b-9">
                                    <a href="index.html" class="t1-s-2 cl-13 hov-link2 trans-02">
                                        {{$menu->menu_baslik}}
                                    </a>
                                </li>

                               @endforeach--}}{{--

                                <li class="kit-list1 p-b-9">
                                    <a href="{{route('anasayfa')}}" class="t1-s-2 cl-13 hov-link2 trans-02">
                                       Anasayfa</a>
                                </li>
                                <li class="kit-list1 p-b-9">
                                    <a href="{{route('hizmetleri.goster')}}" class="t1-s-2 cl-13 hov-link2 trans-02">
                                        Haberler</a>
                                </li>
                                <li class="kit-list1 p-b-9">
                                 <a href="{{route('hizmetleri.goster')}}" class="t1-s-2 cl-13 hov-link2 trans-02">
                                    Hizmetler</a>
                                </li>
                               <li class="kit-list1 p-b-9">
                               <a href="{{route('iletisim.formu')}}" class="t1-s-2 cl-13 hov-link2 trans-02">
                                   İletişim</a>
                               </li>

                            </ul>



                        </div>
                    </div>

                    <div class="col-sm-8 col-md-6 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e m-b-18">
                            <h4 class="t1-m-3 text-uppercase cl-0">
                                Son Haberler
                            </h4>
                        </div>

                        <div class="flex-wr-s-s p-t-6 gallery-mp">
                            @foreach($footericerikler as $footericerik)

                            <a href="/haber/{{$footericerik->id}}/{{$footericerik->slug}}" class="d-block size-a-8 bg-img1 hov-overlay1 m-r-10 m-b-20" style="background-image: url(/{{$footericerik->resim}});"></a>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-10">
            <div class="container txt-center p-tb-15">
				<span class="t1-s-2 cl-14">
					Copyright @ 2019 Designed by Tag Ajans. Tüm Hakları Saklıdır.
				</span>
            </div>
        </div>
    </footer>
--}}
