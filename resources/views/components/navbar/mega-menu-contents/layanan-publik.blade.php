{{--
    LOGIKA UTAMA: Konten Mega Menu dipisah menjadi dua:
    1. Versi Desktop (Grid) -> Tampil di ukuran Large ke atas (lg)
    2. Versi Mobile (Accordion) -> Tampil di bawah ukuran Large (lg)
--}}
@php
    //format [href][menu title][description]
    $items = [
        ['https://semaik.lomboktengahkab.go.id/', 'Dukcapil (Semaik)', ''],
        ['#', 'Daftar RSUD', ''],
        ['#', 'Pajak & Retribusi', ''],
        ['#', 'PPDB', ''],
        ['#', 'Perizinan UMKM/OSS', ''],
        ['#', 'Bantuan Sosial', ''],
        ['#', 'Pengaduan SP4N', ''],
        ['#', 'Pariwisata & Event', ''],
    ];
@endphp
<div class="d-none d-lg-flex container-fluid">
    <div class="container py-4">
        <div class="row g-4">

            <div class="col">
                <div class="row gap-4 align-items-start justify-content-center">

                    @foreach ($items as $item)
                        <div class="col-3">
                            <a href="{{ $item[0] }}"
                                class="d-flex align-items-center mb-3 text-decoration-none text-dark">
                                <i class="bi bi-stack fs-4 me-2 text-info"></i>
                                <div>
                                    <strong class="d-block">{{ $item[1] }}</strong>
                                    <small class="text-muted">Layanan lengkap dari A-Z.</small>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    @if (fmod(count($items), 3) != 0)
                        <div class="col-3"></div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>

<div class="d-lg-none p-3">
    <div class="accordion accordion-flush" id="megaMenuMobile">

        <div class="accordion-item">
            <a href="{{ $items[0][0] }}"
                class="text-decoration-none d-block text-dark fw-bold fs-body-small p-3 navbar-toggler"
                data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                {{ $items[0][1] }}
            </a>
        </div>

    </div>
</div>
