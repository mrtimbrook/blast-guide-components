@props([
    'title' => null,
    'buttons' => null
])

@isset($buttons)

<div class="button-box">
    @isset($title)
        <h2>{{ $title }}</h2>
    @endisset

    <div>
        @foreach ($buttons as $button)
            <x-button.primary
                :href="$button['href'] ?? null"
                :icon="$button['icon'] ?? null"
                :iconPosition="$button['iconPosition'] ?? null"
            >
                {{ $button['label'] ?? null }}
            </x-button.primary>
        @endforeach
    </div>
</div>

@endisset

@once
<style>
    .button-box {
        padding: 36px;
        border: 1px solid #E5E7EB;
        background-color: #F3F4F6;
    }

    .button-box h2 {
        margin: 0 6px 12px;
        font-weight: 600;
        font-size: 18px;
    }

    .button-box .button {
        margin: 0 6px;
    }
</style>
@endonce
