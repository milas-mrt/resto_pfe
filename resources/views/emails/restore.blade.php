@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Resto Admin
        @endcomponent
    @endslot

    {{-- Body --}}
    # Hello  {!! $user['user_name'] !!},<br>

Bienvenue! Merci de cliquer sur le boutton ci-dessous pour récupérer votre compte:<br />
@component('mail::button', ['url' =>  $user['activationUrl']  ])
        Récupérer le compte
@endcomponent


    Merci,

    {{-- Footer --}}
    @slot('footer')
    @component('mail::footer')
    &copy; 2020 All Copy right received
@endcomponent
@endslot
@endcomponent