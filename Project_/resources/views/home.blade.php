{{-- [Home Page] --}}

@extends('layouts.app')

@section('title', 'Welcome!  Home')

@push('styles')
    {{-- @vite('resources/css/home.css') --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <main role="main" id="main-content-sticky-spacer" class="page-template__content__main-view">
        <!---->
        <!---->
        <div class="main-view">
            <div class="homepage-app-root ng-star-inserted">
                <div class="homepage-hero-section">
                    <div class="page-layout__extra-large">
                        <!---->
                        <div class="homepage-hero-image">
                            <div class="hero-image">
                                <div class="hero-image__container">
                                    {{-- SEARCHBOX CONTAINER --}}
                                    <div class="hero-image__searchbox-container"></div>
                                    <div class="hero-image__searchbox">
                                        <!---->
                                        <div class="hero-image__image ng-star-inserted">
                                            <!---->
                                            <picture class="ng-star-inserted">
                                                {{-- <img class="hero-image" width="1440" height="480" loading="eager" fetchpriority="high" alt="Beach with palm trees and turquoise water" src="{{ asset('resources/img/hero-img.png') }}" style="aspect-ratio: 3/1;"> --}}
                                                <img
                                                    class="hero-image"
                                                    width="1440"
                                                    height="480"
                                                    loading="eager"
                                                    fetchpriority="high"
                                                    alt="Landschap van Smilde, Drenthe"
                                                    src="{{ asset('img/smilde2.jpg') }}"
                                                    style="aspect-ratio: 3/1;"
                                                >
                                            </picture>
                                        </div>
                                        {{-- Hero --}}
                                        <section class="hp-hero">

                                            <div class="hp-shell hp-hero__inner">

                                                {{-- Booking widget --}}
                                                {{-- <form class="bw" method="GET" action="/nl/flights/search"> --}}
                                                <form class="bw" method="POST" action="#">
                                                    {{-- Tabs boven de card (zoals screenshot) --}}
                                                    <div class="bw__tabs">
                                                        <button type="button" class="bw-tab is-active" data-tab="book">
                                                            ✈ Zoek een vlucht
                                                        </button>
                                                    </div>

                                                    <div class="bw__card">
                                                        {{-- Rij 1 --}}
                                                        <div class="bw__grid bw__grid--top">
                                                            <div class="bw-field">
                                                                <div class="bwc-select-wrapper">
                                                                    <select id="trip_type" name="trip_type" class="bwc-select">
                                                                        <option value="roundtrip" selected>Retour</option>
                                                                        <option value="oneway">Enkele reis</option>
                                                                        <option value="multicity">Multi-stad</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="bw-search-widget__flight">
                                                                <div class="bwc-input-wrapper">
                                                                    <input
                                                                        class="bwc-input"
                                                                        id="from"
                                                                        name="from"
                                                                        type="text"
                                                                        list="airports-list"
                                                                        value="{{ request('from') }}"
                                                                        placeholder="Vertrek"
                                                                        required
                                                                    >
                                                                </div>
                                                            </div>

                                                            <div class="bw-search-widget__flight">
                                                                <div class="bwc-input-wrapper">
                                                                    <input
                                                                        class="bwc-input"
                                                                        id="to"
                                                                        name="to"
                                                                        type="text"
                                                                        list="airports-list"
                                                                        value="{{ request('to') }}"
                                                                        placeholder="Bestemming"
                                                                        required
                                                                    >

                                                                    <datalist id="airports-list">
                                                                        {{-- @foreach($airports as $a)
                                                                            <option value="{{ $a->city }} ({{ $a->iata }})">
                                                                                {{ $a->name }} — {{ $a->country }}
                                                                            </option>
                                                                        @endforeach --}}
                                                                    </datalist>
                                                                </div>
                                                                <p class="bw-error" hidden>Please enter an arrival city.</p>
                                                            </div>
                                                        </div>

                                                        {{-- Rij 2 --}}
                                                        <div class="bw__grid bw__grid--mid">
                                                            {{-- “Travel dates” zoals screenshot (1 blok) --}}
                                                            <div class="bw-dates" id="bwDates">
                                                            <div class="bw-dates__inputs">
                                                                <input
                                                                    type="date"
                                                                    id="departure_date"
                                                                    name="departure_date"
                                                                    class="bwc-input bw-dates__input"
                                                                    required
                                                                >

                                                                <input
                                                                    type="date"
                                                                    id="return_date"
                                                                    name="return_date"
                                                                    class="bwc-input bw-dates__input"
                                                                >
                                                            </div>

                                                            {{-- <button type="button" class="bw-dates__clear" aria-label="Clear dates">×</button> --}}
                                                            </div>

                                                            <div class="bw-field">
                                                                <div class="bwc-select-wrapper">
                                                                    <select id="pax" name="pax" class="bwc-select">
                                                                        <option value="1" selected>1 persoon</option>
                                                                        @for($i=2;$i<=9;$i++)
                                                                            <option value="{{ $i }}">{{ $i }} personen</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="bw-field">
                                                                <div class="bwc-select-wrapper">
                                                                    <select id="cabin" name="class" class="bwc-select">
                                                                        <option value="economy" selected>Economie</option>
                                                                        <option value="premium_comfort">Premium Comfort</option>
                                                                        <option value="business">Business klasse</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Button rechtsonder --}}
                                                        <div class="bw__actions">
                                                            <button class="bw-cta" type="submit">Zoeken</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </section>

                                        

                                        <div class="homepage-hero-text hero-image__hero-text">
                                            <div class="hero-text">
                                                <h2 class="hero-text__title">Smilde, Drenthe</h2>
                                                <p class="hero-text__subtitle">
                                                    Daar waar het leven nog altijd goed is
                                                </p>

                                                <a class="hero-cta__link" href="#">
                                                    Learn more
                                                    <span class="chevron">›</span>
                                                </a>
                                            </div>
                                        </div>

                        {{-- CONTENT: DESTINATIONS AND DEALS --}}
                                        <div class="homepage__content page-layout__medium">
                                            <div class="homepage-offers-block offers-block">
                                                <!---->
                                                <h2 class="typo-headline-m ng-star-inserted">Limited time offers</h2>
                                                <div class="mat-tab-group offers-block__tabs">
                                                    <div class="mat-tab-header">
                                                        <div class="mat-tab-label-container">
                                                            <div role="tablist" class="mat-tab-list" style="transform: translateX(0px);">
                                                                <div class="mat-tab-labels">
                                                                    <div role="tab" class="mat-tab mat-focus-indicator tab--active" id="offers-block__deals-tab" tabindex="0" aria-selected="true">
                                                                        <span class="tab__content">
                                                                            <span class="mdc-tab__text-label"><!---->Flights<!----></span>
                                                                        </span>
                                                                        <span class="tab-indicator">
                                                                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div>
                                                </div>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

@endsection

