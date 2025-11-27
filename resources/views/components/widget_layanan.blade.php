<div class="card p-4 shadow-sm rounded-3 bg-secondary-alt d-flex flex-column gap-2">
    <div class="d-flex justify-content-between py-3">
        <h4>Widget Layanan</h4>
        <div class="input-group" style="max-width: 350px;">
            <x-inputs.search-box />
        </div>
    </div>

    {{-- Grid Layanan (3 Kolom) --}}
    <div class="bg-white rounded-3 h-100 p-3">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 overflow-y-scroll g-3">

            @php
                // Data dummy layanan
                $layanan = [
                    ['title' => 'Ajukan Dokumen Dukcapil', 'icon' => 'bi-file-earmark-text'],
                    ['title' => 'Daftar RSUD Praya', 'icon' => 'bi-clipboard-plus'],
                    ['title' => 'Realisasi PAD', 'icon' => 'bi-graph-up'],
                    ['title' => 'PPDB', 'icon' => 'bi-mortarboard'],
                    ['title' => 'Perizinan UMKM/OSS', 'icon' => 'bi-building'],
                    ['title' => 'Bantuan Sosial', 'icon' => 'bi-people'],
                    ['title' => 'Pengaduan SPAN', 'icon' => 'bi-chat-dots'],
                    ['title' => 'Pariwisata & Event', 'icon' => 'bi-globe'],
                    ['title' => 'E-Retribusi', 'icon' => 'bi-wallet2'],
                    ['title' => 'Bayar Pajak', 'icon' => 'bi-cash'],
                    ['title' => 'E-Ticketing Event', 'icon' => 'bi-ticket-perforated'],
                    ['title' => 'Jadwal Samsat Keliling', 'icon' => 'bi-geo-alt'],
                    ['title' => 'Pengadaan (LPSE)', 'icon' => 'bi-cart'],
                    ['title' => 'APBD & Realisasi', 'icon' => 'bi-book'],
                    ['title' => 'Kinerja PD (SAKIP)', 'icon' => 'bi-speedometer2'],
                ];
            @endphp

            @foreach ($layanan as $item)
                <div class="col">
                    {{-- // TODO: Create Component Item Layanan --}}
                    <a href="#"
                        class="d-flex align-items-center p-3 border rounded-3 text-decoration-none text-dark hover-shadow-sm">
                        <i class="bi {{ $item['icon'] }} fs-5 me-3 text-primary"></i>
                        <span class="fw-medium">{{ $item['title'] }}</span>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>
