{{--
    LOGIKA UTAMA: Konten Mega Menu dipisah menjadi dua:
    1. Versi Desktop (Grid) -> Tampil di ukuran Large ke atas (lg)
    2. Versi Mobile (Accordion) -> Tampil di bawah ukuran Large (lg)
--}}

<div class="d-none d-lg-flex container-fluid">
    <div class="container py-4">
        <div class="row g-4">

            <div class="col-lg-3">
                <h6 class="text-uppercase fw-bold mb-3 text-primary">Kategori A</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none d-block py-1 text-dark">Link Cepat 1</a></li>
                    <li><a href="#" class="text-decoration-none d-block py-1 text-dark">Link Cepat 2</a></li>
                    <li><a href="#" class="text-decoration-none d-block py-1 text-dark">Link Cepat 3</a></li>
                </ul>
            </div>

            <div class="col-lg-6 border-start border-end">
                <h6 class="text-uppercase fw-bold mb-3">Layanan Populer</h6>
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="d-flex align-items-center mb-3 text-decoration-none text-dark">
                            <i class="bi bi-stack fs-4 me-2 text-info"></i>
                            <div>
                                <strong class="d-block">Layanan Fullstack</strong>
                                <small class="text-muted">Layanan lengkap dari A-Z.</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="d-flex align-items-center mb-3 text-decoration-none text-dark">
                            <i class="bi bi-database fs-4 me-2 text-danger"></i>
                            <div>
                                <strong class="d-block">Optimasi Database</strong>
                                <small class="text-muted">Akselerasi performa sistem.</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <h6 class="text-uppercase fw-bold mb-3 text-warning">Promo Spesial</h6>
                <div class="p-3 bg-light rounded">
                    <p class="mb-2">Diskon 50% untuk *Project Baru* Laravel 12!</p>
                    <a href="#" class="btn btn-sm btn-warning">Klaim Sekarang</a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="d-lg-none p-3">
    <div class="accordion accordion-flush" id="megaMenuMobile">

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileOne">
                <button class="accordion-button collapsed py-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseMobileOne" aria-expanded="false" aria-controls="collapseMobileOne">
                    Kategori A
                </button>
            </h2>
            <div id="collapseMobileOne" class="accordion-collapse collapse" aria-labelledby="headingMobileOne"
                data-bs-parent="#megaMenuMobile">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled ms-3">
                        <li><a href="#" class="text-decoration-none d-block py-1 text-dark">Link Cepat 1</a></li>
                        <li><a href="#" class="text-decoration-none d-block py-1 text-dark">Link Cepat 2</a></li>
                        <li><a href="#" class="text-decoration-none d-block py-1 text-dark">Link Cepat 3</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingMobileTwo">
                <button class="accordion-button collapsed py-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseMobileTwo" aria-expanded="false" aria-controls="collapseMobileTwo">
                    Layanan Populer
                </button>
            </h2>
            <div id="collapseMobileTwo" class="accordion-collapse collapse" aria-labelledby="headingMobileTwo"
                data-bs-parent="#megaMenuMobile">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled ms-3">
                        <li><a href="#" class="text-decoration-none d-block py-1 text-dark">Layanan Fullstack</a>
                        </li>
                        <li><a href="#" class="text-decoration-none d-block py-1 text-dark">Optimasi Database</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <a href="#" class="text-decoration-none d-block text-dark fw-bold p-3">
                Promo Spesial (Non-Collapse Item)
            </a>
        </div>

    </div>
</div>
