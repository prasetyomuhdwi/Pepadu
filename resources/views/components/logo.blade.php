@props(['height' => '50px', 'href' => route('landing'), 'src' => URL::asset('/img/logo-horizontal.svg')])

@if ($href == '')
    <img src="{{ $src }}" alt="Logo" height="{{ $height }}">
@else
    <a class="navbar-brand align-items-center" href="{{ $href }}">
        <img src="{{ $src }}" alt="Logo" height="{{ $height }}">
    </a>
@endif
