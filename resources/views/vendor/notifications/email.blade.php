@component('mail::message')
<div style="width:100%;
        display:flex;justify-content:center;align-items:center;margin-bottom:20px">
    <div style="width:100%;
            display:flex;
            justify-content:center;
            items-center;">
        <img style="margin-bottom:20px" src='https://drive.google.com/uc?id=1_mFegyRAIeqylXQZ07-zDCfCrZmUo_zO'  alt='logo' width='100%' height='100%' />
    </div>

</div>
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hello!')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Regards'),<br>
{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
<div style="width:100%;
        display:flex;justify-content:center;align-items:center">
    <a 
        href="http://ekodrop.ng" 
        style="width:100%;
            display:flex;
            justify-content:center !important;
            items-center;
            margin-top:4px;
            margin-botom:4px !important;">
        <img style="margin-bottom:20px;margin:auto" src='https://drive.google.com/uc?id=1EaxPdlOvNUW9HH-cQiuEFLBZvgkcFSe6'  alt='logo' width='auto' height='30' />
    </a>
</div>
@endcomponent
