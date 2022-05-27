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


# New Message From {{ $mailrequest->first_name }}

Hi Ekodrop <br>


Email - {{ $mailrequest->email }}


{{ $mailrequest->message }}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
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
