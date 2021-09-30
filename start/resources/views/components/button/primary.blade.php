@props([
    'icon' => false,
    'iconPosition' => 'after',
    'href' => false,
])

@if (isset($href) && !empty($href))
    <a href="{!! $href !!}" {{ $attributes->class('button') }}>
        @if (isset($icon) && !empty($icon) && $iconPosition ==='before')
            @include('components.icon.'. $icon)
        @endif

        @if (!$slot->isEmpty())
            <span>{{ $slot }}</span>
        @endisset

        @if (isset($icon) && !empty($icon) && $iconPosition ==='after')
            @include('components.icon.'. $icon)
        @endif
    </a>
@else
    <button {{ $attributes->class('button') }}>
        @if (isset($icon) && !empty($icon) && $iconPosition ==='before')
            @include('components.icon.'. $icon)
        @endif

        @if (!$slot->isEmpty())
            <span>{{ $slot }}</span>
        @endisset

        @if (isset($icon) && !empty($icon) && $iconPosition ==='after')
            @include('components.icon.'. $icon)
        @endif
    </button>
@endif

@once
<style>
    .button {
        display: inline-flex;
        justify-items: center;
        align-items: center;
        padding: 16px 20px;
        background: #3B82F6;
        color: #fff;
        font-weight: 600;
        font-size: 18px;
        text-align: center;
        white-space: nowrap;
        transition: all 0.3s ease-in-out;
    }

    .button:hover {
        background: #121212;
    }

    .button svg:first-child {
        margin-right: 16px;
    }

    .button svg:last-child {
        margin-left: 16px;
    }
</style>
@endonce
