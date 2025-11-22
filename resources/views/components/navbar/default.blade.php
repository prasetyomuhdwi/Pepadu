@props(['infoUpdate' => '17/11/2025, 23:39 WITA'])

<div class="navbar navbar-expand-lg  navbar-light bg-white shadow-sm">
    <div class="d-flex flex-column container-fluid">
        <div class="container d-flex d-lg-block align-items-center align-items-lg-none">
            <div class="container-fluid d-flex flex-column flex-lg-row justify-content-lg-between gap-lg-0 gap-3 px-0">
                {{-- Logo --}}
                <div class="d-flex justify-content-center justify-content-lg-start align-items-center side-header">
                    <x-logo src="{{ URL::asset('/img/logo-horizontal.svg') }}" />
                </div>
                {{-- Search Box --}}
                <div class="d-lg-flex d-none align-items-center">
                    <x-inputs.search-box type="navbar" />
                </div>
                {{-- Info --}}
                <div class="d-lg-flex justify-content-end align-items-center d-none side-header">
                    <small class="p-2 px-3 rounded-2 bg-body-tertiary fs-body-small d-flex align-items-center gap-2">
                        <span>{{ 'Terakhir Diperbarui : ' . $infoUpdate }}</span>
                        <button class="btn border-0 p-0" data-bs-toggle="popover" data-bs-placement="right"
                            data-bs-custom-class="custom-popover"
                            data-bs-title="<i class='bi bi-info-circle-fill text-white'></i> Informasi"
                            data-bs-content="

                                <p class='fs-body-small text-start m-0'>Penarikan data dilakukan secara otomatis 1x sehari mulai dini hari</p>

                            ">
                            <i class="bi bi-info-circle-fill text-primary"></i>
                        </button>
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

                    <x-navbar.mega-menu.nav-item>
                        <x-slot:title>
                            Layanan Publik
                        </x-slot>
                        <x-slot:content>
                            <x-navbar.mega-menu.contents.layanan-publik />
                        </x-slot>
                    </x-navbar.mega-menu.nav-item>

                    <x-navbar.mega-menu.nav-item>
                        <x-slot:title>
                            Pembayaran & Transaksi
                        </x-slot>
                        <x-slot:content>
                            <x-navbar.mega-menu.contents.pembayaran-transaksi />
                        </x-slot>
                    </x-navbar.mega-menu.nav-item>

                    <x-navbar.mega-menu.nav-item>
                        <x-slot:title>
                            Data & Informasi Publik
                        </x-slot>
                        <x-slot:content>
                            <x-navbar.mega-menu.contents.data-informasi-publik />
                        </x-slot>
                    </x-navbar.mega-menu.nav-item>

                    <x-navbar.mega-menu.nav-item>
                        <x-slot:title>
                            Profil Daerah & Pemerintahan
                        </x-slot>
                        <x-slot:content>
                            <x-navbar.mega-menu.contents.profil-daerah-pemerintahan />
                        </x-slot>
                    </x-navbar.mega-menu.nav-item>
                </ul>

            </div>
        </div>
    </div>
</div>
