@extends('layouts/default')

{{-- Page title --}}
@section('title')
Timeline
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/timeline1.css') }}">
<link href="{{ asset('vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
@stop

{{-- breadcrumb --}}
@section('top')
<div class="breadcum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                        </a>
                    </li>
                    <li class="d-none d-sm-block ">
                        <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                            data-c="#01bc8c" data-hc="#01bc8c"></i>
                        <a href="#">Chronologie</a>
                    </li>
                </ol>
                <div class="float-right mt-1">
                    <i class="livicon icon3" data-name="clock" data-size="20" data-loop="true" data-c="#3d3d3d"
                        data-hc="#3d3d3d"></i> Chronologie
                </div>
            </div>
        </div>

    </div>
</div>
@stop


{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="col-12 mx-auto">
            <ul class="timeline">
                <!-- Item 1 -->
                <li>
                    <div class="direction-r wow slideInRight" data-wow-duration="1s">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag">10 clients inscrits</span>
                            <span class="time-wrapper"><span class="time">15 Aout 2020</span></span>
                        </div>
                        <div class="desc">Notre communauté se grandit jour après jour, merci à vous</div>
                    </div>
                </li>

                <!-- Item 2 -->
                <li>
                    <div class="direction-l wow slideInLeft" data-wow-duration="1s">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag"> Réception du primier ministre.</span>
                            <span class="time-wrapper"><span class="time">11 Aout 2020</span></span>
                        </div>
                        <div class="desc">C'était un jour pas comme les autres, le premier ministre nous en a rendu une visite </div>
                    </div>
                </li>

                <!-- Item 3 -->
                <li>
                    <div class="direction-r wow slideInRight" data-wow-duration="1s">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag">Première livraison.</span>
                            <span class="time-wrapper"><span class="time">06 Aout 2020</span></span>
                        </div>
                        <div class="desc">Après un grand travail fait par toute l'équipe, nous avons réalisé notre première livraison, génial non !!</div>
                    </div>
                </li>

                <li>
                    <div class="direction-l wow slideInLeft" data-wow-duration="1s">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag">Première réservation.</span>
                            <span class="time-wrapper"><span class="time">25 Juillet 2020</span></span>
                        </div>
                        <div class="desc">Recevoir la première réservation est un souvenir qui va rester à jamais.</div>
                    </div>
                </li>

                <!-- Item 5 -->
                <li>
                    <div class="direction-r wow slideInRight" data-wow-duration="1s">
                        <div class="flag-wrapper">
                            <span class="hexa"></span>
                            <span class="flag">Premier client inscrit !!</span>
                            <span class="time-wrapper"><span class="time">24 Juillet  2020</span></span>
                        </div>
                        <div class="desc">C'est un jour merveilleux, avoir le premier client insrit sur notre site nous en rend heureux et fiers </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- //Content Section End -->
    </div>
</div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
            new WOW().init();
        });
</script>

@stop