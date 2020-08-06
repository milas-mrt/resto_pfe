

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
           Resto Admin
        @endcomponent
    @endslot

    {{-- Body --}}
# Hello

Nous avons reçu un nouveau mail de contact<br />
**Name :** {{ $data['contact-name'] }}<br />
**Email :** {{ $data['contact-email'] }}<br />
**Message :** {{ $data['contact-msg'] }}


Merci,

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
           &copy; 2020 All Copy right reserved
        @endcomponent
    @endslot
@endcomponent
