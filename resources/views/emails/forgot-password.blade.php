

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Resto Admin
        @endcomponent
    @endslot

    {{-- Body --}}

    # Hello  {!! $user['user_name'] !!},<br>

    Please click on the following link to updated your password
@component('mail::button', ['url' =>  $user['forgotPasswordUrl'] ])
        Rénitialiser le mot de passe
        @endcomponent


    Merci,

    {{-- Footer --}}
    @slot('footer')
    @component('mail::footer')
    &copy; 2020 All Copy right received
@endcomponent
@endslot
@endcomponent
