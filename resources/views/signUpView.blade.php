@component('mail::message')
    <p>Thank you <b style="color: #0a0a0a">{{$name}}</b> for Signing Up. Click the link below to start</p>
    @component('mail::button', ['url'=>'https://affiliate.iconztech.com'])
        Click Here
    @endcomponent
@endcomponent
