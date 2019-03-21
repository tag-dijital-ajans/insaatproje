@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ $gonder['siteadi'] }}
        @endcomponent
    @endslot

    {{-- Body --}}
   Gönderen: {{$gonder['ad']}}<br/>
   E-Mail Adresi: {{$gonder['email']}}<br/>
   Konu: {{$gonder['konu']}}<br/>
   Mesaj: {{$gonder['mesaj']}}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            {{ $gonder['siteadi'] }}
        @endcomponent
    @endslot
@endcomponent



