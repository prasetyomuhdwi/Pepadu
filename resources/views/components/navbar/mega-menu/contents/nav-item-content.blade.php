{{--
    LOGIKA UTAMA: Konten Mega Menu dipisah menjadi dua:
    1. Versi Desktop (Grid) -> Tampil di ukuran Large ke atas (lg)
    2. Versi Mobile (Accordion) -> Tampil di bawah ukuran Large (lg)
--}}

{{--
    *
    * @items format [href][title][icon (bootstrap icon)][description]
    *
--}}
@props(['contents'])

{{-- * Desktop * --}}
<div class="d-none d-lg-flex container-fluid">
    <div class="container py-4">
        <div class="row g-4">

            <div class="col">
                <div class="row gap-3 align-items-start justify-content-center">

                    {{-- TODO: buat dynamic component card nav-item --}}
                    @foreach ($contents as $item)
                        <a href="{{ $item['href'] }}" class="col-3 card-nav-item text-decoration-none rounded-2">
                            <div class="h-100 d-flex position-relative">
                                <div class="d-flex align-items-start flex-fill">
                                    <div class="icon-container shrink-0 d-flex justify-content-center align-items-start">
                                        <i class="bi {{ $item['bootstrapIcon'] }} fs-6 text-primary"></i>
                                    </div>

                                    <div class="d-flex flex-column grow flex-fill h-100 gap-1">
                                        <h5 class="fs-title text-warp text-dark m-0">{{ $item['cardTitle'] }}</h5>
                                        <p
                                            class="d-inline-block desc text-muted m-0 text-warp overflow-hidden fs-body-small text-start">

                                            {{ strlen($item['desc']) >= 106 ? substr($item['desc'], 0, 106 - strlen($item['desc']) - 3) . '...' : $item['desc'] }}
                                        </p>
                                    </div>
                                </div>

                                <div class="text-end link-wrapper position-absolute bottom-0 end-0">
                                    <span class="link-text text-primary fs-body-small">Lihat Semua</span>
                                    <i class="bi bi-box-arrow-up-right ms-1 link-icon fs-body-small"></i>
                                </div>

                            </div>
                        </a>

                        {{-- <div class="col-3">
                            <a href="{{ $item['href'] }}"
                                class="d-flex align-items-center mb-3 text-decoration-none text-dark">
                                <i class="bi bi-stack fs-4 me-2 text-info"></i>
                                <div>
                                    <strong class="d-block">{{ $item['cardTitle'] }}</strong>
                                    <small class="text-muted">{{ $item['desc'] }}</small>
                                </div>
                            </a>
                        </div> --}}
                    @endforeach

                    @if (fmod(count($contents), 3) != 0)
                        @for ($i = 0; $i < 3 - fmod(count($contents), 3); $i++)
                            <div class="col-3 card-nav-item filler"></div>
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

        @foreach ($contents as $item)
            <div class="accordion-item border-0">
                <a href="{{ $item['href'] }}"
                    class="text-decoration-none d-block text-dark fw-bold fs-body-small p-3 navbar-toggler"
                    data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                    {{ $item['cardTitle'] }}
                </a>
            </div>
        @endforeach

    </div>
</div>
