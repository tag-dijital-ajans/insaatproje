<!-- Partners -->
<section class="bg-0 p-t-92 p-b-40">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            <h3 class="t1-b-1 cl-3 txt-center m-b-11">
              Referanslarımız
            </h3>

            <div class="size-a-2 bg-3"></div>
        </div>

        <!--  -->
        <div class="row justify-content-center">

            @foreach ($partners as $partner)
            <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                <a href="#">
                    <img class="hov-img2 trans-02 max-s-full" src="{{$partner->referans_gorseli}}" width="150" height="120" alt="IMG">
                </a>
            </div>
@endforeach

        </div>
    </div>
</section>
