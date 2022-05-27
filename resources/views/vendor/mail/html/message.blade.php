@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{-- {{ config('app.name') }} --}}
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

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
        {{ '38, Diya Street, Ifako Gbagada, Lagos' }} <br>
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        {{ 'Supported & Powered by' }} . <a href="http://ekodrop.ng" style="text-decoration: underline">Ekodrop</a><br>

        @endcomponent
    @endslot
@endcomponent
