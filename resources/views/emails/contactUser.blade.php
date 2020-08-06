
@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Resto Admin
        @endcomponent
    @endslot
    {{-- Body --}}

 # Hello {{ $data['contact-name'] }}

*Bienvenue! Nous avonc reçu vos détails.<br />
Les détails sont:<br />
**Name :** {{ $data['contact-name'] }}<br />
**Email :** {{ $data['contact-email'] }}<br />
**Message :** {{ $data['contact-msg'] }}

Merci de nous avoir contacter! Nous allons vous répondre le plus tot possible.

Sincèrement,

    {{-- Footer --}}
    @slot('footer')
    @component('mail::footer')
    &copy; 2020 All Copy right reserved
@endcomponent
@endslot
@endcomponent
