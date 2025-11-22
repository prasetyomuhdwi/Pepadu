@props(['height' => '50px', 'href' => route('landing'), 'src' => ''])

<a class="navbar-brand align-items-center" href="{{ $href }}">
    <img src="{{ $src }}" alt="Logo" height="{{ $height }}">
</a>
