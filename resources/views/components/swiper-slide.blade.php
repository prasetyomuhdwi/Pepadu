@props(['dinas'])

<div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden w-full">
    <div class="swiper-wrapper" id="swiper-wrapper-c1d86a356bb87c9d" aria-live="polite">

        @foreach ($dinas as $index => $item)
            <div class="swiper-slide <?= $index == 0 ? 'swiper-slide-active' : 'swiper-slide' ?> d-flex align-items-center justify-content-around gap-1"
                role="group">
                <div class="d-flex align-items-center h-100" style="max-height: 50px">
                    <img class="img-fluid" src="{{ $item }}" alt="{{ 'dinas' . $index }}">
                </div>
            </div>
        @endforeach

    </div>
</div>
