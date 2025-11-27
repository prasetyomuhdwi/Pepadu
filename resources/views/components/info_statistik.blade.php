<div class="row row-cols-2 row-cols-lg-4 g-3">

    @php
        // Data dummy statistik
        $statistik = [
            ['title' => 'PERENCANAAN', 'value' => 'Rp 1,1T', 'icon' => 'bi-person', 'color' => 'primary'],
            ['title' => 'PERSIAPAN', 'value' => 'Rp 374,7M', 'icon' => 'bi-plus-circle', 'color' => 'success'],
            ['title' => 'PEMILIHAN', 'value' => 'Rp 373,4M', 'icon' => 'bi-check-circle', 'color' => 'info'],
            ['title' => 'KONTRAK', 'value' => 'Rp 94,2 M', 'icon' => 'bi-building', 'color' => 'warning'],
        ];
    @endphp

    @foreach ($statistik as $item)
        <div class="col">
            <div class="card p-3 text-center border-0 shadow-sm rounded-3">
                <div class="d-flex flex-column align-items-center gap-2">
                    {{-- // TODO: Placeholder Ikon/Avatar --}}
                    <div class="rounded-circle bg-{{ $item['color'] }} bg-opacity-10 p-2 d-flex justify-content-center align-items-center"
                        style="width: 48px; height: 48px;">
                        <i class="bi {{ $item['icon'] }} fs-5 text-{{ $item['color'] }}"></i>
                    </div>

                    <small class="text-uppercase fs-body-small text-muted fw-bold">{{ $item['title'] }}</small>
                    <h5 class="fw-bold mb-0 text-dark">{{ $item['value'] }}</h5>
                </div>
            </div>
        </div>
    @endforeach

</div>
