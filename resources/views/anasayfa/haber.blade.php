@extends('anasayfa.template')

@section('icerik')
    <div role="main" class="main">
        <section class="section section-tertiary section-no-border pb-md mt-none">
            <div class="container">
                <div class="row mt-xl">
                    <div class="col-md-10 col-md-offset-2 pt-xlg mt-xlg align-right">
                        <h1 class="text-uppercase font-weight-light mt-xl text-color-primary">Haber</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pt-sm">
                <div class="col-md-12">
                    <div class="blog-posts single-post mt-xl">

                        <article class="post post-large blog-single-post">

                            <div class="post-date">
                                <span class="day">{{date('d-m-y',strtotime($haber->created_at))}}</span>
                                <span class="month">{{date('m',strtotime($haber->created_at))}}</span>
                            </div>

                            <div class="post-content">

                                <h1 class="mb-md">{{$haber->baslik}}</h1>

                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>

                                <img src="/{{$haber->resim}}" class="img-responsive pull-right mb-md mb-xs ml-xl" alt="" style="width: 360px;">

                                <p>{!! $haber->icerik  !!}</p>

                                <div class="pt-sm pb-xs">
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                        <a class="addthis_button_tweet"></a>
                                        <a class="addthis_button_pinterest_pinit"></a>
                                        <a class="addthis_counter addthis_pill_style"></a>
                                    </div>
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                    <!-- AddThis Button END -->
                                </div>

                                <div class="post-block post-author mt-xl clearfix">
                                    <h4 class="mt-xl mb-md">Author</h4>
                                    <div class="img-thumbnail">
                                        <a href="blog-post.html">
                                            <img src="img/team/team-22.jpg" alt="">
                                        </a>
                                    </div>
                                    <p><strong class="name mb-md">John Doe</strong></p>
                                    <p class="mt-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat.</p>
                                </div>

                                <div class="post-block post-comments clearfix">
                                    <h4 class="mt-xl mb-md">Comments</h4>

                                    <ul class="comments">
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="" src="img/team/team-23.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
																<strong>John Doe</strong>
																<span class="pull-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                                                    <span class="date pull-right">November 12, 2016 at 1:38 pm</span>
                                                </div>
                                            </div>

                                            <ul class="comments reply">
                                                <li>
                                                    <div class="comment">
                                                        <div class="img-thumbnail">
                                                            <img class="avatar" alt="" src="img/team/team-24.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-arrow"></div>
                                                            <span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="pull-right">
																			<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                            <span class="date pull-right">November 12, 2016 at 1:38 pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comment">
                                                        <div class="img-thumbnail">
                                                            <img class="avatar" alt="" src="img/team/team-25.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-arrow"></div>
                                                            <span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="pull-right">
																			<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                            <span class="date pull-right">November 12, 2016 at 1:38 pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="" src="img/team/team-22.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
																<strong>John Doe</strong>
																<span class="pull-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <span class="date pull-right">November 12, 2016 at 1:38 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail">
                                                    <img class="avatar" alt="" src="img/team/team-22.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
																<strong>John Doe</strong>
																<span class="pull-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <span class="date pull-right">November 12, 2016 at 1:38 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                                <div class="post-block post-leave-comment mb-xl">
                                    <h4 class="mt-xl mb-md">Leave a Comment</h4>

                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>Your name *</label>
                                                    <input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Your email address *</label>
                                                    <input type="email" value="" maxlength="100" class="form-control" name="email" id="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Comment *</label>
                                                    <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </article>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Title page -->
   {{-- <section class="bg-img1 kit-overlay1" style="background-image: url(/anasayfa/images/bg-07.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
                Güncel Haberler
            </h2>

            <div class="flex-wr-c-c">
                <a href="{{route('anasayfa')}}" class="breadcrumb-item">
                    Anasayfa
                </a>

                <a href="{{route('haberler.goster')}}" class="breadcrumb-item">
                    Haberler
                </a>

                <span class="breadcrumb-item">
					{{$haber->baslik}}
				</span>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div class="bg-0 p-t-100 p-b-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-4 col-lg-3 p-b-30">
                    <!-- Left bar -->
                    <div>


                        <!-- Categories -->
                        <div class="p-b-32">
                            <h4 class="t1-m-1 text-uppercase cl-3 kit-underline1 p-b-6">
                                Hizmetlerimiz
                            </h4>

                            <ul class="p-t-22">

                                @foreach($hizmetler as $hizmet)
                                <li class="bo-b-1 bcl-14 m-b-18">
                                    <a href="/hizmet/{{$hizmet->id}}/{{$hizmet->slug}}" class="flex-wr-sb-c t1-s-5 cl-5 hov-link2 trans-02 p-tb-3">
										<span>
											{{$hizmet->hizmet_basligi}}
										</span>


                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                        <!--  -->
                        <div class="bg-11 p-all-30 m-b-46">
                            <p class="t1-m-1 cl-0 m-b-13">
                                Destek
                            </p>

                            <p class="t1-s-2 cl-15 m-b-25">
                                Daha fazla bilgi için bizim ile iletişime geçin.
                            </p>

                            <a href="{{route('iletisim.formu')}}" class="d-inline-flex flex-c-c size-a-1 bg-0 t1-s-2 cl-6 text-uppercase hov-btn1 trans-02 p-rl-10">
                               İletişim
                            </a>
                        </div>


                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-9 p-b-30">
                    <div class="p-l-50 p-l-15-sr991 p-l-0-sr767">
                        <!-- News detail -->
                        <div class="m-b-25">
                            <img class="m-b-45 max-s-full" src="/{{$haber->resim}}" alt="{{$haber->slug}}">

                            <h4 class="t1-b-3 cl-3 m-b-11">
                                {{$haber->baslik}}
                            </h4>

                            <div class="flex-wr-s-c m-b-11">
                                <div class="p-r-20">
                                    <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                    <span class="t1-s-2 cl-7">
										{{date('d-m-y',strtotime($haber->created_at))}}
									</span>
                                </div>

                                <div class="p-l-20 bo-l-1 bcl-12">
                                    <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                    <a href="#" class="t1-s-2 cl-11 hov-link3">

                                    </a>
                                </div>
                            </div>

                            <p class="t1-s-2 cl-6 m-b-9">
                                {!! $haber->icerik !!}
                            </p>




                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>--}}




@endsection

@section('css')

@endsection

@section('js')

@endsection