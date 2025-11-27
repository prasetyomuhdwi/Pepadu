{{--
/**
 *
 * @props string $type can contains either "default" or "navbar".
 * where the default type does not include the ‘Ctrl + K’ command
 */
 --}}

@props(['type' => 'default'])

@if ($type == 'navbar')
    <div class="d-flex align-items-center search-box">
        <button type="button" aria-label="Search (Ctrl+K)"
            class="GlobalSearch GlobalSearch-Button btn btn-outline-primary flex-fill d-flex justify-content-lg-between">
            <span
                class="GlobalSearch-Button-Container d-flex justify-content-lg-start justify-content-between flex-row-reverse flex-lg-row flex-fill gap-2 fs-body-small align-items-center">
                <i class="bi bi-search GlobalSearch-Search-Icon" width="20" height="20"></i>
                <span class="GlobalSearch-Button-Placeholder">Search</span>
            </span>

            <span class="GlobalSearch-Button-Keys d-xl-flex d-none">
                <kbd class="GlobalSearch-Button-Key fs-body-small">
                    CTRL + K
                </kbd>
            </span>
        </button>
    </div>
@else
    <div class="d-flex">
        <div class="align-items-center rounded search-box gap-2 d-flex bg-white position-relative">
            <input type="text" class="form-control rounded h-100 search-input" placeholder="Cari Layanan..."
                aria-label="Cari Layanan"
                class="GlobalSearch GlobalSearch-Button btn btn-outline-primary flex-fill d-flex justify-content-lg-between">
            </input>
            <i class="bi bi-search search-icon" width="20" height="20"></i>
        </div>
        <button class="btn btn-outline border-0 btn-hint" type="button" data-bs-toggle="popover"
            data-bs-placement="right" data-bs-custom-class="custom-popover"
            data-bs-title="<i class='bi bi-question-circle-fill text-white'></i> Pencarian Cepat "
            data-bs-content="
            <div class='d-flex flex-column gap-2'>
            <p class='text-body-strong text-start m-0'>Tips: ketik kata kunci masalah Anda, kami arahkan ke layanan yang tepat.</p>
            <div class='card px-1 py-2 d-flex flex-column gap-2'>
                <span class='fs-body-small'>Keterangan kode warna :</span>
                <ul class='list-group list-group-flush border-0 d-flex flex-column gap-1'>
                    <li class='list-group-item tag1 border-0 rounded-2 text-body-strong'>Layanan Publik</li>
                    <li class='list-group-item tag2 border-0 rounded-2 text-body-strong'>Data & Informasi Publik</li>
                    <li class='list-group-item tag3 border-0 rounded-2 text-body-strong'>Pembayaran & Transaksi</li>
                    <li class='list-group-item tag4 border-0 rounded-2 text-body-strong'>Profil Daerah & Pemerintahan</li>
                </ul>
            </div>
            </div>
            "><i
                class="bi bi-question-circle-fill"></i></button>
    </div>
@endif
