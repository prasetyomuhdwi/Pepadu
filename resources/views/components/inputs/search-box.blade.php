{{--
/**
 *
 * @props string $type can contains either "default" or "header".
 * where the default type does not include the ‘Ctrl + K’ command
 */
 --}}

@props(['type' => 'default'])


<div class="d-flex align-items-center search-box">
    <button type="button" aria-label="Search (Ctrl+K)"
        class="GlobalSearch GlobalSearch-Button btn btn-outline-primary flex-fill d-flex justify-content-lg-between">
        <span
            class="GlobalSearch-Button-Container d-flex justify-content-lg-start justify-content-between flex-row-reverse flex-lg-row flex-fill gap-2 fs-body-small align-items-center">
            <i class="bi bi-search GlobalSearch-Search-Icon" width="20" height="20"></i>
            <span class="GlobalSearch-Button-Placeholder">Search</span>
        </span>
        @if ($type == 'header')
            <span class="GlobalSearch-Button-Keys d-xl-flex d-none">
                <kbd class="GlobalSearch-Button-Key fs-body-small">
                    CTRL + K
                </kbd>
            </span>
        @endif
    </button>
</div>
