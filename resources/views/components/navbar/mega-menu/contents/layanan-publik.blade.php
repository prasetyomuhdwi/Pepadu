{{--
    LOGIKA UTAMA: Konten Mega Menu dipisah menjadi dua:
    1. Versi Desktop (Grid) -> Tampil di ukuran Large ke atas (lg)
    2. Versi Mobile (Accordion) -> Tampil di bawah ukuran Large (lg)
--}}
@php
    /**
     * @items format [href][title][icon (bootstrap icon)][description]
     */
    $items = [
        ['https://semaik.lomboktengahkab.go.id/', 'Dukcapil (Semaik)', '', 'ini description'],
        ['#', 'Daftar RSUD', '', 'ini description'],
        ['#', 'Pajak & Retribusi', '', 'ini description'],
        ['#', 'PPDB', '', 'ini description'],
        ['#', 'Perizinan UMKM/OSS', '', 'ini description'],
        ['#', 'Bantuan Sosial', '', 'ini description'],
        ['#', 'Pengaduan SP4N', '', 'ini description'],
        ['#', 'Pariwisata & Event', '', 'ini description'],
    ];
@endphp

{{-- * Desktop * --}}
<div class="d-none d-lg-flex container-fluid">
    <div class="container py-4">
        <div class="row g-4">

            <div class="col">
                <div class="row gap-4 align-items-start justify-content-center">

                    {{-- TODO: buat dynamic component card nav-item --}}
                    @foreach ($items as $item)
                        <div class="col-3">
                            <a href="{{ $item[0] }}"
                                class="d-flex align-items-center mb-3 text-decoration-none text-dark">
                                <i class="bi bi-stack fs-4 me-2 text-info"></i>
                                <div>
                                    <strong class="d-block">{{ $item[1] }}</strong>
                                    <small class="text-muted">{{ $item[3] }}</small>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    @if (fmod(count($items), 3) != 0)
                        @for ($i = 0; $i < fmod(count($items), 3) + 1; $i++)
                            <div class="col-3"></div>
                        @endfor
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>

{{-- * Mobile * --}}
<div class="d-lg-none p-3">
    <div class="accordion accordion-flush d-flex flex-column gap-2 g-0 " id="megaMenuMobile">

        @foreach ($items as $item)
            <div class="accordion-item border-0">
                <a href="{{ $item[0] }}"
                    class="text-decoration-none d-block text-dark fw-bold fs-body-small p-3 navbar-toggler"
                    data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                    {{ $item[1] }}
                </a>
            </div>
        @endforeach

    </div>
</div>
