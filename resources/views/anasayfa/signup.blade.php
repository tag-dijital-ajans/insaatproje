@extends ('anasayfa.template')

@section('icerik')

    <!-- Sign up -->
    <section class="bg-0 p-t-92 p-b-90">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-44">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Sign Up
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="size-w-1 m-rl-auto">
                <p class="size-w-2 m-rl-auto t1-s-2 cl6 txt-center p-b-13">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua
                </p>

                <form class="flex-wr-c-c">
                    <input class="size-a-5 bo-all-1 bcl-11 t1-m-2 cl-6 plh-6 p-rl-20 w-full-sr575 m-tb-10" type="text" name="email" placeholder="email@example.com">

                    <button class="size-a-6 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 m-tb-10">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection

@section('css')

@endsection

@section('js')

@endsection