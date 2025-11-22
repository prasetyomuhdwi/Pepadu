@props(['infoUpdate' => '17/11/2025, 08:39 WITA'])

<div class="navbar navbar-expand-lg  navbar-light bg-white shadow-sm">
    <div class="d-flex flex-column container-fluid">
        <div class="container d-flex d-lg-block align-items-center align-items-lg-none">
            <div class="container-fluid d-flex flex-column flex-lg-row justify-content-lg-between gap-lg-0 gap-3"
                style="height: 70px">
                {{-- Logo --}}
                <div class="d-flex justify-content-center justify-content-lg-start align-items-center">
                    <a class="navbar-brand side-header align-items-center" href="#">
                        <img src="{{ URL::asset('/img/logo.svg') }}" alt="Logo" height="50px">
                    </a>
                </div>
                {{-- Search Box --}}
                <div class="d-lg-flex d-none align-items-center">
                    <x-inputs.search-box type="header" />
                </div>
                {{-- Info --}}
                <div class="d-lg-flex justify-content-end align-items-center d-none side-header">
                    <small
                        class="p-2 px-3 rounded-2 bg-body-tertiary fs-body-small">{{ 'Terakhir Diperbarui : ' . $infoUpdate }}
                        <i class="bi bi-info-circle-fill text-primary"></i>
                    </small>

                </div>

            </div>
            <div
                class="container-fluid d-flex flex-column flex-lg-row justify-content-ls-between gap-lg-0 gap-3"style="max-width:105px">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </div>
        <div class="container">
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item fs-6">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <x-navbar.nav-item-mega-menu>
                        <x-slot:title>
                            Layanan Publik
                        </x-slot>
                        <x-slot:content>
                            <x-navbar.mega-menu-contents.layanan-publik />
                        </x-slot>
                    </x-navbar.nav-item-mega-menu>

                    <x-navbar.nav-item-mega-menu>
                        <x-slot:title>
                            Pembayaran & Transaksi
                        </x-slot>
                        <x-slot:content>
                            @include('components.navbar.mega-menu-contents.pembayaran-transaksi')
                        </x-slot>
                    </x-navbar.nav-item-mega-menu>

                    <x-navbar.nav-item-mega-menu>
                        <x-slot:title>
                            Data & Informasi Publik
                        </x-slot>
                        <x-slot:content>
                            @include('components.navbar.mega-menu-contents.layanan-publik')
                        </x-slot>
                    </x-navbar.nav-item-mega-menu>

                    <x-navbar.nav-item-mega-menu>
                        <x-slot:title>
                            Profil Daerah & Pemerintahan
                        </x-slot>
                        <x-slot:content>
                            @include('components.navbar.mega-menu-contents.layanan-publik')
                        </x-slot>
                    </x-navbar.nav-item-mega-menu>
                </ul>

            </div>
        </div>
    </div>
</div>
