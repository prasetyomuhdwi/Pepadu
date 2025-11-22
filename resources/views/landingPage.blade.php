@extends('layouts.app')

@section('navbar')
    @include('components.navbar.default')
@endsection

@section('jsInject')
    <script>
        document.addEventListener('keydown', function(event) {
            // Check if Ctrl is pressed and the key is 'k' (case-insensitive)
            if (event.ctrlKey && event.key.toLowerCase() === 'k') {
                console.log('Ctrl + K was pressed');
                // Prevent the default action if needed (e.g., to disable browser's default behavior)
                event.preventDefault();
            }
        });
    </script>
@endsection
