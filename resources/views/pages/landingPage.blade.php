@extends('layouts.app')

@section('cssInject')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
@endsection

@section('navbar')
    @include('components.navbar.default')
@endsection

@section('main')
    {{-- * Hero * --}}
    <div class="d-md-flex mt-md-4" style="margin-top:127px; height: 520px">
        <div class="container-md px-md-2.5 mt-md-20">
            <div class="container col-xl-10 col-xxl-8 h-100 d-md-flex align-items-center justify-content-center">
                <div class="row align-items-center g-lg-5 h-md-100">
                    <div class="col-lg-7 text-center text-lg-start p-0 mt-0">
                        <x-logo src="http://localhost:8000/img/logo-horizontal.svg" height="150px" href="" />

                        <p class="col fs-6">Satu Semangat, Satu Platform, Menuju Pemerintahan
                            Digital Lombok Tengah yang MASMIRAH</p>

                        <div class="d-flex w-100 gap-2" style="height: 8px">
                            <span class="bg-primary h-100 rounded-4" style="width: 11%"></span>
                            <span class="bg-secondary h-100 rounded-4" style="width: 4%"></span>
                        </div>
                    </div>
                    <div class="col-md-10 mx-auto col-lg-5">

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- * Hero * --}}

    {{-- * Background Hero * --}}
    <div class="position-absolute top-0 d-flex w-100 z-n1" style="left:22%; height: 700px;">
        <img class="img-fluid flex-fill" src="{{ URL::asset('/img/bg-hero.png') }}" alt="bg hero" style="max-width:110%">
    </div>
    {{-- * Background Hero * --}}

    {{-- * Kolaborasi Dinas * --}}
    <div class="container-md px-md-2.5 mt-md-20" style="height:250px">
        <div class="container-fluid h-100 bg-white shadow rounded-4 p-4">
            <p class="w-100 text-center fs-6">Kolaborasi dengan Dinas</p>
            <hr class="my-1">
            <x-swiper-slide />
            <hr class="my-1">
        </div>
    </div>
@endsection

@section('jsInject')
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            loop: true,
        });
    </script>
    <script>
        document.addEventListener('keydown', function(event) {
            // Check if Ctrl is pressed and the key is 'k' (case-insensitive)
            if (event.ctrlKey && event.key.toLowerCase() === 'k') {
                console.log('Ctrl + K was pressed');
                // Prevent the default action if needed (e.g., to disable browser's default behavior)
                event.preventDefault();
            }
        });
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const myDefaultAllowList = bootstrap.Tooltip.Default.allowList
        myDefaultAllowList.i = ['data-bs-title']
        myDefaultAllowList.ul = ['data-bs-content']
        myDefaultAllowList.li = ['data-bs-content']
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl, {
            allowList: myDefaultAllowList,
            html: true,
            trigger: 'focus'
        }))
    </script>
@endsection
