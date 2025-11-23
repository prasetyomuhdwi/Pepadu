@props([
    'dinas' => [
        URL::asset('/img/dinas/img-1.png'),
        URL::asset('/img/dinas/img-2.png'),
        URL::asset('/img/dinas/img-3.png'),
        URL::asset('/img/dinas/img-4.png'),
        URL::asset('/img/dinas/img-5.png'),
        URL::asset('/img/dinas/img-6.png'),
        URL::asset('/img/dinas/img-7.png'),
        URL::asset('/img/dinas/img-8.png'),
        URL::asset('/img/dinas/img-9.png'),
    ],
]);

@php
    $carouselItems = array_chunk($dinas, 3);
@endphp

<div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden w-full">
    <div class="swiper-wrapper" id="swiper-wrapper-c1d86a356bb87c9d" aria-live="polite">

        @foreach ($carouselItems as $key => $slides)
            <div class="swiper-slide <?= $key == 0 ? 'swiper-slide-active' : 'swiper-slide' ?> d-flex align-items-center justify-content-around gap-1"
                role="group">
                @foreach ($slides as $index => $item)
                    <div class="h-100">
                        <img class="img-fluid" src="{{ $item }}" alt="{{ 'dinas' . $index }}" style="height: 50px">
                    </div>
                @endforeach
            </div>
        @endforeach

    </div>
</div>
