{{-- [Home Page] --}}

@extends('layouts.app')

@section('title', 'ROC Bijlmer Airlines - Home')

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
                                    <div class="hero-image__searchbox-container">
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
                                                    alt="Beach with palm trees and turquoise water"
                                                    src="{{ asset('img/hero-img.png') }}"
                                                    style="aspect-ratio: 3/1;"
                                                >
                                            </picture>
                                        </div>
                                        <div class="homepage-hero-text hero-image__hero-text ng-star-inserted">
                                            <div class="hero-text ng-star-inserted">
                                                <h2 class="typo-headline-s hero-text__title">Hello Friend,</h2>
                                                <p class="typo-body-m-regular hero-text__subtitle">Where to next?</p>
                                                <div class="hero-text__price-cta">
                                                    <div class="homepage-hero-cta hero-text__link">
                                                        <a class="hero-cta__link ng-star-inserted" href="#" target="_blank">
                                                            <span class="hero-cta__text ng-star-inserted">Explore our offers</span>
                                                            <div class="icon--chevron-right ng-star-inserted" name="chevron-right" cropped="true">
                                                                <div role="img" class="mat-icon mat-icon-no-color" aria-hidden="true">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 9 15" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="m6 7.5-6-6L1.5 0 9 7.5 1.5 15 0 13.5z"></path></svg>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </main>

@endsection

