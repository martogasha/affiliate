@component('mail::message')
    @component('mail::button', ['url'=>'https://affiliate.iconztech.com'])
        Click Here {{$name}}
    @endcomponent
@endcomponent
