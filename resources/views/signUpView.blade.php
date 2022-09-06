@component('mail::message')
    <p>Thank you {{$name}} for Signing Up. Click the link below to start</p>
    @component('mail::button', ['url'=>'https://affiliate.iconztech.com'])
        Click Here
    @endcomponent
@endcomponent
