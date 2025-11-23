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
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const myDefaultAllowList = bootstrap.Tooltip.Default.allowList
        myDefaultAllowList.i = ['data-bs-title']
        myDefaultAllowList.ul = ['data-bs-content']
        myDefaultAllowList.li = ['data-bs-content']
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl, {
            allowList: myDefaultAllowList,
            html: true,
            trigger: 'focus'
        }))
    </script>
@endsection
